<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('custom/include/Reportes/SP_Reporte.php');
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}
class ReporteApplicationSent extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $totalClientes;
    public $totalCotizaciones;
    public $totalVentas;
    public $totalReservas;
    public $archivo="ReporteApplicationSent";
    
    
    function __construct(& $form){
         $this->form=$form;
        if(file_exists(SP_PATHREPORTES.'/ReporteApplicationSent/ReporteApplicationSentDef.php')){
              include_once SP_PATHREPORTES.'/ReporteApplicationSent/ReporteApplicationSentDef.php';
              $this->parametros=$reportedef;
         }
         
         parent::__construct();
       

    }
    // function
    function  setTitle() {
        parent::setTitle($this->parametros['title']);
    }
    function  setSql() {
        $query=" SELECT a.name student_name, o.institution univesity, o.coursename course, ev.fecha date, WEEK(ev.fecha) semanas_inicio, WEEK('".date("Y-m-d")."') semanas_fin 
                 FROM accounts a, opportunities o, etapa_venta ev, accounts_opportunities ao
                 WHERE a.id=ao.account_id AND o.id=opportunity_id AND o.id=ev.id_oportunidad 
                       AND a.deleted=0 AND o.deleted=0 AND ao.deleted=0 AND ev.deleted=0 AND o.sales_stage='application_sent'  ";

        parent::setSql($query);
    }
    function calculoPorcentaje($valor,$total){
        if($total<=0)
            return 0;
        return round(($valor*100)/$total,2);
    }
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros();
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   function armarFiltros(){
       $filtros='';
        
//       if(count($this->form['usuarios'])>0)
//            $filtros.= " and u.id in ('". implode("','",$this->form['usuarios']) ."')";
//
//       $val=0;

       return $filtros;
   }
   function armarArray($result=array()){
       global $mod_strings,$current_language,$app_list_strings;
       $data=array();
       $valor=array();
       $cont=0;
          
       while($a = $this->db->fetchByAssoc($result)) {
           $data['student_name']=$a['student_name'];
           $data['univesity']=$a['univesity'];
           $data['course']=$a['course'];
           $data['date']=$a['date'];
           $data['weeks']=(int)$a['semanas_fin'] - (int)$a['semanas_inicio'];
           $valor[$cont]=$data;
           $cont++;
      }
      $newData=array();
      foreach($valor as $key=>$value){
          array_push($newData,$value);
      }
      return $newData;

   }

  function exportexcel(){
       parent::exportexcel();
       $this->sql="";
       $this->generateFileName();
       $this->sql.=$this->setSql().$this->armarFiltros();
      $result=$this->excecutequery();
      $this->arrayTabla=$this->armarArray($result);
    if(!empty($this->arrayTabla)){

                $this->setExcel();
//                $this->setLogo();
                $this->setHeader($this->parametros['title']);
                $this->setPrintMargin();
                $this->setHeightRow(1,36);

                $total=count($this->parametros['exceltitles']);
                $cont=0;
                
        /*Imprime las columnas del reporte */
        for ($i=65; $i<=90; $i++){
            $cell=chr($i);
            $this->objPHPExcel->getActiveSheet()->setCellValue($cell."5", $this->parametros['exceltitles'][$cont]);
            $this->objPHPExcel->getActiveSheet()->getStyle($cell."5")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            $this->setAutoSize($cell);
           
                if($cont==$total-1){
                    break;
                }
            $cont++;
        }
        //$this->objPHPExcel->getActiveSheet()->mergeCells('A1:'.$cell."1");
        $this->objPHPExcel->getActiveSheet()->mergeCells('A3:'.$cell."3");

        $this->setHeightRow();
        $this->setColumnHeader('A5',$cell.'5');

        $columna_final=$cell;
        $cont=6;

        foreach ($this->arrayTabla as $arreglo){
            $val=65;
            foreach ($arreglo as $key =>$value){
                $cell=chr($val);
                $cell.=$cont;
                $this->objPHPExcel->getActiveSheet()->setCellValue($cell, $value);
                $val++;
                }
          $cont++;

        }
        $finalcel=$cont-1;
        
        $this->setAllBorder('A5',$columna_final.$finalcel);
        $this->objPHPExcel->getActiveSheet()->setAutoFilter('A1:H'.$finalcel);
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $this->objPHPExcel->setActiveSheetIndex(0);
        // Save Excel 2007 file
        $this->objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');
        $this->objWriter->save(str_replace('.php', '.xls', __FILE__));
        $this->downloadFile($this->archivo);
      }else{
            $this->showdata=true;
            $this->display();
       }


   }
