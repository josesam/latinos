<?php
/*
 * Intefaz para ser implementada en las diferentes
 * busqueda de los catalogos que se necesiten el sistema
 * @company GreenFieldcrm.
 * @author josesam
 */
interface CatalogoInterface{
    
    public static function buscar($valor="");
    public function crear($contexto,$valor,$padre_id);
    public function cargar($data=array());
    public function editar($codigo,$valor);
    public function eliminar($codigo);
    
    
}
?>
