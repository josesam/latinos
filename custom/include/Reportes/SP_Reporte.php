<?php
/*
 * 
 * @author Jose Sambrano
 * Sugarcrm Plugins
 */
require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");
require_once('include/utils.php');
require_once('include/utils.php');
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}

class SP_Reporte extends SugarBean{
    protected $sql;
    protected $objRichText;
    protected $objPayable;
    protected $objPHPExcel;
    protected $objDrawing;
    protected $showdata=false;
    protected $totalreqistros=10;
    protected $start=0;
    protected $array=array();
    protected $filtros=array();
    protected $form=array();
    protected $title=" Reportes Sugarcrm Plugins ";
    protected $sugar_smarty;
    protected $arrayTabla=array();
    protected $fileName;
    protected $itemsPerPage=10;
    protected $numPagina=1;
    protected $inicio=0;
    protected $fin=0;
    protected $totalpaginas=0;
    protected $pagactual=1;
    protected $params;
    protected $is_excel=false;
    protected $meses=array(
        '1'=>'Enero',
        '2'=>'Febrero',
        '3'=>'Marzo',
        '4'=>'Abril',
        '5'=>'Mayo',
        '6'=>'Junio',
        '7'=>'Julio',
        '8'=>'Agosto',
        '9'=>'Septiembre',
        '10'=>'Octubre',
        '11'=>'Noviembre',
        '12'=>'Diciembre',
    );


    function __construct(& $form=array()){
      $this->sugar_smarty = new Sugar_Smarty();
      parent::SugarBean();
    }
    protected function setParam(){}
    protected function generateFileName(){ }
    protected function setTitle($var=""){
        $this->title=$var;
    }
    protected function getTitle(){
        return $this->title;
    }
    protected function setSql($var=""){
        $this->sql=$var;
    }

    protected function excecutequery(){
       return $this->db->query($this->sql);
    }

    protected function totalQuery(){}

    protected function exportdata(){}

    protected function downloadFile($name){
                include_once 'include/utils.php';
                $local_location=SP_PATHREPORTES.$name.'/'.$name.'.xls';
                $download_location=SP_PATHREPORTES.'/'.$name.'/'.$name.'.xls';
                $tam=filesize($local_location);
                header("Pragma: public");
		header("Cache-Control: maxage=1, post-check=0, pre-check=0");
		header("Content-type: application/force-download");
		header("Content-Length: " . filesize($local_location));
		header("Content-disposition: attachment; filename=\"".$name.".xls\";");
		header("Expires: 0");
		set_time_limit(0);

		@ob_end_clean();
		ob_start();

            	echo file_get_contents($download_location);
		@ob_flush();

    }

    protected function exportexcel(){
        require_once SP_PATHEXCEL.'PHPExcel.php';
        $this->objPHPExcel = new PHPExcel();
    }