function downloadFile($name){
    parent::downloadFile($name);
}

   function displayParametros(){
      global $current_user, $timedate, $app_list_strings, $current_language, $mod_strings;
      include('include/javascript/javascript.php');
      $this->setTitle();
      $javascript = new javascript();
      $javascript->setFormName('SP_Reporte');
      $this->sugar_smarty->assign("reportes",$this->form['reportes']);
      $this->sugar_smarty->assign("TIME_FORMAT", '('. $timedate->get_user_time_format().')');
      $this->sugar_smarty->assign("USER_DATEFORMAT", '('. $timedate->get_user_date_format().')');
      $this->sugar_smarty->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
      $this->sugar_smarty->assign('additionalScripts', $javascript->getScript(false));
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);
      $this->sugar_smarty->assign("selected_data",$this->user());
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteApplicationSent/tpls/parametros.html');
      parent::displayParametros();
   }
   function  display() {
      global $current_user, $timedate, $app_list_strings, $current_language, $mod_strings;
      include('include/javascript/javascript.php');
      $this->setTitle();
      $this->armarquery();
      
      $this->sugar_smarty->assign("reportes",$this->form['reportes']);
      $this->sugar_smarty->assign("TIME_FORMAT", '('. $timedate->get_user_time_format().')');
      $this->sugar_smarty->assign("USER_DATEFORMAT", '('. $timedate->get_user_date_format().')');
      $this->sugar_smarty->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
 
      $this->sugar_smarty->assign('show_data',$this->showdata);
    
      $this->sugar_smarty->assign("selected_data",$this->user());
       
       
      $this->sugar_smarty->assign('data',$this->arrayTabla);
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);

      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteApplicationSent/tpls/parametros.html');

       parent::display();
    }

   function  mostrarData() {

       parent::mostrarData();
   }


   /*Total de clientes de la empresa*/

   function getTotalClientes(){
       $filtros=" and  a.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";
      /* if(count($this->form['usuarios'])>0)
            $filtros.= " and a.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
*/
       $this->sql="Select count(*) total from accounts a, users u where a.assigned_user_id=u.id and a.deleted=0 ".$filtros;
      // echo $this->sql;
      // var_dump($this->form);
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;
   }
   /*Total de inmuebles de interes que se encuentran en etapa de visita*/

   function getTotalCotizaciones(){
       $total=0;
      $filtros=" and  o.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";
  /*    if(count($this->form['usuarios'])>0)
            $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
*/
      $this->sql="Select count(*) total from opportunities o, 
                  users u where o.assigned_user_id=u.id
                  and o.sales_stage like '%visita%' and o.deleted=0".$filtros;
//      echo $this->sql;
      $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;
   }
   function getTotalReservas(){
      $filtros=" and  o.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";
  /*    if(count($this->form['usuarios'])>0)
            $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
*/
      $this->sql="Select count(*) total from opportunities o, users u
                 where o.assigned_user_id=u.id and
                 ( o.sales_stage like '%reserva%' or o.sales_stage like '%calificacion%'
                  or o.sales_stage like '%recopilacionDocumentos%') and o.deleted=0".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;
   }
   /* Total de inmuebles de interes que se encuentran en etapa de ganadas */
   function getTotalVentas(){
       $filtros=" and  b.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";
     /*  if(count($this->form['usuarios'])>0)
            $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
*/
       $this->sql="Select count(b.id) total from accounts_opportunities c
        INNER JOIN accounts a ON c.account_id = a.id
        AND c.deleted =0
        INNER JOIN opportunities b ON c.opportunity_id = b.id
        AND b.deleted =0
        INNER JOIN accounts_cstm d ON c.account_id = d.id_c
        INNER JOIN opportunities_cstm f ON b.id = f.id_c
        
where
                   b.sales_stage like '%Closed Won%'".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
        return $total;
   }

   function getTotalClientesxVendedor($idVendedor){
       $total=0;
       $filtros=" and  a.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";

       $this->sql="Select count(a.id) total from accounts a,users u
                   where a.assigned_user_id=u.id and  a.deleted=0 and a.assigned_user_id='".$idVendedor."'".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;

   }
   function getTotalCotizacionesxVendedor($idVendedor=''){
       $total=0;
       $filtros=" and  o.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";

       $this->sql="Select count(o.id) total from opportunities o,users u
            where o.assigned_user_id=u.id and  o.deleted=0 and o.sales_stage like '%visita%' and o.assigned_user_id='".$idVendedor."'".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;
   }
   function getTotalReservaxVendedor($idVendedor=''){
       $total=0;
       $filtros=" and  o.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";

       $this->sql="Select count(o.id) total from opportunities o,users u
            where o.assigned_user_id=u.id and  o.deleted=0 and 
            ( o.sales_stage like '%reserva%' or o.sales_stage like '%calificacion%'
            or o.sales_stage like '%recopilacionDocumentos%')  and o.assigned_user_id='".$idVendedor."'".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;
       return $total;
   }



   function getTotalVentasxVendedor($idVendedor=''){
       $total=0;
       $filtros=" and  o.date_entered between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";
       $this->sql="Select count(o.id) total from opportunities o,users u
            where o.assigned_user_id=u.id and o.deleted=0 and o.sales_stage like '%Closed Won%' and o.assigned_user_id='".$idVendedor."'".$filtros;
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['total']))? $total :$a['total'] ;

      return $total;

   }
}
?>
