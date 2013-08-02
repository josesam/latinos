<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewBuscarinstitucion extends ViewEdit {

 	function OpportunitiesViewBuscarinstitucion(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            echo '
                <table>
                <tr>
                    <td>Filtro:</td>
                    <td>
                        <input type="text" name="filtro" id="filtro" />
                        <input type="hidden" name="opcion" id="opcion" value="'.$_REQUEST['opcion'].'" />
                    </td>
                </tr>
                </table>
                <input type="button" name="buscar" id="buscar" value="Buscar" onclick="buscarInstitucion();" />
                ';
            echo '<div id="resultado_institucion_div" ></div>';


 	}
}
?>
