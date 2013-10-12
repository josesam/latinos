<?php

/*
 * 
 * 
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.detail.php');

class AccountsViewContactin extends ViewDetail{
    
    
    function AccountsViewContactin(){
        parent::ViewDetail();
    }
    function process() {
        $this->display();
    }
    function display() {
        $path="custom/include/workflows/ProspectosWorkFlow.php";
        $parent_id=$_REQUEST['parent_id'];
        $status=$_REQUEST['status'];
        if (file_exists($path)){
            include_once $path;
            $prospectoWorkflow=new ProspectoWorkFlow('prospectos',$status);
            $valor=$prospectoWorkflow->procesaWorkFlow($parent_id, "Accounts", 'cambio-manual', $status,"manual",false);
            if ($valor)
                echo 'Refresque la pantalla';
            else 
                echo 'No es permitido el cambio';
            
        }else{
            echo 'Se produjo un error, Comuniquese con el Andministrador';
        }    
    }
    function mostrar($data=array()){
            $retorno="<table width='100%' id='hor-minimalist-b' >";
            
            $retorno.='<thead>';
            $retorno.='<tr>';
            $retorno.='<th scope="col">';
            $retorno.='Proceso Anterior';
            $retorno.='</th>';
            $retorno.='<th scope="col">';
            $retorno.='Proceso Actual';
            $retorno.='</th>';
            $retorno.='<th scope="col">';
            $retorno.='Fecha';
            $retorno.='</th>';
            $retorno.='<th scope="col">';
            $retorno.='Origen';
            $retorno.='</th>';

            $retorno.='</tr>';
            $retorno.='</thead>';
            $retorno.='<tfoot>
                        <tr>
                                <td colspan="3" class="rounded-foot-left"><em>Proceso</em></td>
                                <td class="rounded-foot-right">&nbsp;</td>
                        </tr>
                        </tfoot>';
            $retorno.='<tbody>';
            if (count($data)>0){
                foreach($data as $value){
                    $retorno.='<tr>';
                    $retorno.='<td>';
                    $retorno.=$value['estado_anterior'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['estado_actual'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['fecha'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['origen'];
                    $retorno.='</td>';
                    $retorno.='</tr>';
                }
                
            }else{
                $retorno.="<tr>";
                $retorno.='<td colspan="4">No se encontro ningun proceso</td>';
                $retorno.="</tr>";
            }
            $retorno.="</tbody>";
        
        return $retorno;
        
        
    }
}

?>
