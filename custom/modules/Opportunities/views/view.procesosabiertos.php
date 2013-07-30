<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewProcesosabiertos extends ViewEdit {

 	function OpportunitiesViewProcesosabiertos(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            include_once('custom/include/clases/varios/ProcesosAbiertos.php');
            $idAplicacion=$_REQUEST['idAplicacion'];
            $aplicacion=new ProcesosAbiertos($idAplicacion,'buscar');
            echo $aplicacion->showAll();
            
            echo '<div id="cerrar_aplicacion_div"></div>';
 	}
}
?>
