<?php
/*
 * Vista para traer la ciudad y el pais.
 * @company BOS
 * @author josesambrano
 */
include_once 'include/MVC/View/views/view.edit.php';

class AdministrationViewCiudad extends ViewEdit{
    
    function __construct() {
        parent::ViewEdit();
    }
    function process(){
        $this->display();
    }
    function display() {
       
        include_once 'custom/include/clases/varios/Catalogos/CatalogoInterface.php';
        include_once 'custom/include/clases/varios/Catalogos/CiudadInteres.php';
        $data=  CiudadInteres::buscar($_REQUEST['filtro'],20);
        echo self::showData($data);
    }
    function showData($data){
            $retorno="<table width='100%' id=\"rounded-corner\" >";
            if(is_array($data)){
            $retorno.='<thead>';
            $retorno.='<tr>';
            $retorno.='<th scope="col" class="rounded-company">';
            $retorno.='Ciudad';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company">';
            $retorno.='Pais';
            $retorno.='</th>';
            $retorno.='</tr>';
            $retorno.='</thead>';
           
            $retorno.='<tbody>';

            foreach($data as $value){
                    $retorno.='<tr>';
                    $retorno.='<td>';
                    $retorno.='<a name="l_paisinteres" href="javascript:void(0);" onclick="javascript:copiarCiudad(\''.$value['idciudad'].'\',\''.$value['ciudad'].'\',\''.$value['pais'].'\');">'.$value['ciudad']."</a>";
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['pais'];
                    $retorno.='</td>';
                    
                    $retorno.='</tr>';
            }
            $retorno.='</tbody>';

      }else
          $retorno.="<tr><td>No se encontro ningun pais de interes</td></tr>";
          $retorno.="</table>";
          return $retorno;
        
    }
}
?>