    protected function setExcel(){
         $this->objPHPExcel->getProperties()->setCreator("Jose Sambrano")
							 ->setLastModifiedBy("Jose Sambrano")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("Office 2007 openxml php")
							 ->setCategory("Test result file");
    }
    protected function setLogo(){
        $this->objDrawing = new PHPExcel_Worksheet_Drawing();
        $this->objDrawing->setName(LOGONAME);
        $this->objDrawing->setDescription(LOGODESCRIPTION);
        $this->objDrawing->setPath(LOGOIMAGE);
        $this->objDrawing->setHeight(LOGOHEIGHT);
        $this->objDrawing->setHeight(LOGOWIDTH);
        $this->objDrawing->setWorksheet($this->objPHPExcel->getActiveSheet());
    }
    protected function setPrintMargin(){
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setTop(1);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.75);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.75);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(1);
    }
    protected function setHeader($reportName,$columna='A3',$numRow=3){


        $param_columns=array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_PATTERN_LIGHTDOWN  ,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFFFFFFF'
	 			)
	 		)
		);

        $this->objRichText = new PHPExcel_RichText();
        $this->objRichText->createText();
        $this->objPayable = $this->objRichText->createTextRun($reportName);
        $this->objPayable->getFont()->setBold(true);
        $this->objPayable->getFont()->setItalic(true);
        $this->objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
        $this->objPHPExcel->getActiveSheet()->getCell($columna)->setValue($this->objRichText);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->applyFromArray($param_columns);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setName('Candara');
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setSize(20);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setBold(true);
        
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->objPHPExcel->getActiveSheet()->getRowDimension($numRow)->setRowHeight(ROWHEIGHT);



    }
    protected function setAllBorder($col_start,$col_end){
        $styleThinBlackBorderOutline = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => COLORALLBORDERS),
		),
	),
        );
       $this->objPHPExcel->getActiveSheet()->getStyle($col_start.':'.$col_end)->applyFromArray($styleThinBlackBorderOutline);
    }

    protected function setColumnHeader($columnaInicial,$columnaFinal,$numRow=5){
        $param_columns=array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			),
			'borders' => array(
				'top'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN,
                                        

 				)
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_PATTERN_LIGHTDOWN  ,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFFFFFFF'
	 			)
	 		)
		);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->applyFromArray($param_columns);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->setName('Arial');
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->setSize(FONTHEIGHT);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        

    }
    
    protected function setAutoSize($column){
        $this->objPHPExcel->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
}
    protected function setHeightRow($numRow=5,$heigth=null){
        $height=(!is_null($heigth))?$heigth: ROWHEIGHT;
        $this->objPHPExcel->getActiveSheet()->getRowDimension($numRow)->setRowHeight($height);
    }

    protected function armarquery(){}
    protected function armarTabla(){}
    protected function armarFiltros(){}
    protected function armarArray(){ }
    protected function displayParametros(){}
    protected function mostrarData(){
        $this->showdata=true;
    }
    protected function dateFormatDb($fecha){
         global $timedate;
         return $timedate->to_db($fecha);
    }
    protected function display(){}
    function getStyle(){

       return SP_STYLE;
   }
   /**Filtros */
   protected function user(){
         $clientes=array();
         $this->sql="Select u.id,concat(first_name, ' ' , last_name) as user from users u where u.deleted=0  order by user_name ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                   $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_users($a['id']).">".$a['user'];
                 }
         return $cadena;
   }
  function selected_users($id){
        $retorno="";
        if(is_array($this->form['usuarios'])){
        foreach ($this->form['usuarios'] as $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
        }
        return $retorno;
    }



    protected function medios(){
         $clientes=array();
         $this->sql="Select u.name id ,name as user from js_mediosdecontacto u where u.deleted=0 order by name ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                   $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_medios($a['id']).">".substr($a['user'],0,20);
                 }
         return $cadena;
    }

    function selected_medios($id){
        $retorno="";
        if(is_array($this->form['medios'])){
        foreach ($this->form['medios'] as $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
        }
        return $retorno;
    }

    protected function tiponegocio(){
        global $app_list_strings;
        if(is_array($app_list_strings['tiponegocio_dom'])){
            foreach($app_list_strings['tiponegocio_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_tiponegocio($key).">".$status;
            }
        }
     return $cadena;
    }
    protected function selected_tiponegocio($estado){
    $retorno="";
        if(is_array($this->form['tipo'])){
        foreach ($this->form['tipo'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }

   /* protected function meses(){
        global $app_list_strings;
        if(is_array($app_list_strings['mescierre_list'])){
            foreach($app_list_strings['mescierre_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_meses($key).">".$status;
            }
        }
     return $cadena;
    }*/
   /* protected function selected_meses($estado){
    $retorno="";
        if(is_array($this->form['mes'])){
        foreach ($this->form['mes'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }
          }
        }
        return $retorno;
    }*/


 protected function anio(){
        global $app_list_strings;
        if(is_array($app_list_strings['aniocierre_list'])){
            foreach($app_list_strings['aniocierre_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_anio($key).">".$status;
            }
        }
     return $cadena;
    }
    protected function selected_anio($estado){
    $retorno="";
        if(is_array($this->form['anio'])){
        foreach ($this->form['anio'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }
          }
        }
        return $retorno;
    }


     protected function stages(){
        global $app_list_strings;
        if(is_array($app_list_strings['sales_stage_dom'])){
            foreach($app_list_strings['sales_stage_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_stages($key).">".$status;
            }
        }
     return $cadena;
    }
    protected function selected_stages($estado){
    $retorno="";
        if(is_array($this->form['sales_stage'])){
        foreach ($this->form['sales_stage'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }
          }
        }
        return $retorno;
    }
 function lead_source(){
        global $app_list_strings;
        if(is_array($app_list_strings['lead_source_dom'])){
            foreach($app_list_strings['lead_source_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_leadsource($key).">".$status;

            }

        }

    return $cadena;
  }
    function selected_leadsource($estado){
 $retorno="";
        if(is_array($this->form['leadsource'])){
        foreach ($this->form['leadsource'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }
   function motivos(){
        global $app_list_strings;
        if(is_array($app_list_strings['motivo_list'])){
            foreach($app_list_strings['motivo_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_motivos($key).">".$status;
            }
        }
        return $cadena;
    }
    function selected_motivos($estado){
        $retorno="";
        if(is_array($this->form['motivo'])){
        foreach ($this->form['motivo'] as  $key=> $user){
            if(trim($estado)==$key){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
      }
        return $retorno;
    }
   function anioinicial(){
        global $app_list_strings;
        if(is_array($app_list_strings['anio_list'])){
            foreach($app_list_strings['anio_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_anioinicial($key).">".$status;

            }

        }

        return $cadena;
    }
    function selected_anioinicial($estado){
        $retorno="";
        if(is_array($this->form['anioinicial'])){
        foreach ($this->form['anioinicial'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
      }
        return $retorno;
    }

    function aniofinal(){
        global $app_list_strings;
        if(is_array($app_list_strings['anio_list'])){
            foreach($app_list_strings['anio_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_anioinicial($key).">".$status;

            }

        }

        return $cadena;
    }
    function selected_aniofinal($estado){
        $retorno="";
        if(is_array($this->form['aniofinal'])){
        foreach ($this->form['aniofinal'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
      }
        return $retorno;
    }



     function status(){
        global $app_list_strings;
        if(is_array($app_list_strings['case_status_dom'])){
            foreach($app_list_strings['case_status_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_status($key).">".$status;

            }

        }

        return $cadena;
    }
    function selected_status($estado){
        $retorno="";
        if(is_array($this->form['status'])){
        foreach ($this->form['status'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
      }
        return $retorno;
    }


// esto es desde una tabla
function clientes(){
       $clientes=array();
       $this->sql="Select a.id,a.name as cliente from accounts a  where a.deleted=0 order by cliente";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_clientes($a['id']).">".substr($a['cliente'],0,40);
        }
     return $cadena;
}
    function selected_clientes($id=""){
        $retorno="";
        if(is_array($this->form['clientes'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['clientes'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }

// hasta aqui lo de clientes
// proyectos
function proyectos(){
       $proyectos=array();
       $this->sql="Select a.id,a.name as nombreproy,a.billing_address_zona zona from pro_proyectosproinmobiliara a  where a.deleted=0 order by nombreproy";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_proyectos($a['id']).">".substr($a['nombreproy'],0,40).'-'.$a['zona']."</option>";
        }
     return $cadena;
}
    function selected_proyectos($id=""){
        $retorno="";
        if(is_array($this->form['proyectos'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['proyectos'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }
    // tipo proyecto
function tipoProyecto(){
        global $app_list_strings;
        if(is_array($app_list_strings['tipoinmueble_list'])){
            foreach($app_list_strings['tipoinmueble_list'] as $key=> $tipoProyecto){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_status($key).">".$tipoProyecto;

            }

        }

        return $cadena;
    }
    function selected_tipoProyecto($estado){
        $retorno="";
        if(is_array($this->form['tipoProyecto'])){
        foreach ($this->form['tipoProyecto'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
      }
        return $retorno;
    }
function tipoProyecto2(){
        global $app_list_strings;
        if(is_array($app_list_strings['tipoinmuebleoportunidad_list'])){
            foreach($app_list_strings['tipoinmuebleoportunidad_list'] as $key=> $tipoProyecto2){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_tipoProyecto2($key).">".$tipoProyecto2;

            }

        }

        return $cadena;
    }
    function selected_tipoProyecto2($estado){
        $retorno="";
        if(is_array($this->form['tipoProyecto2'])){
        foreach ($this->form['tipoProyecto2'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
      }
        return $retorno;
    }
function tipoProducto(){
        global $app_list_strings;
        if(is_array($app_list_strings['tiponegocio_dom'])){
            foreach($app_list_strings['tiponegocio_dom'] as $key=> $tipoProducto){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_tipoProducto($key).">".$tipoProducto;

            }

        }

        return $cadena;
    }
    function selected_tipoProducto($estado){
        $retorno="";
        if(is_array($this->form['tipoProducto'])){
        foreach ($this->form['tipoProducto'] as  $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
      }
        return $retorno;
    }
    // este hice yo de prueba
    function contactoprueba()
    {
       $contactoprueba=array();
       $this->sql="Select a.id,a.last_name as contacto from contacts a  where a.deleted=0 order by contacto";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_contactoprueba($a['id']).">".substr($a['contacto'],0,40);
        }
     return $cadena;
    }
    function selected_contactoprueba()
    {
         $retorno="";
        if(is_array($this->form['contactoprueba'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['contactoprueba'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }
    // hasta aqui yo
    function lineas(){
       $clientes=array();
       $this->sql="Select distinct l.id,l.name from ln_categorias c, ln_categorias_ln_lineas_c r, ln_lineas l where
c.id=r.`ln_categor4317egorias_ida` and l.id=r.`ln_categor2a43_lineas_idb` and
c.deleted=0 and l.deleted=0 and r.deleted=0 ";

       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_lineas($a['id']).">".substr($a['name'],0,40);

        }
     return $cadena;
}

    function selected_lineas($id=""){
        $retorno="";
        if(is_array($this->form['linea'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['linea'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
        }
        return $retorno;
    }

    /*-----------------------------------------------------*/
    function servicios(){
       $clientes=array();
       $this->sql="SELECT id, name, ser_id FROM sp_servicios ORDER BY name";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_servicios($a['id']).">".substr($a['name'],0,40);
        }
        return $cadena;
    }

    function selected_servicios($id=""){
        $retorno="";
        if(is_array($this->form['servicios'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['servicios'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
        }
        return $retorno;
    }
   
    // cambiar solamente por el nombre que este en parametros
    protected function tipoIndustria(){
        global $app_list_strings;
        // cambiar lo que esta eb en_us.lang
        if(is_array($app_list_strings['industry_dom'])){
            foreach($app_list_strings['industry_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_tipoIndustria($key).">".$status;

            }

        }

     return $cadena;
    }
    protected function selected_tipoIndustria($estado){
    $retorno="";
    // este si variable de formulario parametros.html
        if(is_array($this->form['industry_dom'])){
        foreach ($this->form['industry_dom'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }
          }
        }
        return $retorno;
    }

function deserializar($data,$valor=""){
     if(!empty($data)){
                $resultado=unserialize(htmlspecialchars_decode($data));
                return $resultado[$valor];
     }
    return "";
}
function formatear($valor,$decimales='2',$dec_point = ',' , $thousands_sep = '.'){
    if ($this->showdata)
        return number_format($valor , $decimales , $dec_point, $thousands_sep );
    else
        return $valor;
}


 function nombreproyecto($condicion="",$latabla="",$elid=""){
   IF ($condicion==PROYECTO){
           switch ($latabla){
               case CASA:
                    $sqlcon="select a.pro_inmuebe8ddmuebles_ida as codrela, b.name as numofi,
                        b.estacionamientoasignado esta, b.estacionamientolinea estalinea,
                        c.estacionamientoindependiente_c estainde ,b.bodegaasignada bodega
                        from pro_inmuebles_casa_casa_c a inner join
                        casa_casa b on a.pro_inmuebc309sa_casa_idb=b.id and b.deleted=0
                        inner join casa_casa_cstm c on b.id=c.id_c
                       where a.pro_inmuebc309sa_casa_idb='".strtolower($elid)."' and a.deleted=0";
                  break;
               case LOCALCOMERCIAL:
                   $sqlcon="select a.pro_inmueb041cmuebles_ida as codrela, b.name as numofi,
                        b.estacionamientoasignado esta, b.estacionamientoslinea estalinea,
                        c.estacionamientosindependientes_c estainde ,b.bodegasasignadas bodega
                       from pro_inmueblcalcomercial_c a inner join
                       local_localcomercial b on a.pro_inmueb8f9bmercial_idb=b.id and b.deleted=0
                       inner join local_localcomercial_cstm c on b.id=c.id_c
                       where a.pro_inmueb8f9bmercial_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case DEPARTAMENTO:
                   $sqlcon="select a.pro_inmuebc58amuebles_ida as codrela, b.name as numofi,
                        b.estacionamientoasignado esta, b.estacionamientoslinea estalinea,
                        c.estacionamientosindependientes_c estainde ,b.bodegasasignadas bodega
                       from pro_inmueblepartamentos_c a inner join
                       depar_departamentos b on a.pro_inmueb73e2amentos_idb=b.id and b.deleted=0
                       inner join depar_departamentos_cstm c on b.id=c.id_c
                        where a.pro_inmueb73e2amentos_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case OFICINA:
                   $sqlcon="select a.pro_inmueb5519muebles_ida as codrela, b.name as numofi,
                        b.estacionamientosasignados esta, b.estacionamientoslineas estalinea,
                        c.estacionamientosindependientes_c estainde ,b.bodegasasignadas bodega
                        from pro_inmueblfici_oficina_c a inner join
                       ofici_oficina b on a.pro_inmuebb178oficina_idb=b.id and b.deleted=0
                       inner join ofici_oficina_cstm c on b.id=c.id_c
                         where a.pro_inmuebb178oficina_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case GALPON:
                   $sqlcon="select a.pro_inmueb1a3emuebles_ida as codrela, b.name as numofi,
                        '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmueblgalpo_galpon_c a inner join
                       galpo_galpon b on a.pro_inmuebdcbc_galpon_idb=b.id and b.deleted=0
                       where a.pro_inmuebdcbc_galpon_idb=".strtolower($elid)."' and a.deleted=0";
                      break;
               case CONSULTORIO:
                    $sqlcon="select a.pro_inmueb7282muebles_ida as codrela, b.name as numofi,
                             b.estacionamientoasignado esta, b.estacionamientolinea estalinea,
                             c.estacionamientosindependientes_c estainde ,b.bodegasasignadas bodega
                       from pro_inmuebl_consultorio_c a inner join
                        consu_consultorio b on a.pro_inmueba046ultorio_idb=b.id and b.deleted=0
                        inner join consu_consultorio_cstm c on b.id=c.id_c
                         where a.pro_inmueba046ultorio_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case TERRENO:
                   $sqlcon="select a.pro_inmuebbff4muebles_ida as codrela, b.name as numofi,
                        '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmueblerre_terreno_c a inner join
                       terre_terreno b on a.pro_inmuebd0a3terreno_idb=b.id and b.deleted=0
                        where a.pro_inmuebd0a3terreno_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case ESTACIONAMIENTO:
                     $sqlcon="select a.pro_inmueb86c6muebles_ida as codrela, b.name as numofi,
                          '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmueblcionamientos_c a inner join
                         pro_estacionamientos b on a.pro_inmuebab2emientos_idb=b.id and b.deleted=0
                         where a.pro_inmuebab2emientos_idb='".strtolower($elid)."' and a.deleted=0";
                   break;
               case BODEGA:
                   $sqlcon="select a.pro_inmueb50bbmuebles_ida as codrela, b.name as numofi,
                        '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmuebl_pro_bodegas_c a inner join
                       pro_bodegas b on a.pro_inmueb30bebodegas_idb=b.id and b.deleted=0
                         where a.pro_inmueb30bebodegas_idb='".strtolower($elid)."' and a.deleted=0";
                    break;
               case TITULO:
                    $sqlcon="select a.pro_inmueb3962muebles_ida as codrela, b.name as numofi,
                         '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmuebls_js_titulos_c a inner join
                        js_titulos b on a.pro_inmuebfc95titulos_idb=b.id and b.deleted=0
                         where a.pro_inmuebfc95titulos_idb='".strtolower($elid)."' and a.deleted=0";
                     break;
               case ACCION:
                    $sqlcon="select a.pro_inmuebe762muebles_ida as codrela, b.name as numofi,
                         '' esta, '' estalinea,
                        '' estainde ,'' bodega
                       from pro_inmuebl_js_acciones_c a inner join
                        js_acciones b on a.pro_inmueb5856cciones_idb=b.id and b.deleted=0
                         where a.pro_inmueb5856cciones_idb='".strtolower($elid)."' and a.deleted=0";
                    break;
           }
       }
       else{
       if ($condicion==MANDATO){
           $sqlcon="select a.id as codrela, a.name as numofi, a.zona as zona, a.nombrepropietario as promotor
                       from pro_consignacionmandato a
                        where a.id='".strtolower($elid)."' and a.deleted=0";
              $proyecto=array();
              $this->sql=$sqlcon;
              $resultadoSql = $this->excecutequery();


               while($c = $this->db->fetchByAssoc($resultadoSql)){

                 if(is_null($c)){
                        $resultadoSqlProyecto=array(proyecto=>'MANDA', zona=>'MANDA',promotor=>'MANDA',etapa=>'MANDA', inmueble=>'MANDA',elinmueble=>'MANDA',codproy=>'NO HAY');
                        return($resultadoSqlProyecto); }
                    else{
                        $resultadoSqlProyecto=array(proyecto=>'MANDATO', zona=>$c['zona'],promotor=>$c['promotor'],etapa=>'', inmueble=>'inmuble',elinmueble=>'elinmueble',codproy=>$c['codrela']);
                        return($resultadoSqlProyecto);
                      }
            }
              }
         }
         if (empty($sqlcon)){
              $resultadoSqlProyecto=array(proyecto=>'No hay', zona=>'No existe',promotor=>'NA',etapa=>'NA', inmueble=>'No  encontro',codproy=>'NO HAY');
             return($resultadoSqlProyecto);
         }
         $proyecto=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         if (empty($resultadoSql))
         {
             $resultadoSqlProyecto=array(proyecto=>'No hay', zona=>'No existe',promotor=>'NA',etapa=>'NA', inmueble=>'No  encontro',codproy=>'NO HAY');
             return($resultadoSqlProyecto);
         }
         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
            $y=$b['numofi'];
            $estacionamientos=(!empty($b['esta']))? 'E Asignado :'. $b['esta']  :  '';
            $estacionamientos.=(!empty($b['estalinea']))? 'E Independiente :'. $b['estalinea']  :  '';
            $estacionamientos.=(!empty($b['estainde']))? 'E Linea :'. $b['estainde']  :  '';
            $bodegas.=(!empty($b['bodega']))? 'B Asignada :'. $b['bodega']  :  '';
            $oficina=array('elinmueble'=>$y,'estacionamientos'=>$estacionamientos,'bodegas'=>$bodegas);
            $x=$b['codrela'];
            if(!empty($x)){
            $sql1 = "SELECT a.name as proyecto, a.billing_address_zona as zona, c.name as promotor, e.name as etapa, g.name as inmueble,
                        a.id as codproy
                        FROM pro_proyectosproinmobiliara a  inner join pro_promotooinmobiliara_c  b on a.id= pro_promotf536biliara_idb and b.deleted=0
                        inner join pro_promotor c  on b. pro_promotc42cromotor_ida=c.id and c.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on a.id=d.pro_proyec2d2fbiliara_ida and d.deleted=0
                        inner join pro_etapas e on e.id=d.pro_proyecdb3b_etapas_idb and e.deleted=0
                        inner join pro_etapas_ro_inmuebles_c f on e.id=f.pro_etapase83b_etapas_ida and f.deleted=0
                        inner join pro_inmuebles g on f.pro_etapasb2f9muebles_idb=g.id and g.deleted=0
                        where a.deleted=0 and g.id='".$x."'";
            $resultadoSqlProyecto=array();
            $this->sql=$sql1;
            $resultadoSqlProyecto = $this->excecutequery();
            while($c = $this->db->fetchByAssoc($resultadoSqlProyecto)){
            if(is_null($c)){
                $resultadoSqlProyecto=array(proyecto=>'No hay', zona=>'No existe',promotor=>'NA',etapa=>'NA', inmueble=>'No  encontro',codproy=>'NO HAY');
                return($resultadoSqlProyecto);
            }
            else{
                $d=$c+$oficina;
                return $d;
            }
            }
            }
            else{
                 $resultadoSqlProyecto=array(proyecto=>'No hay', zona=>'No existe',promotor=>'NA',etapa=>'NA', inmueble=>'No  encontro',elinmueble=>'NO HAY');
                 return($resultadoSqlProyecto);
            }
        }
               $resultadoSqlProyecto=array(proyecto=>'No hay', zona=>'No existe',promotor=>'NA',etapa=>'NA', inmueble=>'No  encontro',elinmueble=>'NO HAY');
               return($resultadoSqlProyecto);
            }
function pagado_reservacuota($oportunidad="")
    {

        $retorno=0;
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        c.name as cobranza, c.valorcuota as valorcuota FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and a.id='".$oportunidad. "' order by codopor";

        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();

         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
             $nomcobra=$b['cobranza'];
             $abuscar='RESERVA';
                  if (strstr($nomcobra,$abuscar)){
                 $retorno=$retorno+$b['valorcuota'];
             }
              $abuscar='CUOTA INICIAL';
             if (strstr($nomcobra,$abuscar)){
                 $retorno=$retorno+$b['valorcuota'];
             }
        }
        return $retorno;
    }
//    function pagado_reservamascuotas($oportunidad="")
//    {
//         $totaldias=0;
//        $retorno=0;
//        $pagocuotainicial=0;
//        $pagoreserva=0;
//        $pagocuota=0;
//        $pagohipoteca=0;
//        $vencido30=0;
//        $vencido60=0;
//        $vencido90=0;
//        $vencido91=0;
//        $sumadias=0;
//        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
//        c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
//        date(now()) as hoydia,c.valormora as valormora
//        FROM opportunities a
//        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
//        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
//        where a.deleted=0 and a.id='".$oportunidad. "' order by codopor";
//        $oportunidadcobra=array();
//         $this->sql=$sqlcon;
//         $resultadoSql = $this->excecutequery();
//         while($b = $this->db->fetchByAssoc($resultadoSql))
//        {
//             $nomcobra=strtoupper($b['cobranza']);
//             $abuscar='RESERVA';
//             if (strstr($nomcobra,$abuscar)){
//                 $pagoreserva=$pagoreserva+$b['valorcuota'];
//             }
//             else{
//                 $abuscar='CUOTA INICIAL';
//                 if (strstr($nomcobra,$abuscar)){
//                     $pagocuotainicial=$pagocuotainicial+$b['valorcuota'];
//                 }
//                 else{
//                     $abuscar='CUOTA';
//                     if (strstr($nomcobra,$abuscar)){
//                         $pagocuota=$pagocuota+$b['valorcuota'];
//                     }
//                     else {
//                        $abuscar='HIPOTECA';
//                     if (strstr($nomcobra,$abuscar)){
//                         $pagohipoteca=$pagohipoteca+$b['valorcuota'];
//                     }
//                     }
//                 }
//                 }
//                 if (is_null($b['fechareal'])){
//                            $fechacompara=  $b['hoydia'];
//                         }
//                 else{
//                     $fechacompara=$b['fechareal'];
//                 }
//                  $calfechadias= $this->obtiene_dias($b['fechapagar'],$fechacompara);
//                       $totaldias=($calfechadias['canio']*360)+($calfechadias['cmes']*30)+$calfechadias['cdias'];
//                           $sumadias=$sumadias+$totaldias;
//                 if ($totaldias>0 and $totaldias<=30){
//                                  $vencido30=$venciddo30+$b['valorcuota']+$b['valormora'] ;
//                 }
//                 else{
//                     if ($totaldias>30 and $totaldias<=60){
//
//                          $vencido60=$vencido60+$b['valorcuota']+$b['valormora'];
//                     }
//                     else{
//                         if ($totaldias>60 and $totaldias<=90){
//
//                         $vencido90=$vencido90+$b['valorcuota']+$b['valormora'];
//                         }
//                         else{if ($totaldias>90){
//
//                          $vencido91=$vencido91+$b['valorcuota']+$b['valormora'];
//                         }
//                         }
//                     }
//                 }
//
//               }
//
//        $retornopagos=array(pcuotainicial=>$pagocuotainicial,preserva=>$pagoreserva,pcuota=>$pagocuota,phipoteca=>$pagohipoteca,pag30=>$vencido30,pag60=>$vencido60,pag90=>$vencido90,pag91=>$vencido91,totadias=>$sumadias);
//        return $retornopagos;
//    }

    function pagado_reservamascuotas_proyecto($filtromes="",$proyecto="",$anio="")
    {

        $mesfiltro=$filtromes;
        $filtroProyecto=$proyecto;
        $totaldias=0;
        $retorno=0;
        $pagocuotainicial=0;
        $pagoreserva=0;
        $pagocuota=0;
        $pagohipoteca=0;
        $vencido30=0;
        $vencido60=0;
        $vencido90=0;
        $vencido91=0;
        $sumadias=0;
        
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
        date(now()) as hoydia,c.valormora as valormora
        FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and month(c.fechapago) = " . $mesfiltro . " and year(c.fechapago) = " . $anio . " and  a.name LIKE '" . $filtroProyecto . "%'";
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 $pagoreserva=$pagoreserva+$b['valorcuota'];
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     $pagocuotainicial=$pagocuotainicial+$b['valorcuota'];
                 }
                 else{
                     $abuscar='CUOTA';
                     $abuscar1='PAGO';
                     if ((strstr($nomcobra,$abuscar)) || (strstr($nomcobra,$abuscar1))){
                         $pagocuota=$pagocuota+$b['valorcuota'];
                     }
                     else {
                        $abuscar='HIPOTECA';
                     if (strstr($nomcobra,$abuscar)){
                         $pagohipoteca=$pagohipoteca+$b['valorcuota'];
                     }
                     }
                 }
                 }
                 if (is_null($b['fechareal'])){
                            $fechacompara=  $b['hoydia'];
                         }
                 else{
                     $fechacompara=$b['fechareal'];
                 }
                  $calfechadias= $this->obtiene_dias($b['fechapagar'],$fechacompara);
                       $totaldias=($calfechadias['canio']*360)+($calfechadias['cmes']*30)+$calfechadias['cdias'];
                           $sumadias=$sumadias+$totaldias;
                 if ($totaldias>0 and $totaldias<=30){
                                  $vencido30=$venciddo30+$b['valorcuota']+$b['valormora'] ;
                 }
                 else{
                     if ($totaldias>30 and $totaldias<=60){

                          $vencido60=$vencido60+$b['valorcuota']+$b['valormora'];
                     }
                     else{
                         if ($totaldias>60 and $totaldias<=90){

                         $vencido90=$vencido90+$b['valorcuota']+$b['valormora'];
                         }
                         else{if ($totaldias>90){

                          $vencido91=$vencido91+$b['valorcuota']+$b['valormora'];
                         }
                         }
                     }
                 }

               }
        $ingresosPago=$pagocuotainicial+$pagoreserva+$pagocuota;
        $valorMora=$vencido30+$vencido60+$vencido90+$vencido91;
        $retornopagos=array('ingresoVenta'=>$ingresosPago, 'moraPorMes'=>$valorMora);
        return $retornopagos;
    }
    
    function pagado_reservamascuotas_proyecto_final($filtromes="",$proyecto="",$anio=""){
        $pagomescuotainicial=0;
        $pagomesreserva=0;
        $pagomescuota=0;
        $pagomeshipoteca=0;
        
        $deudacuotainicial=0;
        $deudareserva=0;
        $deudacuota=0;
        $deudahipoteca=0;
        
        $pagocuotainicial=0;
        $pagoreserva=0;
        $pagocuota=0;
        $pagohipoteca=0;
        
        $porcobrarcuotainicial=0;
        $porcobrarreserva=0;
        $porcobrarcuota=0;
        $porcobrarhipoteca=0;
        
        /*-----------------------SUMA DE LOS INGRESOS DEL MES----------------------------------------------------------------------------
         * TODO LO Q SE COBRO EN EL MES
         */
        $sqlcon="
            SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
                    c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
                    date(now()) as hoydia,c.valormora as valormora
            FROM opportunities a
                inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
                inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
            WHERE a.deleted=0 and month(c.fecharealpago) = " . $filtromes . " and year(c.fecharealpago) = " . $anio . " 
                  and  a.name LIKE '" . $proyecto . "%' AND upper(c.pago)='SI' ";
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql)){
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 $pagomesreserva=$pagomesreserva+$b['valorcuota'];
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     $pagomescuotainicial=$pagomescuotainicial+$b['valorcuota'];
                 }
                 else{
                     $abuscar='CUOTA';
                     $abuscar1='PAGO';
                     if ((strstr($nomcobra,$abuscar)) || (strstr($nomcobra,$abuscar1))){
                         $pagomescuota=$pagomescuota+$b['valorcuota'];
                     }else {
                        $abuscar='HIPOTECA';
                        if (strstr($nomcobra,$abuscar)){
                            $pagomeshipoteca=$pagomeshipoteca+$b['valorcuota'];
                        }
                     }
                 }
             }
         }
         /*-----------------------SUMA DE LA MORA----------------------------------------------------------------------------
          * SUMA TOTAL DE LOS PAGOS NO REALIZADOS Y VENCIDOS SIN INCLUIR EL VALOR DE LA HIPOTECA
          */
         $fechaInicio = '1960-01-01';
         $sqlFechaInicio = "SELECT MIN(c.fechapago) minimo
                            FROM opportunities a
                                inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
                                inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
                            WHERE a.deleted=0 AND c.fechapago<>'0000-00-00' AND a.name LIKE '" . $proyecto . "%' ";
         $this->sql=$sqlFechaInicio;
         $resultadoSql1 = $this->excecutequery();
         while($c = $this->db->fetchByAssoc($resultadoSql1)){
             $fechaInicio = $c['minimo'];
         }
         
         $sqlFechaFin = "SELECT LAST_DAY('".$anio."-".$filtromes."-01') AS fin";
         $this->sql=$sqlFechaFin;
         $resultadoSql2 = $this->excecutequery();
         while($d = $this->db->fetchByAssoc($resultadoSql2)){
             $fechaFin = $d['fin'];
         }
         
         
         $sqlcon="
            SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
                    c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
                    date(now()) as hoydia,c.valormora as valormora
            FROM opportunities a
                inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
                inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
            WHERE a.deleted=0 and month(c.fechapago) = " . $filtromes . " and year(c.fechapago) = " . $anio . " 
                  AND (c.fechapago BETWEEN '".$fechaInicio."' AND '".$fechaFin."')
                  and  a.name LIKE '" . $proyecto . "%' AND upper(c.pago)='NO' AND fechapago < DATE(now()) ";
         $this->sql=$sqlcon;
         $resultadoSql3 = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql3)){
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 $deudareserva=$deudareserva+$b['valorcuota'];
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     $deudacuotainicial=$deudacuotainicial+$b['valorcuota'];
                 }
                 else{
                     $abuscar='CUOTA';
                     $abuscar1='PAGO';
                     if ((strstr($nomcobra,$abuscar)) || (strstr($nomcobra,$abuscar1))){
                         $deudacuota=$deudacuota+$b['valorcuota'];
                     }else {
                        $abuscar='HIPOTECA';
                        if (strstr($nomcobra,$abuscar)){
                            $deudahipoteca=$deudahipoteca+$b['valorcuota'];
                        }
                     }
                 }
             }
         }
         
        /*---------------------------------------------SUMA DE LO ABONADO HASTA EL MES--------------------------------*/

         $sqlcon="
            SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
                    c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
                    date(now()) as hoydia,c.valormora as valormora
            FROM opportunities a
                inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
                inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
            WHERE a.deleted=0 AND (c.fechapago BETWEEN '".$fechaInicio."' AND '".$fechaFin."')
                  and  a.name LIKE '" . $proyecto . "%' AND upper(c.pago)='SI' ";
         $this->sql=$sqlcon;
         $resultadoSql4 = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql4)){
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 $pagoreserva=$pagoreserva+$b['valorcuota'];
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     $pagocuotainicial=$pagocuotainicial+$b['valorcuota'];
                 }
                 else{
                     $abuscar='CUOTA';
                     $abuscar1='PAGO';
                     if ((strstr($nomcobra,$abuscar)) || (strstr($nomcobra,$abuscar1))){
                         $pagocuota=$pagocuota+$b['valorcuota'];
                     }else {
                        $abuscar='HIPOTECA';
                        if (strstr($nomcobra,$abuscar)){
                            $pagohipoteca=$pagohipoteca+$b['valorcuota'];
                        }
                     }
                 }
             }
         }
         
         /*---------------------------------------------SUMA DE QUE TIENE POR COBRAR--------------------------------
          * RESERVA + CUOTA INICIAL + FINANCIAMIENTO DIRECTO
          */

         $sqlcon="
            SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
                    c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
                    date(now()) as hoydia,c.valormora as valormora
            FROM opportunities a
                inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
                inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
            WHERE a.deleted=0 and  a.name LIKE '" . $proyecto . "%' AND upper(c.pago)='NO' ";
         $this->sql=$sqlcon;
         $resultadoSql4 = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql4)){
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 $porcobrarreserva=$porcobrarreserva+$b['valorcuota'];
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     $porcobrarcuotainicial=$porcobrarcuotainicial+$b['valorcuota'];
                 }
                 else{
                     $abuscar='CUOTA';
                     $abuscar1='PAGO';
                     if ((strstr($nomcobra,$abuscar)) || (strstr($nomcobra,$abuscar1))){
                         $porcobrarcuota=$porcobrarcuota+$b['valorcuota'];
                     }else {
                        $abuscar='HIPOTECA';
                        if (strstr($nomcobra,$abuscar)){
                            $porcobrarhipoteca=$porcobrarhipoteca+$b['valorcuota'];
                        }
                     }
                 }
             }
         }
         
         
         
        $ingresosPagoMes=$pagomescuotainicial+$pagomesreserva+$pagomescuota;
        $valorMora=$deudacuotainicial+$deudareserva+$deudacuota;
        $abonadoHastaMes=$pagocuotainicial+$pagoreserva+$pagocuota;
        $porCobrar=$porcobrarcuotainicial+$porcobrarreserva+$porcobrarcuota;
        
        $retornopagos=array('ingresoVentaMes'=>$ingresosPagoMes, 'moraPorMes'=>$valorMora,'abonadoHastaMes'=>$abonadoHastaMes,'porCobrar'=>$porCobrar);
        
        return $retornopagos;
    }





    function agrupar_ventas_proyecto()
    {
        $filtros="";
        $filtros1="";
         $sqlcon=$query = "select h.name as proyecto,c.disponibilidad_c as disponible, count(*) as cuenta,
 'CASA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy   from pro_inmuebles_casa_casa_c a inner join
                        casa_casa b on a.pro_inmuebc309sa_casa_idb=b.id and b.deleted=0
                        inner join  casa_casa_cstm c on b.id=c.id_c
                        inner join pro_inmuebles g ON a.pro_inmuebe8ddmuebles_ida=g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
                       where a.deleted=0 " . $filtros . "
                       group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'LOCALCOMERCIAL' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio, h.id as codproy
                       from pro_inmueblcalcomercial_c a inner join
                       local_localcomercial b on a.pro_inmueb8f9bmercial_idb=b.id and b.deleted=0
                        inner join local_localcomercial_cstm c on b.id=c.id_c
                        inner join pro_inmuebles g ON a.pro_inmueb041cmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                       where  a.deleted=0 " . $filtros . "
                       group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'DEPARTAMENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio, h.id as codproy
                       from pro_inmueblepartamentos_c a inner join
                       depar_departamentos b on a.pro_inmueb73e2amentos_idb=b.id and b.deleted=0
                       INNER JOIN depar_departamentos_cstm c ON b.id=c.id_c
                        inner join pro_inmuebles g ON a.pro_inmuebc58amuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                        where a.deleted=0 " . $filtros . " group by h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'OFICINA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy    from pro_inmueblfici_oficina_c a inner join
                       ofici_oficina b on a.pro_inmuebb178oficina_idb=b.id and b.deleted=0
                       INNER JOIN ofici_oficina_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb5519muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'GALPON' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciogalpon as precio,
 h.id as codproy  from pro_inmueblgalpo_galpon_c a
 inner join  galpo_galpon b on a.pro_inmuebdcbc_galpon_idb=b.id and b.deleted=0
INNER JOIN galpo_galpon_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb1a3emuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

WHERE a.deleted=0 " . $filtros . "    group by  h.name, tipoin,c.disponibilidad_c
UNION
 select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
 'CONSULTORIO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
 b.preciooferta as precio, h.id as codproy
                        from pro_inmuebl_consultorio_c a inner join
                        consu_consultorio b on a.pro_inmueba046ultorio_idb=b.id and b.deleted=0
INNER JOIN consu_consultorio_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb7282muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where  a.deleted=0 " . $filtros . "  group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'TERRENO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy from pro_inmueblerre_terreno_c a inner join
                       terre_terreno b on a.pro_inmuebd0a3terreno_idb=b.id and b.deleted=0
INNER JOIN  terre_terreno_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebbff4muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                        where  a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'ESTACIONAMIENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio, h.id as codproy
from pro_inmueblcionamientos_c a
inner join  pro_estacionamientos b on a.pro_inmuebab2emientos_idb=b.id and b.deleted=0
INNER JOIN  pro_estacionamientos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb86c6muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'BODEGA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy from pro_inmuebl_pro_bodegas_c a
inner join  pro_bodegas b on a.pro_inmueb30bebodegas_idb=b.id and b.deleted=0
INNER JOIN pro_bodegas_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb50bbmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where  a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'TITULO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy from pro_inmuebls_js_titulos_c a
inner join js_titulos b on a.pro_inmuebfc95titulos_idb=b.id and b.deleted=0
INNER JOIN js_titulos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb3962muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'ACCION' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio,
 h.id as codproy from pro_inmuebl_js_acciones_c a
                        inner join   js_acciones b on a.pro_inmueb5856cciones_idb=b.id and b.deleted=0
                        inner join js_acciones_cstm c on b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebe762muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0

                         where a.deleted=0 " . $filtros . " group by  h.name, tipoin,c.disponibilidad_c
UNION
select 'MANDATO' as proyecto, c.disponibilidad_c as disponible, count(*) as cuenta,
'MANDATO' as tipoin, 'MANDATO' AS proma, 'MANDATO' as etapa, 'MANDATO' as inmueble,
a.preciomaximo as precio, '11111111' as codproy
    from pro_consignacionmandato a
   INNER JOIN  pro_consignacionmandato_cstm c ON a.id=c.id_c
   where  a.deleted=0  " . $filtros1 . " group by  proyecto, tipoin,c.disponibilidad_c
ORDER BY proyecto  ";

         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
        return $resultadoSql;
    }

    function sinagrupar_ventas_proyecto()
    {
        $filtros="";
        $filtros1="";
         $sqlcon=$query = "select h.name as proyecto,c.disponibilidad_c as disponible, 1 as cuenta,
 'CASA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio, b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmuebles_casa_casa_c a inner join
                        casa_casa b on a.pro_inmuebc309sa_casa_idb=b.id and b.deleted=0
                        inner join  casa_casa_cstm c on b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebe8ddmuebles_ida=g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c

                       where a.deleted=0 AND i.sales_stage='Closed Won'  " . $filtros . "

UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'LOCALCOMERCIAL' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores
                       from pro_inmueblcalcomercial_c a inner join
                       local_localcomercial b on a.pro_inmueb8f9bmercial_idb=b.id and b.deleted=0
                        inner join local_localcomercial_cstm c on b.id=c.id_c
                        inner join pro_inmuebles g ON a.pro_inmueb041cmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                       where  a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "

UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'DEPARTAMENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores
                       from pro_inmueblepartamentos_c a inner join
                       depar_departamentos b on a.pro_inmueb73e2amentos_idb=b.id and b.deleted=0
                       INNER JOIN depar_departamentos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebc58amuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                        where a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'OFICINA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmueblfici_oficina_c a inner join
                       ofici_oficina b on a.pro_inmuebb178oficina_idb=b.id and b.deleted=0
                       INNER JOIN ofici_oficina_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb5519muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'GALPON' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciogalpon as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores  from pro_inmueblgalpo_galpon_c a
 inner join  galpo_galpon b on a.pro_inmuebdcbc_galpon_idb=b.id and b.deleted=0
INNER JOIN galpo_galpon_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb1a3emuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
WHERE a.deleted=0 AND i.sales_stage='Closed Won'
UNION
 select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
 'CONSULTORIO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
 b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores
                        from pro_inmuebl_consultorio_c a inner join
                        consu_consultorio b on a.pro_inmueba046ultorio_idb=b.id and b.deleted=0
INNER JOIN consu_consultorio_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb7282muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where  a.deleted=0  AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'TERRENO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmueblerre_terreno_c a inner join
                       terre_terreno b on a.pro_inmuebd0a3terreno_idb=b.id and b.deleted=0
INNER JOIN  terre_terreno_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebbff4muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                        where  a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'ESTACIONAMIENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores
from pro_inmueblcionamientos_c a
inner join  pro_estacionamientos b on a.pro_inmuebab2emientos_idb=b.id and b.deleted=0
INNER JOIN  pro_estacionamientos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb86c6muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'BODEGA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmuebl_pro_bodegas_c a
inner join  pro_bodegas b on a.pro_inmueb30bebodegas_idb=b.id and b.deleted=0
INNER JOIN pro_bodegas_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb50bbmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where  a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'TITULO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmuebls_js_titulos_c a
inner join js_titulos b on a.pro_inmuebfc95titulos_idb=b.id and b.deleted=0
INNER JOIN js_titulos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb3962muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'ACCION' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores from pro_inmuebl_js_acciones_c a
                        inner join   js_acciones b on a.pro_inmueb5856cciones_idb=b.id and b.deleted=0
                        inner join js_acciones_cstm c on b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebe762muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0 AND i.sales_stage='Closed Won' " . $filtros . "
UNION
select 'MANDATO' as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'MANDATO' as tipoin, 'MANDATO' AS proma, 'MANDATO' as etapa, 'MANDATO' as inmueble,
a.preciomaximo as precio, a.id as codigoinmueble,
'11111111' as codproy,  i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre, i.tablaamortizacion AS tablabusvalores
    from pro_consignacionmandato a
   INNER JOIN  pro_consignacionmandato_cstm c ON a.id=c.id_c
inner join opportunities i on a.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
   where  a.deleted=0  AND i.sales_stage='Closed Won' " . $filtros1 . "


ORDER BY proyecto
  ";

         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
        return $resultadoSql;
    }

    function ventas_proyecto_desistimiento($filtros)
    {
//        $filtros="";
        $filtros1="";
         $sqlcon=$query = "select i.id as idoportunidad, h.name as proyecto,c.disponibilidad_c as disponible, 1 as cuenta,
 'CASA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio, b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmuebles_casa_casa_c a inner join
                        casa_casa b on a.pro_inmuebc309sa_casa_idb=b.id and b.deleted=0
                        inner join  casa_casa_cstm c on b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebe8ddmuebles_ida=g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c

                       where a.deleted=0  " . $filtros . "

UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'LOCALCOMERCIAL' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre
                       from pro_inmueblcalcomercial_c a inner join
                       local_localcomercial b on a.pro_inmueb8f9bmercial_idb=b.id and b.deleted=0
                        inner join local_localcomercial_cstm c on b.id=c.id_c
                        inner join pro_inmuebles g ON a.pro_inmueb041cmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                       where  a.deleted=0 " . $filtros . "

UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'DEPARTAMENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre
                       from pro_inmueblepartamentos_c a inner join
                       depar_departamentos b on a.pro_inmueb73e2amentos_idb=b.id and b.deleted=0
                       INNER JOIN depar_departamentos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebc58amuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                        where a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'OFICINA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmueblfici_oficina_c a inner join
                       ofici_oficina b on a.pro_inmuebb178oficina_idb=b.id and b.deleted=0
                       INNER JOIN ofici_oficina_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb5519muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'GALPON' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciogalpon as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre  from pro_inmueblgalpo_galpon_c a
 inner join  galpo_galpon b on a.pro_inmuebdcbc_galpon_idb=b.id and b.deleted=0
INNER JOIN galpo_galpon_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb1a3emuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
WHERE a.deleted=0
UNION
 select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
 'CONSULTORIO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
 b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre
                        from pro_inmuebl_consultorio_c a inner join
                        consu_consultorio b on a.pro_inmueba046ultorio_idb=b.id and b.deleted=0
INNER JOIN consu_consultorio_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb7282muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where  a.deleted=0   " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'TERRENO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmueblerre_terreno_c a inner join
                       terre_terreno b on a.pro_inmuebd0a3terreno_idb=b.id and b.deleted=0
INNER JOIN  terre_terreno_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebbff4muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                        where  a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'ESTACIONAMIENTO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,
b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre
from pro_inmueblcionamientos_c a
inner join  pro_estacionamientos b on a.pro_inmuebab2emientos_idb=b.id and b.deleted=0
INNER JOIN  pro_estacionamientos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb86c6muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'BODEGA' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmuebl_pro_bodegas_c a
inner join  pro_bodegas b on a.pro_inmueb30bebodegas_idb=b.id and b.deleted=0
INNER JOIN pro_bodegas_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb50bbmuebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where  a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'TITULO' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmuebls_js_titulos_c a
inner join js_titulos b on a.pro_inmuebfc95titulos_idb=b.id and b.deleted=0
INNER JOIN js_titulos_cstm c ON b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmueb3962muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,h.name as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'ACCION' as tipoin, 'PROYECTO' AS proma,e.name as etapa, g.name as inmueble,b.preciooferta as precio , b.id as codigoinmueble,
 h.id as codproy, i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre from pro_inmuebl_js_acciones_c a
                        inner join   js_acciones b on a.pro_inmueb5856cciones_idb=b.id and b.deleted=0
                        inner join js_acciones_cstm c on b.id=c.id_c
inner join pro_inmuebles g ON a.pro_inmuebe762muebles_ida =g.id and g.deleted=0
                        inner join  pro_etapas_ro_inmuebles_c f on g.id=f.pro_etapasb2f9muebles_idb and f.deleted=0
                        inner join pro_etapas e on f.pro_etapase83b_etapas_ida=e.id and e.deleted=0
                        inner join pro_proyecta_pro_etapas_c d on e.id=d.pro_proyecdb3b_etapas_idb  and d.deleted=0
                        inner join pro_proyectosproinmobiliara h on d.pro_proyec2d2fbiliara_ida=h.id and h.deleted=0
inner join opportunities i on b.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
                         where a.deleted=0  " . $filtros . "
UNION
select i.id as idoportunidad,'MANDATO' as proyecto, c.disponibilidad_c as disponible, 1 as cuenta,
'MANDATO' as tipoin, 'MANDATO' AS proma, 'MANDATO' as etapa, 'MANDATO' as inmueble,
a.preciomaximo as precio, a.id as codigoinmueble,
'11111111' as codproy,  i.name as nominmueble,i.date_closed as fechacierre, j.mescierre_c as mescierre,
j.aniocierre_c as aniocierre
    from pro_consignacionmandato a
   INNER JOIN  pro_consignacionmandato_cstm c ON a.id=c.id_c
inner join opportunities i on a.id=i.parentid and i.deleted=0
inner join opportunities_cstm j on i.id=j.id_c
   where  a.deleted=0   " . $filtros . "
ORDER BY proyecto
  ";

         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
        return $resultadoSql;
    }
    function contar_por_proyecto($resultapro=array(),$proyectobus="")
 {

   $tvendidas=0;
   $treservadas=0;
   $tcanjes=0;
   $treservadapromotor=0;
   $tdisponible=0;
   $b=array();

        while($b = $this->db->fetchByAssoc($resultapro))
        {

            if ($b['proyecto']==$proyectobus){

              switch (strtoupper($b['disponible'])){
               case VENDIDA:
                    $tvendidas=$tvendidas + $b['cuenta'];
                    break;
               case RESERVADA:
                    $treservadas= $treservadas + $b['cuenta'];
                    break;
             case DISPONIBLE:
                    $tdisponible= $tdisponible + $b['cuenta'];
                    break;
             case RESERVAPROMO:
                    $treservadapromotor=$treservadapromotor + $b['cuenta'];
                    break;
             case CANJE:
                    $tcanjes=$tcanjes + $b['cuenta'];
                    break;
            }
            }
        }
         $resultadoContar=array(vendidas=>$tvendidas,reservas=>$treservadas,reservaspromotor=>$treservadapromotor,canje=>$tcanjes, porvender=>$tdisponible);
         return($resultadoContar);
         }

         protected function meses(){
        global $app_list_strings;
        if(is_array($app_list_strings['mescierre_list'])){
            foreach($app_list_strings['mescierre_list'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_meses($key).">".$status;
            }
        }
     return $cadena;
    }
    protected function selected_meses($estado){
    $retorno="";
        if(is_array($this->form['mes'])){
        foreach ($this->form['mes'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }


    	public static function dateDiff(DateTime $newest, DateTime $oldest) {
		$d1 = $newest->format('U');
		$d2 = $oldest->format('U');
		$diff_secs = abs($d1 - $d2);
		$base_year = min(date("Y", $d1), date("Y", $d2));

		$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);

		return array
			(
			"years" => abs(substr(date('Ymd', $d1) - date('Ymd', $d2), 0, -4)),
			"months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1,
			"months" => date("n", $diff) - 1,
			"days_total" => floor($diff_secs / (3600 * 24)),
			"days" => date("j", $diff) - 1,
			"hours_total" => floor($diff_secs / 3600),
			"hours" => date("G", $diff),
			"minutes_total" => floor($diff_secs / 60),
			"minutes" => (int) date("i", $diff),
			"seconds_total" => $diff_secs,
			"seconds" => (int) date("s", $diff)
		);
	}

function obtiene_dias1($fechaInicio,$fechaActual){
      $fecha_anterior=new DateTime($fechaInicio);
     $fecha_nueva=new DateTime($fechaActual);
      $val=$this->dateDiff($fecha_nueva, $fecha_anterior);

      $cantidadanios1=array('canio'=>$val['years'],'cmes'=>$val['months'],'cdias'=>$val['days'],'tdias'=>$val['days_total']);
      return $cantidadanios1;

}
    function obtiene_dias($fechaInicio,$fechaActual)
    {
  //   echo "fecha inicio" . $fechaInicio . "  fechafin " . $fechaActual;
        
      
      $diaActual = substr($fechaActual, 8, 2);
      $mesActual = substr($fechaActual, 5, 2);
      $anioActual = substr($fechaActual, 0, 4);
      $diaInicio = substr($fechaInicio, 8, 2);
      $mesInicio = substr($fechaInicio, 5, 2);
      $anioInicio = substr($fechaInicio, 0, 4);
     $b = 0;
    $mes = $mesInicio-1;
    if($mes==2){
    if(($anioActual%4==0 && $anioActual%100!=0) || $anioActual%400==0){
    $b = 29;
    }else{
    $b = 28;
    }
    }
    else if($mes<=7){
//      if($mes==0){
//        $b = 31;
//      }else if($mes%2==0){
//        $b = 30;
//      }else{
//        $b = 31;
//      }
        if(($mes==0)||($mes==2)|| ($mes==4) || ($mes==7)|| ($mes==6))
            $b=31;
        else
            $b=30;
        
   }else if($mes>7){
      if(($mes==9)||($mes==11))
            $b=31;
        else
            $b=30;
   }
       if(($anioInicio>$anioActual) || ($anioInicio==$anioActual && $mesInicio>$mesActual) ||
      ($anioInicio==$anioActual && $mesInicio == $mesActual && $diaInicio>$diaActual)){
     
           $cantidadanios=array(canio=>0,cmes=>0,cdias=>0);
      return $cantidadanios;
      }else{
      if($mesInicio <= $mesActual){
      $anios = $anioActual - $anioInicio;
      if($diaInicio <= $diaActual){
      $meses = $mesActual - $mesInicio;
      $dies = $diaActual - $diaInicio;
      }else{
      if($mesActual == $mesInicio){
      $anios = $anios - 1;
      }
      $meses = ($mesActual - $mesInicio - 1 + 12) % 12;
      $dies = $b-($diaInicio-$diaActual);
      }
      }else{
      $anios = $anioActual - $anioInicio - 1;
      if($diaInicio > $diaActual){
      $meses = $mesActual - $mesInicio -1 +12;
      $dies = $b - ($diaInicio-$diaActual);
      }else{
      $meses = $mesActual - $mesInicio + 12;
      $dies = $diaActual - $diaInicio;
      }
      }
      
      $totadias=$anios*360+$meses*30+$dies;
      $cantidadanios=array('canio'=>$anios,'cmes'=>$meses,'cdias'=>$dies,'tdias'=>$totadias);
      return $cantidadanios;
      }
    }
    function ubica_etapa($oportunidad=""){
        $retorno=0;
        $fecVisita="";
        $fecReserva="";
        $fecRecopilacion="";
        $fecCalificacion="";
        $fecGanado="";
        $fecPerdido="";
       $sqlcon="Select  upper(x.before_value_string)  as antes , x.parent_id as codigorel,
        upper(x.after_value_string) as despues ,date(x.date_created) as fecha
        from opportunities_audit x
        where x.field_name='sales_stage' and x.parent_id = '" . $oportunidad ."' order by x.date_created";
       //echo $sqlcon . "<br/>";
       $cosas=array();
       $this->sql="";
        $this->sql=$sqlcon;
          $resultadoSql = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql))
            {

            switch ($b['antes'])
            {
               case VISITA:
                 $fecVisita=$b['fecha'];
                 $proxentrega=$b['despues'];
                 $ultimaFecha=$b['fecha'];
                break;
               case RESERVA:
                  $fecReserva=$b['fecha'];
                  $proxentrega=$b['despues'];
                  $ultimaFecha=$b['fecha'];
                 break;
                case RECOPILACIONDOCUMENTOS:
                  $fecRecopilacion=$b['fecha'];
                      $proxentrega=$b['despues'];
                       $ultimaFecha=$b['fecha'];
                break;
               case CALIFICACION:
                    $fecCalificacion=$b['fecha'];
                     $proxentrega=$b['despues'];
                      $ultimaFecha=$b['fecha'];
                 break;
            }
        }
        if($proxentrega=='CLOSED LOST')
            {
            $fecPerdido=$ultimaFecha;
        }
         if($proxentrega=='CLOSED WON')
            {
            $fecGanado=$ultimaFecha;
        }
        $retoporetapa=array('fechaVisita'=>$fecVisita,"fechaReserva"=>$fecReserva,"fechaRecopilacion"=>$fecRecopilacion,"fechaCalificacion"=>$fecCalificacion,"fechaPerdido"=>$fecPerdido,"fechaGanado"=>$fecGanado);
        return $retoporetapa;
    }

function numeroMes($mes){
    $numero = '';
    if($mes=='Enero')
        $numero = '01';
    if($mes=='Febrero')
        $numero = '02';
    if($mes=='Marzo')
        $numero = '03';
    if($mes=='Abril')
        $numero = '04';
    if($mes=='Mayo')
        $numero = '05';
    if($mes=='Junio')
        $numero = '06';
    if($mes=='Julio')
        $numero = '07';
    if($mes=='Agosto')
        $numero = '08';
    if($mes=='Septiembre')
        $numero = '09';
    if($mes=='Octubre')
        $numero = '10';
    if($mes=='Noviembre')
        $numero = '11';
    if($mes=='Diciembre')
        $numero = '12';
    return $numero;
}
function vendidas_por_proyecto_mes($resultapro=array(),$proyectobus=""){
    $b=array();
    $c=array();


//    $sql11 = "SELECT o.name AS nombreVenta, aniocierre_c, mescierre_c, o.amount_usdollar AS precio
//                    FROM opportunities o, opportunities_cstm cstm
//                    WHERE o.deleted=0 AND o.description='VENTA ANTERIOR' AND o.id=cstm.id_c";
//    $this->sql="";
//        $this->sql=$sql11;
//          $resultapro1 = $this->excecutequery();
//    while($b = $this->db->fetchByAssoc($resultapro1)){
//        $nombreOportunidad = explode("/",$b['nombreVenta']);
//        $nombreProyecto = $nombreOportunidad[0];
//        if ($nombreProyecto==$proyectobus){
//            $resmes=$this->numeroMes($b['mescierre_c']);
//            $resAnio = (int)$b['aniocierre_c'];                
//
//            switch ($resmes){
//                case 01:
//                    $tenero[$resAnio]=$tenero[$resAnio]+1;
//                    $tpenero[$resAnio]=$tpenero[$resAnio]+$b['precio'];
//                    break;
//                case 02:
//                    $tfebrero[$resAnio]= $tfebrero[$resAnio] + 1;
//                    $tpfebrero[$resAnio]= $tpfebrero[$resAnio] + $b['precio'];
//                    break;
//                case 03:
//                    $tmarzo[$resAnio]= $tmarzo[$resAnio] + 1;
//                    $tpmarzo[$resAnio]= $tpmarzo[$resAnio] + $b['precio'];
//                    break;
//                case 04:
//                    $tabril[$resAnio]=$tabril[$resAnio] + 1;
//                    $tpabril[$resAnio]=$tpabril[$resAnio] + $b['precio'];
//                    break;
//                case 05:
//                    $tmayo[$resAnio]=$tmayo[$resAnio] + 1;
//                    $tpmayo[$resAnio]=$tpmayo[$resAnio] + $b['precio'];
//                    break;
//                case 06:
//                    $tjunio[$resAnio]=$tjunio[$resAnio] + 1;
//                    $tpjunio[$resAnio]=$tpjunio[$resAnio] + $b['precio'];
//                    break;
//                case 07:
//                    $tjulio[$resAnio] =$tjulio[$resAnio] + 1;
//                    $tpjulio[$resAnio] =$tpjulio[$resAnio] + $b['precio'];
//                    break;
//                case 08:
//                    $tagosto[$resAnio]=$tagosto[$resAnio] + 1;
//                    $tpagosto[$resAnio]=$tpagosto[$resAnio] + $b['precio'];
//                    break;
//                case 09:
//                    $tseptiembre[$resAnio]=$tseptiembre[$resAnio] + 1;
//                    $tpseptiembre[$resAnio]=$tpseptiembre[$resAnio] + $b['precio'];
//                    break;
//                case 10:
//                    $toctubre[$resAnio]=$toctubre[$resAnio] + 1;
//                    $tpoctubre[$resAnio]=$tpoctubre[$resAnio] + $b['precio'];
//                    break;
//                case 11:
//                    $tnoviembre[$resAnio]=$tnoviembre[$resAnio] + 1;
//                    $tpnoviembre[$resAnio]=$tpnoviembre[$resAnio] + $b['precio'];
//                    break;
//                case 12:
//                    $tdiciembre[$resAnio]=$tdiciembre[$resAnio] + 1;
//                    $tpdiciembre[$resAnio]=$tpdiciembre[$resAnio] + $b['precio'];
//                    break;
//            }
//        }
//    }
//    $resultadoContarMigrado=array('tvenero'=>$tenero,'tvfebrero'=>$tfebrero,'tvmarzo'=>$tmarzo,
//                            'tvabril'=>$tabril, 'tvmayo'=>$tmayo,'tvjunio'=>$tjunio,'tvjulio'=>$tjulio,
//                            'tvagosto'=>$tagosto,'tvseptiembre'=>$tseptiembre,'tvoctubre'=>$toctubre,
//                            'tvnoviembre'=>$tnoviembre,'tvdiciembre'=>$tdiciembre,
//                            'tpenero'=>$tpenero,'tpfebrero'=>$tpfebrero,'tpmarzo'=>$tpmarzo,
//                            'tpabril'=>$tpabril, 'tpmayo'=>$tpmayo,'tpjunio'=>$tpjunio,'tpjulio'=>$tpjulio,
//                            'tpagosto'=>$tpagosto,'tpseptiembre'=>$tpseptiembre,'tpoctubre'=>$tpoctubre,
//                            'tpnoviembre'=>$tpnoviembre,'tpdiciembre'=>$tpdiciembre );
    while($b = $this->db->fetchByAssoc($resultapro)){
        if ($b['proyecto']==$proyectobus){
            if  (strtoupper($b['disponible'])=='VENDIDA'){
//                $resmes=$this->numeroMes($b['mescierre']);
                $resmes=$b['mescierre'];
                $resAnio = (int)$b['aniocierre'];
                
                switch ($resmes){
                    case 'Enero':
                        $tenero[$resAnio]=$tenero[$resAnio]+1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpenero[$resAnio]=$tpenero[$resAnio]+$valorInmueble;
                        break;
                    case 'Febrero':
                        $tfebrero[$resAnio]= $tfebrero[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpfebrero[$resAnio]= $tpfebrero[$resAnio] + $valorInmueble;
                        break;
                    case 'Marzo':
                        $tmarzo[$resAnio]= $tmarzo[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpmarzo[$resAnio]= $tpmarzo[$resAnio] + $valorInmueble;
                        break;
                    case 'Abril':
                        $tabril[$resAnio]=$tabril[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpabril[$resAnio]=$tpabril[$resAnio] + $valorInmueble;
                        break;
                    case 'Mayo':
                        $tmayo[$resAnio]=$tmayo[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpmayo[$resAnio]=$tpmayo[$resAnio] + $valorInmueble;
                        break;
                    case 'Junio':
                        $tjunio[$resAnio]=$tjunio[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpjunio[$resAnio]=$tpjunio[$resAnio] + $valorInmueble;
                        break;
                    case 'Julio':
                        $tjulio[$resAnio] =$tjulio[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpjulio[$resAnio] =$tpjulio[$resAnio] + $valorInmueble;
                        break;
                    case 'Agosto':
                        $tagosto[$resAnio]=$tagosto[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpagosto[$resAnio]=$tpagosto[$resAnio] + $valorInmueble;
                        break;
                    case 'Septiembre':
                        $tseptiembre[$resAnio]=$tseptiembre[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpseptiembre[$resAnio]=$tpseptiembre[$resAnio] + $valorInmueble;
                        break;
                    case 'Octubre':
                        $toctubre[$resAnio]=$toctubre[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpoctubre[$resAnio]=$tpoctubre[$resAnio] + $valorInmueble;
                        break;
                    case 'Noviembre':
                        $tnoviembre[$resAnio]=$tnoviembre[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpnoviembre[$resAnio]=$tpnoviembre[$resAnio] + $valorInmueble;
                        break;
                    case 'Diciembre':
                        $tdiciembre[$resAnio]=$tdiciembre[$resAnio] + 1;
                        $valorInmueble=$this->deserializar($b['tablabusvalores'],"tab_valorinmueble");
                        $tpdiciembre[$resAnio]=$tpdiciembre[$resAnio] + $valorInmueble;
                        break;
                }
            }
        }
    }
    $resultadoContar=array('tvenero'=>$tenero,
                           'tvfebrero'=>$tfebrero,
                           'tvmarzo'=>$tmarzo,
                           'tvabril'=>$tabril, 
                           'tvmayo'=>$tmayo,
                           'tvjunio'=>$tjunio,
                           'tvjulio'=>$tjulio,
                           'tvagosto'=>$tagosto,
                           'tvseptiembre'=>$tseptiembre,
                           'tvoctubre'=>$toctubre,
                           'tvnoviembre'=>$tnoviembre,
                           'tvdiciembre'=>$tdiciembre,
                           'tpenero'=>$tpenero,
                           'tpfebrero'=>$tpfebrero,
                           'tpmarzo'=>$tpmarzo,
                           'tpabril'=>$tpabril, 
                           'tpmayo'=>$tpmayo,
                           'tpjunio'=>$tpjunio,
                           'tpjulio'=>$tpjulio,
                           'tpagosto'=>$tpagosto,
                           'tpseptiembre'=>$tpseptiembre,
                           'tpoctubre'=>$tpoctubre,
                           'tpnoviembre'=>$tpnoviembre,
                           'tpdiciembre'=>$tpdiciembre 
                        );
    return($resultadoContar);
}





    function contar_para_encabezado($filtroFecha="")
    {
        $filtro=$filtroFecha;
        $sqlcon="Select  substring(a.name,1, INSTR(a.name, '-')-1) as proyecto ,c.name as nombre,c.motivos as motivo,count(*) as cuenta,sum(a.amount) total 
            from opportunities a inner join opportunitiesistemiento_c b on a.id=b.opportunit0f5funities_ida  and b.deleted=0
        inner join pro_resciliaciondesistemiento c on b.opportunit32f8emiento_idb=c.id and c.deleted=0
        inner join pro_motivosdesistimiento d on c.motivos=d.name and d.deleted=0
        where a.deleted=0 " . $filtro . " group by c.motivos order by c.motivos ";
         $cosas=array();
         $this->sql="";
         $this->sql=$sqlcon;
          $resultadoSql = $this->excecutequery();
          return $resultadoSql;
    }

     function contar_para_proyecto_desiste($proyecto="",$filtroFecha="")
    {
        $filtro=$filtroFecha;


        $sqlcon="Select  substring(a.name,1, INSTR(a.name, '-')-1) as proyecto ,
                 c.name as nombre,c.motivos as motivo,count(*) as cuenta,
                 sum(a.amount) as monto
                from opportunities a
                     inner join opportunitiesistemiento_c b on a.id=b.opportunit0f5funities_ida  and b.deleted=0
                    inner join pro_resciliaciondesistemiento c on b.opportunit32f8emiento_idb=c.id and c.deleted=0
        inner join pro_motivosdesistimiento d on c.motivos=d.name and d.deleted=0
        where a.deleted=0 " . $filtro . " group by proyecto, motivo having proyecto='" . $proyecto . "' order by c.motivos ";
         $cosas=array();
         $this->sql="";
         $this->sql=$sqlcon;
          $resultadoSql = $this->excecutequery();
          return $resultadoSql;
    }





            /**Andres*/

             /*-----------------------------------------------------*/
    function tipoProyectoMandato(){
       $cadena="<OPTION VALUE='0'>Seleccione tipo";
       $cadena.="<OPTION VALUE='proyecto'>Proyecto";
       $cadena.="<OPTION VALUE='mandato'>Mandato";

        return $cadena;
    }

    function selected_tipoProyectoMandato($id=""){
        $retorno="";
        if(is_array($this->form['tipo'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['tipo'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }






    function contarcuota_oportunidad($oportunidad="")
    {


        $retorno=0;
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        upper(c.name) as cobranza, c.valorcuota as valorcuota, upper(pago) as pago FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and a.id='".$oportunidad. "' order by codopor";
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $contador=0;
         $totalCredito=0;
         $totalPagado=0;
         $resultadoSql = $this->excecutequery();

         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
             $pagadoHipoteca1 = '';
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='CUOTA';
             
             
             if (strstr($nomcobra,$abuscar)){
                 if(strstr($nomcobra,'CUOTA INICIAL'))
                   $contador=$contador+0;
                 else {
                    $contador=$contador+1;
                    $totalCredito=$totalCredito+$b['valorcuota'];
                    if ($b['pago']=='SI'){
                      $totalPagado=$totalPagado+$b['valorcuota'];
                    }
                 }
              }
              
              if (strstr($nomcobra,'PAGO')){
                 if(strstr($nomcobra,'CUOTA INICIAL'))
                   $contador=$contador+0;
                 else {
                    $contador=$contador+1;
                    $totalCredito=$totalCredito+$b['valorcuota'];
                    if ($b['pago']=='SI'){
                      $totalPagado=$totalPagado+$b['valorcuota'];
                    }
                 }
              }
              
              $pagadoHipoteca1 .= strstr($b['cobranza'],'HIPOTECA');
              if($pagadoHipoteca1!='')
                  if ($b['pago']=='SI')
                    $pagadoHipoteca = $b['valorcuota'];
                  else
                      $pagadoHipoteca=0;
              
        }
         $retornocuotacredito=array('totalCuotas'=>$contador,'totalCredito'=>$totalCredito,'totalPagado'=>$totalPagado,'pagadocreditohipotecario'=>$pagadoHipoteca);
        return $retornocuotacredito;
    }








    function pagado_reservamascuotas($oportunidad="")
    {
         $totaldias=0;
        $retorno=0;
        $pagocuotainicial=0;
        $pagoreserva=0;
        $pagocuota=0;
        $pagohipoteca='';
        $vencido30=0;
        $vencido60=0;
        $vencido90=0;
        $vencido91=0;
        $sumadias=0;
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
        date(now()) as hoydia,c.valormora as valormora, c.pago as pago
        FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and a.id='".$oportunidad. "' 
        AND c.name not like '%BONO%'  and c.fechapago< date(now()) order by codopor";
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
             $pagadoHipoteca1 = '';
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 if (strtoupper($b['pago'])=='SI'){
                 $pagoreserva=$pagoreserva+$b['valorcuota'];}
             }
//             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     if (strtoupper($b['pago'])=='SI'){
                     $pagocuotainicial=(float)$pagocuotainicial+(float)$b['valorcuota'];}
                 }
//                 else{
                     $abuscar='CUOTA';
                     if (strstr($nomcobra,$abuscar)){
                         if(strstr($nomcobra,'CUOTA INICIAL')){                             
                         }else {
                            if (strtoupper($b['pago'])=='SI'){
                                $pagocuota=$pagocuota+$b['valorcuota'];}
                        }
                     }
//                     else {
                        $abuscar='PAGO';
                        if (strstr($nomcobra,$abuscar)){
                            if (strtoupper($b['pago'])=='SI'){
                            $pagocuota=$pagocuota+$b['valorcuota'];}
                        }
//                        else{
                            $pagadoHipoteca1 .= strstr($nomcobra,'HIPOTECA');
                            if($pagadoHipoteca1!='')
                                if (strtoupper($b['pago'])=='SI')
                                  $pagohipoteca.=$b['valorcuota'];
                                
//                            $abuscar='HIPOTECA';
//                            if (strstr($nomcobra,$abuscar)){
//                                if (strtoupper($b['pago'])=='SI'){
//                                   $pagohipoteca=$pagohipoteca+$b['valorcuota'];
//                                }
//                            }
//                        }
//                     }
//                 }
//                 }
                 if (is_null($b['fechareal'])){
                            $fechacompara=  $b['hoydia'];
                 }else{
                     $fechacompara=$b['fechareal'];
                 }
                  $calfechadias= $this->obtiene_dias($b['fechapagar'],$fechacompara);
                  $totaldias=($calfechadias['canio']*360)+($calfechadias['cmes']*30)+$calfechadias['cdias'];
                  $sumadias=$sumadias+$totaldias;
                 if ($totaldias>0 and $totaldias<=30){
                                  if($this->verificarCobranza($nomcobra))
                                    $vencido30=$venciddo30+$b['valorcuota']+$b['valormora'] ;
                 }
                 else{
                     if ($totaldias>30 and $totaldias<=60){
                          if($this->verificarCobranza($nomcobra))
                            $vencido60=$vencido60+$b['valorcuota']+$b['valormora'];
                     }else{
                         if ($totaldias>60 and $totaldias<=90){
                            if($this->verificarCobranza($nomcobra))
                                $vencido90=$vencido90+$b['valorcuota']+$b['valormora'];
                         }
                         else{
                             if ($totaldias>90){
                                 if($this->verificarCobranza($nomcobra))
                                    $vencido91=$vencido91+$b['valorcuota']+$b['valormora'];
                              }
                       }
                     }
                 }

         }

        $retornopagos=array('pcuotainicial'=>$pagocuotainicial,'preserva'=>$pagoreserva,'pcuota'=>$pagocuota,'phipoteca'=>$pagohipoteca,'pag30'=>$vencido30,'pag60'=>$vencido60,'pag90'=>$vencido90,'pag91'=>$vencido91,'totadias'=>$sumadias);
        return $retornopagos;
    }



      function vencido_real($oportunidad="")
    {
         $totaldias=0;
        $retorno=0;
        $pagocuotainicial=0;
        $pagoreserva=0;
        $pagocuota=0;
        $pagohipoteca=0;
        $vencido30=0;
        $vencido60=0;
        $vencido90=0;
        $vencido91=0;
        $sumadias=0;
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
        date(now()  - INTERVAL 1 DAY ) as hoydia,c.valormora as valormora, c.pago as pago
        FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and a.id='".$oportunidad. "' and c.pago='No' and  c.name not like '%HIPOTECA%' and  c.name not like '%Liquidacion%' 
        AND c.name not like '%BONO%' and c.fechapago<=date(now() - INTERVAL 1 DAY)  order by codopor";
       // echo $sqlcon;
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         $totaldiasanterior=0;
         while($b = $this->db->fetchByAssoc($resultadoSql))
        {
             $nomcobra=strtoupper($b['cobranza']);
//             $abuscar='RESERVA';
//             if (strstr($nomcobra,$abuscar)){
//                 if (strtoupper($b['pago'])=='SI'){
//                 $pagoreserva=$pagoreserva+$b['valorcuota'];}
//             }
//             else{
//                 $abuscar='CUOTA INICIAL';
//                 if (strstr($nomcobra,$abuscar)){
//                     if (strtoupper($b['pago'])=='SI'){
//                     $pagocuotainicial=(float)$pagocuotainicial+(float)$b['valorcuota'];}
//                 }
//                 else{
//                     $abuscar='CUOTA';
//                     if (strstr($nomcobra,$abuscar)){
//                         if (strtoupper($b['pago'])=='SI'){
//                         $pagocuota=$pagocuota+$b['valorcuota'];}
//                     }
//                     else {
//                        $abuscar='HIPOTECA';
//                     if (strstr($nomcobra,$abuscar)){
//                         if (strtoupper($b['pago'])=='SI'){
//                         $pagohipoteca=$pagohipoteca+$b['valorcuota'];
//                         // Ajuste pedido por Nancy Bermudez
//                  //       $pagohipoteca=0;
//                         }
//                     }
//                     }
//                 }
//                 }
                 if (is_null($b['fechareal'])){
                    $fechacompara=  $b['hoydia'];
                 }else{
                     if($b['pago']=='SI')
                        $fechacompara=$b['fechareal'];
                     else
                        $fechacompara=  $b['hoydia'];
                 }
                  $calfechadias= $this->obtiene_dias1($b['fechapagar'],$fechacompara);
                  $totaldias=$calfechadias['tdias'];
                  
                 if($totaldiasanterior<=$totaldias){
                    $totaldiasanterior= $totaldias;
                    $sumadias=$totaldias;
                 }
                 if ($totaldias>0 and $totaldias<=30){
                                  if($this->verificarCobranza($nomcobra))
                                    $vencido30=$venciddo30+$b['valorcuota']+$b['valormora'] ;
                 }
                 else{
                     if ($totaldias>30 and $totaldias<=60){
                          if($this->verificarCobranza($nomcobra))
                            $vencido60=$vencido60+$b['valorcuota']+$b['valormora'];
                     }else{
                         if ($totaldias>60 and $totaldias<=90){
                            if($this->verificarCobranza($nomcobra))
                                $vencido90=$vencido90+$b['valorcuota']+$b['valormora'];
                         }
                         else{
                             if ($totaldias>90){
                                 if($this->verificarCobranza($nomcobra))
                                    $vencido91=$vencido91+$b['valorcuota']+$b['valormora'];
                              }
                       }
                     }
                 }

         }

        $retornopagos=array('pcuotainicial'=>$pagocuotainicial,'preserva'=>$pagoreserva,'pcuota'=>$pagocuota,'phipoteca'=>$pagohipoteca,'pag30'=>$vencido30,'pag60'=>$vencido60,'pag90'=>$vencido90,'pag91'=>$vencido91,'totadias'=>$sumadias);
        return $retornopagos;
    }


    /*Funcion que verifica que no sea bono ni hipoteca*/
    function verificarCobranza($concepto){
        $retorno=true;
        $abuscar='HIPOTECA';

             if (strstr($concepto,$abuscar)){

                 $retorno=false;
             }
            $abuscar='BONO';

             if (strstr($concepto,$abuscar)){

                 $retorno=false;
             }
         return $retorno;
    }

        function pagado_reservamascuotasreal($oportunidad="")
    {
         $totaldias=0;
        $retorno=0;
        $pagocuotainicial=0;
        $pagoreserva=0;
        $pagocuota=0;
        $pagohipoteca=0;
        $pagobono=0;
        $vencido30=0;
        $vencido60=0;
        $vencido90=0;
        $vencido91=0;
        $sumadias=0;
        $sqlcon="SELECT a.id as codopor, b.opportunit3f5cbranzas_idb as codcobraopo, a.name as oportunidad ,
        c.name as cobranza, c.valorcuota as valorcuota, c.fechapago as fechapagar, c.fecharealpago as fechareal,
        date(now()) as hoydia,c.valormora as valormora, upper(c.pago) as pago
        FROM opportunities a
        inner join opportunitiro_cobranzas_c b on a.id=b.opportunit0a0aunities_ida and b.deleted=0
        inner join pro_cobranzas  c on b.opportunit3f5cbranzas_idb=c.id and c.deleted=0
        where a.deleted=0 and a.id='".$oportunidad. "' order by codopor";
        $oportunidadcobra=array();
         $this->sql=$sqlcon;
         $resultadoSql = $this->excecutequery();
         while($b = $this->db->fetchByAssoc($resultadoSql)){
             $nomcobra=strtoupper($b['cobranza']);
             $abuscar='RESERVA';
             if (strstr($nomcobra,$abuscar)){
                 if ($b['pago']=='SI'){
                    $pagoreserva=$pagoreserva+$b['valorcuota'];
                 }
             }
             else{
                 $abuscar='CUOTA INICIAL';
                 if (strstr($nomcobra,$abuscar)){
                     if ($b['pago']=='SI'){
                         $pagocuotainicial=$pagocuotainicial+$b['valorcuota'];
                     }
                 }
                 else{
                     $abuscar='CUOTA';
                     if (strstr($nomcobra,$abuscar)){
                         if ($b['pago']=='SI'){
                             $pagocuota=$pagocuota+$b['valorcuota'];
                          }
                     }
                     else {
                        $abuscar='HIPOTECA';
                             if (strstr($nomcobra,$abuscar)){
                                 if ($b['pago']=='SI'){
                                    $pagohipoteca=$pagohipoteca+$b['valorcuota'];
                                   }
                             }else{
                                 $abuscar="BONO";
                                 if (strstr($nomcobra,$abuscar)){
                                    if ($b['pago']=='SI'){
                                         $pagobono=$pagobono+$b['valorcuota'];
                                    }
                                 }
                   
                           }
                     }
                 }
                 }
                 if (is_null($b['fechareal'])){
                            $fechacompara=  $b['hoydia'];
                         }
                 else{
                     $fechacompara=$b['fechareal'];
                 }
                  $calfechadias= $this->obtiene_dias($b['fechapagar'],$fechacompara);
                  $totaldias=($calfechadias['canio']*360)+($calfechadias['cmes']*30)+$calfechadias['cdias'];
                  $sumadias=$sumadias+$totaldias;
                 if ($totaldias>0 and $totaldias<=30){
                                  $vencido30=$venciddo30+$b['valorcuota']+$b['valormora'] ;
                 }
                 else{
                     if ($totaldias>30 and $totaldias<=60){


                          $vencido60=$vencido60+$b['valorcuota']+$b['valormora'];
                     }
                     else{
                         if ($totaldias>60 and $totaldias<=90){


                         $vencido90=$vencido90+$b['valorcuota']+$b['valormora'];
                         }
                         else{if ($totaldias>90){


                          $vencido91=$vencido91+$b['valorcuota']+$b['valormora'];
                         }
                         }
                     }
                 }


               }


        $retornopagos=array('pcuotainicial'=>$pagocuotainicial,'pbono'=>$pagobono,'preserva'=>$pagoreserva,'pcuota'=>$pagocuota,'phipoteca'=>$pagohipoteca,'pag30'=>$vencido30,'pag60'=>$vencido60,'pag90'=>$vencido90,'pag91'=>$vencido91,'totadias'=>$sumadias);
        return $retornopagos;
    }

    /*
     * Genera los ids de todos los inmuebles
     */
function motivos_desistimiento(){
       $clientes=array();
       $this->sql="Select name id, name FROM `pro_motivosdesistimiento` where deleted =0";

       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['id']."\" ".$this->selected_motivos_desistimiento($a['id']).">".substr($a['name'],0,40);

        }
     return $cadena;
}

    function selected_motivos_desistimiento($id=""){
        $retorno="";
        if(is_array($this->form['motivos'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['motivos'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
        }
        }
        return $retorno;
    }
    
    
    protected function estado_estudiante(){
        global $app_list_strings;
        if(is_array($app_list_strings['estatus_dom'])){
            foreach($app_list_strings['estatus_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_estado_estudiante($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_estado_estudiante($estado){
    $retorno="";
        if(is_array($this->form['estado_estudiante'])){
        foreach ($this->form['estado_estudiante'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }
    
    protected function potential(){
        global $app_list_strings;
        if(is_array($app_list_strings['potential_dom'])){
            foreach($app_list_strings['potential_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_potential($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_potential($estado){
    $retorno="";
        if(is_array($this->form['potential'])){
        foreach ($this->form['potential'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }
    
    protected function nivel_interes(){
        global $app_list_strings;
        if(is_array($app_list_strings['levelinteres_dom'])){
            foreach($app_list_strings['levelinteres_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_nivel_interes($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_nivel_interes($estado){
    $retorno="";
        if(is_array($this->form['nivel_interes'])){
        foreach ($this->form['nivel_interes'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }
    
    protected function sales_stage(){
        global $app_list_strings;
        if(is_array($app_list_strings['sales_stage_dom'])){
            foreach($app_list_strings['sales_stage_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_sales_stage($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_sales_stage($estado){
    $retorno="";
        if(is_array($this->form['sales_stage'])){
        foreach ($this->form['sales_stage'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }
    
    function university(){
       $clientes=array();
       $this->sql="Select DISTINCT(valor) valor from CATALOGO  where clase='institucion' order by valor";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['valor']."\" ".$this->selected_university($a['valor']).">".$a['valor'];
        }
        return $cadena;
    }
    function selected_university($id=""){
        $retorno="";
        if(is_array($this->form['university'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['university'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }
    
    function pais_interes(){
       $clientes=array();
       $this->sql="Select DISTINCT(valor) valor from CATALOGO  where clase='paisinteres' order by valor";
       $result=$this->excecutequery();
        while($a = $this->db->fetchByAssoc($result)) {
            $cadena.="<OPTION VALUE=\"".$a['valor']."\" ".$this->selected_pais_interes($a['valor']).">".$a['valor'];
        }
        return $cadena;
    }
    function selected_pais_interes($id=""){
        $retorno="";
        if(is_array($this->form['pais_interes'])){

        //var_dump($this->form['clientes']);
        foreach ($this->form['pais_interes'] as $key => $user){
            if(trim($id)==$user){
                 $retorno=" selected=\"selected\"";
                 break;

            }

        }
        }
        return $retorno;
    }
    
    protected function area_interes(){
        global $app_list_strings;
        if(is_array($app_list_strings['areainteres_dom'])){
            foreach($app_list_strings['areainteres_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_area_interes($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_area_interes($estado){
    $retorno="";
        if(is_array($this->form['area_interes'])){
        foreach ($this->form['area_interes'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }
    
    protected function grupo_asociado(){
        global $app_list_strings;
        if(is_array($app_list_strings['groupassociation_dom'])){
            foreach($app_list_strings['groupassociation_dom'] as $key=> $status){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_grupo_asociado($key).">".$status;
            }
        }
     return $cadena;
    }
    
    protected function selected_grupo_asociado($estado){
    $retorno="";
        if(is_array($this->form['grupo_asociado'])){
        foreach ($this->form['grupo_asociado'] as $key=> $user){
            if(trim($estado)==$user){
                 $retorno=" selected=\"selected\"";
                 break;
            }
          }
        }
        return $retorno;
    }

}