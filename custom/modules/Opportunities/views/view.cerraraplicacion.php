<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewCerraraplicacion extends ViewEdit {

 	function OpportunitiesViewCerraraplicacion(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            include_once('custom/include/clases/varios/ProcesosAbiertos.php');
            $idAplicacion=$_REQUEST['idAplicacion'];
            $aplicacion=new ProcesosAbiertos($idAplicacion,'cerrar');
            echo $aplicacion->showCerrar();



 	}
}
?>
