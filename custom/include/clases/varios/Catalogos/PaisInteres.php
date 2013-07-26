<?php // utf-8
/*
 * Implementa la interfaz de catalogo para 
 * generar las busqueda y crud del contexto "paisinteres"
 * @company GreenFieldcrm.
 * @author josesam
 */

class PaisInteres implements CatalogoInterface{
    /* valor estatico para el contexto de la tabla catalogo*/
    public static $contexto="paisinteres";
    
    /*
     * Busca todos los paises de interes
     * de la tabla catalogo,
     * @valor <string>
     * @return <array> Datos de la busqueda 
     */
    public function buscar($valor="",$limit=10){
        global $db;
        $data=array();
        
        $filtro=(!empty($valor)) ? " and valor like '%$valor%' " : "" ;
        $limite="";
        if($limit>0)
            $limite="limit 0,$limit";
        $sql="Select id,valor from CATALOGO where clase ='".self::$contexto."' $filtro $limite";
       // echo $sql;
        $result =$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            $data[]=$a;
        }
        return $data;
    }
    // TODO 
    // implementar la creacion de catatagos de este tipo 
    public function crear($valor,$padre_id=null){
        global $db;
        $sql="Select id from CATALOGO where clase='".self::$contexto."' and valor='".$valor."'";
        $result=$db->query($sql);
        
        $a=$db->fetchByAssoc($result);
       
        
        if ((count($a)>0) && (!is_bool($a))){
            return array('message'=>'Registro Existe');
        }else{
            $sql="insert into CATALOGO (clase,valor) values ('".self::$contexto."','".$valor."');";
            $r=$db->query($sql);
            if ($r){
                
                return array('message'=>'El pais '.$valor. ' fue creado');
            }else {
                return array('message'=>'Error al crear el registro');
            }
        }
    }
    // TODO 
    // implementar la carga de catatagos de este tipo 
    function cargar($data=array()){}
    // TODO 
    // implementar la ediciion de catatagos de este tipo 
    function editar($codigo,$valor){}
    // TODO 
    // implementar la eliminacion de catatagos de este tipo 
    function eliminar($codigo){}
}
?>
