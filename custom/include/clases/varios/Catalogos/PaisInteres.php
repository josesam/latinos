<?php // utf-8
/*
 * Implementa la interfaz de catalogo para 
 * generar las busqueda y crud del contexto "paisinteres"
 * @company GreenFieldcrm.
 * @author josesam
 */
include 'custom/include/clases/varios/Catalogos/CatalogoInterface.php';
class PaisInteres implements CatalogoInterface{
    /* valor estatico para el contexto de la tabla catalogo*/
    public static $contexto="paisinteres";
    
    /*
     * Busca todos los paises de interes
     * de la tabla catalogo,
     * @valor <string>
     * @return <array> Datos de la busqueda 
     */
    public static function buscar($valor=""){
        global $db;
        $data=array();
        
        $filtro=(!empty($valor)) ? " and valor like '%$valor%' " : "" ;
<<<<<<< HEAD
        $limite="";
        if($limit>0)
            $limite="limit 0,$limit";
        $sql="Select id,valor from CATALOGO where clase ='".self::$contexto."' $filtro $limite";
       // echo $sql;
=======
        $sql="Select id,valor from catalogo where clase ='".self::$contexto."' $filtro Limit 0,10";
>>>>>>> f9efc85935ae112b2273d8db41fca60c7e03af4e
        $result =$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            $data[]=$a;
        }
        return $data;
    }
    // TODO 
    // implementar la creacion de catatagos de este tipo 
    function crear($contexto,$valor,$padre_id){}
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
