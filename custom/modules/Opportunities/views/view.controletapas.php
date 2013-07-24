<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewControletapas extends ViewEdit {

 	function OpportunitiesViewControletapas(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            include_once('custom/include/clases/varios/ManejoEtapasVenta.php');
            $etapa_actual=$_REQUEST['etapa'];
            $etapas=new ManejoEtapasVenta($etapa_actual);
            echo $etapas->showEtapas();



 	}
}
?>
