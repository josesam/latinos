<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('custom/include/Reportes/SP_Reporte.php');
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}
class ReporteStudentWithoutApplications extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $totalClientes;
    public $totalCotizaciones;
    public $totalVentas;
    public $totalReservas;
    public $archivo="ReporteStudentWithoutApplications";
    
    
    function __construct(& $form){
         $this->form=$form;
        if(file_exists(SP_PATHREPORTES.'/ReporteStudentWithoutApplications/ReporteStudentWithoutApplicationsDef.php')){
              include_once SP_PATHREPORTES.'/ReporteStudentWithoutApplications/ReporteStudentWithoutApplicationsDef.php';
              $this->parametros=$reportedef;
         }
         
         parent::__construct();
       

    }
    // function
    function  setTitle() {
        parent::setTitle($this->parametros['title']);
    }
    function  setSql() {
        $query=" SELECT id,name, phone_alternate celular, phone_office telefono, status, potential, levelinterest, areainterest
                 FROM accounts 
                 WHERE deleted=0 AND (id NOT IN (SELECT account_id FROM accounts_opportunities WHERE deleted=0)) ";

        parent::setSql($query);
    }
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros();
//        echo $this->sql;
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   function armarFiltros(){
       $filtros='';
        
       if(count($this->form['estado_estudiante'])>0)
            $filtros.= " and status in ('". implode("','",$this->form['estado_estudiante']) ."')";

       if(count($this->form['potential'])>0)
            $filtros.= " and potential in ('". implode("','",$this->form['potential']) ."')";
       
       $nivelInteres = $this->form['nivel_interes'];
       if(count($this->form['nivel_interes'])>0){
           $filtros.= " and levelinterest LIKE '%". $nivelInteres[0] ."%' ";
           for($i=1;$i<count($this->form['nivel_interes']);$i++)
               $filtros.= "  OR levelinterest LIKE '%". $nivelInteres[$i] ."%'";
       }
       
       if(count($this->form['pais_interes'])>0)
            $filtros.= " and paisinterest in ('". implode("','",$this->form['pais_interes']) ."')";
       
       
       $areaInteres = $this->form['area_interes'];
       if(count($this->form['area_interes'])>0){
           $filtros.= " and areainterest LIKE '%". $areaInteres[0] ."%' ";
           for($i=1;$i<count($this->form['area_interes']);$i++)
               $filtros.= "  OR areainterest LIKE '%". $areaInteres[$i] ."%'";
       }
       
       if(count($this->form['grupo_asociado'])>0)
            $filtros.= " and groupassociation in ('". implode("','",$this->form['grupo_asociado']) ."')";
       
       if(count($this->form['usuarios'])>0)
            $filtros.= " and assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
       
       if(count($this->form['usuarios'])>0)
           $filtros.= " and assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
           
            
       
       if(($this->form['fecha_inicial_registro']!='') && ($this->form['fecha_final_registro']!=''))
           $filtros=" and  DATE(date_entered) between '".$this->form['fecha_inicial_registro']."' and '".$this->form['fecha_final_registro']."'";
       
       
       return $filtros;
   }
   function armarArray($result=array()){
       global $mod_strings,$current_language,$app_list_strings,$db;
       $data=array();
       $valor=array();
       $cont=0;
          
       while($a = $this->db->fetchByAssoc($result)) {
           $data['name']=$a['name'];
           
           $sql11 = 'SELECT email_address 
                     FROM email_addresses ea, email_addr_bean_rel br 
                     WHERE ea.id=br.email_address_id AND br.bean_module= "Accounts" AND br.deleted=0 AND ea.deleted=0 AND br.bean_id="'.$a['id'].'"';
            $result11=$db->query($sql11);
            $correo = '';
            while ($w=$db->fetchByAssoc($result11)){
                $correo.= $w['email_address'] ." ";
            }
            
           $data['email']=$correo;
           $data['celular']=$a['celular'];
           $data['telefono']=$a['telefono'];
           $data['status']=$app_list_strings["estatus_dom"][$a['status']];
           $data['potential']=$a['potential'];
           $data['levelinterest']=$a['levelinterest'];
           $data['areainterest']=$a['areainterest'];
           
           $ultimaLlamada = $this->getUltimaLlamada($a['id']);
           $ultimaReunion = $this->getUltimaReunion($a['id']);
           
           if($ultimaLlamada==''){
               if($ultimaReunion==''){
                   $lastContact='';
               }else
                   $lastContact=$ultimaReunion;
           }else{
               if($ultimaReunion==''){
                   $lastContact=$ultimaLlamada;
               }else{
                   $sql12 = 'select date("'.$ultimaLlamada.'") < date("'.$ultimaReunion.'") AS resultados';
                   $result12=$db->query($sql12);
                   while ($d=$db->fetchByAssoc($result12)){
                       if($d['resultados']=='1'){
                           $lastContact = $ultimaReunion;
                       }else
                           $lastContact = $ultimaLlamada;
                   }
               }
           }
           
           $data['last_contact']=$lastContact;
           
           if($lastContact=='')
               $weeksLastContact = '';
           else{
               $sql13 = 'select (WEEK("'.date("Y-m-d").'") - WEEK("'.$lastContact.'")) AS resultados';
               $result13=$db->query($sql13);
               while ($u=$db->fetchByAssoc($result13)){
                   $weeksLastContact = $u['resultados'];
               }
           }
           $data['weeks_last_contact']=$weeksLastContact;
           
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
      $this->sugar_smarty->assign("selected_estado_estudiante",$this->estado_estudiante());
      $this->sugar_smarty->assign("selected_potential",$this->potential());
      $this->sugar_smarty->assign("selected_nivel_interes",$this->nivel_interes());
      $this->sugar_smarty->assign("selected_pais_interes",$this->pais_interes());
      $this->sugar_smarty->assign("selected_area_interes",$this->area_interes());
      $this->sugar_smarty->assign("selected_grupo_asociado",$this->grupo_asociado());
      $this->sugar_smarty->assign("selected_usuarios",$this->user());
      
      
      $this->sugar_smarty->assign('fecha_inicial_registro',$this->form['fecha_inicial_registro']);
      $this->sugar_smarty->assign('fecha_final_registro',$this->form['fecha_final_registro']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteStudentWithoutApplications/tpls/parametros.html');
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
    
      $this->sugar_smarty->assign("selected_estado_estudiante",$this->estado_estudiante());
      $this->sugar_smarty->assign("selected_potential",$this->potential());
      $this->sugar_smarty->assign("selected_nivel_interes",$this->nivel_interes());
      $this->sugar_smarty->assign("selected_pais_interes",$this->pais_interes());
      $this->sugar_smarty->assign("selected_area_interes",$this->area_interes());
      $this->sugar_smarty->assign("selected_grupo_asociado",$this->grupo_asociado());
      $this->sugar_smarty->assign("selected_usuarios",$this->user());
       
      $this->sugar_smarty->assign('data',$this->arrayTabla);
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);

      $this->sugar_smarty->assign('fecha_inicial_registro',$this->form['fecha_inicial_registro']);
      $this->sugar_smarty->assign('fecha_final_registro',$this->form['fecha_final_registro']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteStudentWithoutApplications/tpls/parametros.html');

       parent::display();
    }

   function  mostrarData() {

       parent::mostrarData();
   }


   function getUltimaLlamada($idEstudiante){
       $total='';
       $this->sql="SELECT MAX(DATE(date_end)) ultima_llamada 
                   FROM calls 
                   WHERE deleted=0 AND parent_type='Accounts' AND status='Held' AND parent_id='".$idEstudiante."' ";
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['ultima_llamada']))? $total :$a['ultima_llamada'] ;
       return $total;
   }
   
   
   function getUltimaReunion($idEstudiante){
       $total='';
       $this->sql="SELECT MAX(DATE(date_end)) ultima_reunion
                   FROM meetings 
                   WHERE deleted=0 AND parent_type='Accounts' AND status='Held' AND parent_id='".$idEstudiante."' ";
       $result=$this->excecutequery();
       $a = $this->db->fetchByAssoc($result);
       $total=(empty($a['ultima_reunion']))? $total :$a['ultima_reunion'] ;
       return $total;
   }

   
}
?>
