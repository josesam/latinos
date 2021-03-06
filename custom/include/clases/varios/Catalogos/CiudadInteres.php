<?php // utf-8
/*
 * Implementa la interfaz de catalogo para 
 * generar las busqueda y crud del contexto "paisinteres"
 * @company GreenFieldcrm.
 * @author josesam
 */

class CiudadInteres implements CatalogoInterface{
    
    public static $contexto="ciudadinteres";
    /*
     * Busca todos los paises de interes
     * de la tabla catalogo,
     * @valor <string>
     * @return <array> Datos de la busqueda 
     */
    public function buscar($valor="",$limit=10){
        global $db;
        $data=array();
        $filtro=(!empty($valor)) ? " and (c.valor like '%$valor%' or p.valor like '%$valor%') " : "" ;
        $limite="";
       if((int)$limit>0)
            $limite="limit 0,$limit";
        $sql="SELECT c.id idciudad,c.valor ciudad , p.id idpais,p.valor as pais
              FROM CATALOGO c left join CATALOGO p  on p.id=c.padre_id
              where (p.clase='paisinteres' or c.clase='ciudadinteres') $filtro
	      order by ciudad, pais $limite";
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
            $sql="insert into CATALOGO (clase,valor,padre_id) values ('".self::$contexto."','".$valor."','".$padre_id."');";
            $r=$db->query($sql);
            if ($r){
                
                return array('message'=>'La ciudad '.$valor. ' fue creada');
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
