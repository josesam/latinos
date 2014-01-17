<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('custom/include/Reportes/SP_Reporte.php');
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}
class ReporteStudentWithApplications extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $totalClientes;
    public $totalCotizaciones;
    public $totalVentas;
    public $totalReservas;
    public $archivo="ReporteStudentWithApplications";
    
    
    function __construct(& $form){
         $this->form=$form;
        if(file_exists(SP_PATHREPORTES.'/ReporteStudentWithApplications/ReporteStudentWithApplicationsDef.php')){
              include_once SP_PATHREPORTES.'/ReporteStudentWithApplications/ReporteStudentWithApplicationsDef.php';
              $this->parametros=$reportedef;
         }
         
         parent::__construct();
       

    }
    // function
    function  setTitle() {
        parent::setTitle($this->parametros['title']);
    }
    function  setSql() {
        $query=" SELECT a.id id_estudiante,a.name name_estudiante, phone_alternate celular_estudiante, phone_office telefono_estudiante, o.sales_stage application_status,institution university, areainterest
                 FROM accounts a, opportunities o, accounts_opportunities ao 
                 WHERE a.id=ao.account_id AND o.id=opportunity_id AND a.deleted=0 AND o.deleted=0 AND ao.deleted=0 ";

        parent::setSql($query);
    }
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros();
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   function armarFiltros(){
       $filtros='';
        
       if(count($this->form['sales_stage'])>0)
            $filtros.= " and o.sales_stage in ('". implode("','",$this->form['sales_stage']) ."')";

       if(count($this->form['university'])>0)
            $filtros.= " and o.institution in ('". implode("','",$this->form['university']) ."')";
       
       if(count($this->form['pais_interes'])>0)
            $filtros.= " and o.destination in ('". implode("','",$this->form['pais_interes']) ."')";
       
       if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
       
       if(($this->form['fecha_inicial_curso']!='') && ($this->form['fecha_final_curso']!=''))
           $filtros=" and  o.fecha_inicio_curso between '".$this->form['fecha_inicial_curso']."' and '".$this->form['fecha_final_curso']."'";
       

       return $filtros;
   }
   function armarArray($result=array()){
       global $mod_strings,$current_language,$app_list_strings,$db;
       $data=array();
       $valor=array();
       $cont=0;
          
       while($a = $this->db->fetchByAssoc($result)) {
           
           $data['name_estudiante']=$a['name_estudiante'];
           
           $sql11 = 'SELECT email_address 
                     FROM email_addresses ea, email_addr_bean_rel br 
                     WHERE ea.id=br.email_address_id AND br.bean_module= "Accounts" AND br.deleted=0 AND ea.deleted=0 AND br.bean_id="'.$a['id_estudiante'].'"';
            $result11=$db->query($sql11);
            $correo = '';
            while ($w=$db->fetchByAssoc($result11)){
                $correo.= $w['email_address'] ." ";
            }
            
           $data['email']=$correo;
           $data['celular_estudiante']=$a['celular_estudiante'];
           $data['telefono_estudiante']=$a['telefono_estudiante'];
           $data['application_status']=$app_list_strings["sales_stage_dom"][$a['application_status']];
           $data['university']=$a['university'];
           $data['areainterest']=$a['areainterest'];
           
           $ultimaLlamada = $this->getUltimaLlamada($a['id_estudiante']);
           $ultimaReunion = $this->getUltimaReunion($a['id_estudiante']);
           
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
      $this->sugar_smarty->assign("selected_sales_stage",$this->sales_stage());
      $this->sugar_smarty->assign("selected_university",$this->university());
      $this->sugar_smarty->assign("selected_nivel_interes",$this->nivel_interes());
      $this->sugar_smarty->assign("selected_pais_interes",$this->pais_interes());
      $this->sugar_smarty->assign("selected_usuarios",$this->user());
      
      $this->sugar_smarty->assign('fecha_inicial_curso',$this->form['fecha_inicial_curso']);
      $this->sugar_smarty->assign('fecha_final_curso',$this->form['fecha_final_curso']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteStudentWithApplications/tpls/parametros.html');
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
    
      $this->sugar_smarty->assign("selected_sales_stage",$this->sales_stage());
      $this->sugar_smarty->assign("selected_university",$this->university());
      $this->sugar_smarty->assign("selected_nivel_interes",$this->nivel_interes());
      $this->sugar_smarty->assign("selected_pais_interes",$this->pais_interes());
      $this->sugar_smarty->assign("selected_usuarios",$this->user());
       
       
      $this->sugar_smarty->assign('data',$this->arrayTabla);
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);

      $this->sugar_smarty->assign('fecha_inicial_curso',$this->form['fecha_inicial_curso']);
      $this->sugar_smarty->assign('fecha_final_curso',$this->form['fecha_final_curso']);
      $this->sugar_smarty->display('custom/include/Reportes/container/ReporteStudentWithApplications/tpls/parametros.html');

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
