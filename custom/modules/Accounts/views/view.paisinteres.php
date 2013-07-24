<?php

/*
 * Carga la lista de paises de interes,
 * 
 */
require_once('include/MVC/View/SugarView.php');
require_once("include/JSON.php");
class AccountsViewPaisinteres extends SugarView{
    
    public function AccountsViewPaisinteres(){
        parent::SugarView();
    }
    function process() {
		$this->display();
    }

    function display(){
            
           
           if(file_exists("custom/include/clases/varios/Catalogos/PaisInteres.php")){
             include_once("custom/include/clases/varios/Catalogos/PaisInteres.php");
             $form=$_REQUEST;
         
             $data=PaisInteres::buscar($form['nombre']);
             echo self::mostrar($data);
             
           }else {
               echo "Ocurrio un error ";
           }
	  
    }
    function mostrar($data=array()){
          
            $retorno="<table width='100%' id=\"rounded-corner\" >";
            if(is_array($data)){
            $retorno.='<thead>';
            $retorno.='<tr>';
            $retorno.='<th scope="col" class="rounded-company">';
            $retorno.='Pais';
            $retorno.='</th>';
            

            $retorno.='</tr>';
            $retorno.='</thead>';
            $retorno.='<tfoot>
                        <tr>
                                <td colspan="1" class="rounded-foot-left"><em>Pais Interes</em></td>
                                <td class="rounded-foot-right">&nbsp;</td>
                        </tr>
                        </tfoot>';
            $retorno.='<tbody>';

            foreach($data as $value){
                    $retorno.='<tr>';
                    $retorno.='<td>';
                    $retorno.='<a name="l_paisinteres" href="javascript:void(0);" onclick="javascript:copiarPais(\''.$value['valor'].'\');">'.$value['valor']."</a>";
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
