<?php
/*
 * Intefaz para ser implementada en las diferentes
 * busqueda de los catalogos que se necesiten el sistema
 * @company GreenFieldcrm.
 * @author josesam
 */
interface CatalogoInterface{
    
    public function buscar($valor="",$limit=10);
    public function crear($valor,$padre_id=null);
    public function cargar($data=array());
    public function editar($codigo,$valor);
    public function eliminar($codigo);
    
    
}
?>
