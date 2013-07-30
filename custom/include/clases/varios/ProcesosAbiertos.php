<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ProcesosAbiertos{
    var $datos = array();
    var $resultado = false;
    function __construct($idAplicacion="",$tipo=""){
        global $db;
        if($tipo=='buscar'){
            $sql = "SELECT account_id FROM accounts_opportunities WHERE opportunity_id='".$idAplicacion."' AND deleted=0";
            $result=$db->query($sql);
            while ($row = $db->fetchByAssoc($result)) 
                $estudiante = $row['account_id'];

            $sql1 = "SELECT o.id idoportuniad 
                     FROM opportunities o,accounts_opportunities ao 
                     WHERE o.id=ao.opportunity_id AND account_id='".$estudiante."' AND ao.deleted=0 AND o.sales_stage <> 'Closed Won' AND o.sales_stage <> 'Closed Lost'";
            $result1=$db->query($sql1);
            while ($row1 = $db->fetchByAssoc($result1)) 
                $this->datos[] = $row1['idoportuniad'];
        }
        if($tipo=='cerrar'){
            $sql = "UPDATE opportunities 
                    SET sales_stage='Closed Lost' 
                    WHERE ID='".$idAplicacion."'";
            $this->resultado=$db->query($sql);
        }
        
     }
     
    function showAll(){
        $cont=0;
        $cadena.='<table width="100%" id="hor-minimalist-b" border="1">
            <thead>
                <tr>
                     <th scope="col">Nombre</th>
                     <th scope="col">Estado Aplicación</th>
                     <th scope="col">Institución</th>
                     <th scope="col">Ciudad</th>
                     <th scope="col">Destino</th>
        	</tr>
            </thead>';
        
        if(count($this->datos)>0){
            $cadena.="<tbody>";
            foreach($this->datos as $values){
                $oportunidad = new Opportunity();
                $valores = $oportunidad->retrieve($values);
                $cadena.='<tr>';
                    $cadena.='<td>'.$valores->name.'</a>';
                    $cadena.='</td>';
                    $cadena.='<td>'.$valores->sales_stage.'</td>';
                    $cadena.='<td>'.$valores->institution.'</td>';
                    $cadena.='<td>'.$valores->city.'</td>';
                    $cadena.='<td>'.$valores->destination.'</td>';
                    $cadena.='<td>';
                    $cadena.='<a href="javascript:cerrarAplicacion(\''.$values.'\')">Cerrar</a>';
                    $cadena.='</td>';
                $cadena.='</tr>';
            }
            $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            $cadena.='<tr>';
            $cadena.='<td colspan="5">';
            $cadena.=' No existen procesos abiertos para este Estudiante ';
            $cadena.='</td>';
            $cadena.='</tr>';
            $cadena.="</tbody>";
        }
       
        $cadena.='</table>';
        return $cadena;

    }
    
    function showCerrar(){
        if($this->resultado)
            echo 'Aplicación cerrada exitosamente';
        else
            echo 'Aplicación NO cerrada';
    }
    
}
?>
