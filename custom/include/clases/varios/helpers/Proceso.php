<?php

/*
 * Retorna el proceso tanto en 
 * clientes (estudiantes) como en oportunidades (aplicaciones)
 * @company BOS
 * @author josesambrano
 * @package custom.include.clases.varios.helpers
 */
class Proceso{
    
    static public function devolverFlujo($parent_id=''){
        global $db;
        $data=array();
        $sql =  "Select estado_anterior,estado_actual,fecha_creacion fecha,origen 
                 from workflow where parent_id='$parent_id'";
        $result=$db->query($sql); 
        while ($a=$db->fetchByAssoc($result)){
            $data[]=$a;
        }
        return $data;
    }
}
?>
