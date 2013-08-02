<?php
if (!defined('sugarEntry'))define('sugarEntry', true);
/*
 * Registra todos los datos que 
 * vienen de las diferentes fuentes outlook, webform,
 * de 
 * @josesam
 * 
 */
class HistoricoModelo {
    
    private $parent_id;
    private $bean_module;
    private $fecha;
    private $origen;
    private $datos;
    private $date_created;
    private $date_modified;
    private $modified_user_id;
    private $deleted=0;
    
    function __construct() {
        ;
    }
    function setParentId($var){
        $this->parent_id=$var;
    }
    function setBeanModule($var){
        $this->bean_module=$var;
    }
    function setFecha($var){
        $this->fecha=$var;
    }
    function setOrigen($var){
        $this->origen=$var;
    }
    function setDatos($var){
        $this->datos=$var;
    }
    function setDateCreated($var){
        $this->date_created=$var;
    }
    function setDateModified($var){
        $this->date_modified=$var;
    }
    function setModifiedUserId($var){
        $this->modified_user_id=$var;
    }
    function setDeleted($var){
        $this->deleted=$var;
    }
    
    
    /// Getters
    
    function getParentId(){
        return $this->parent_id;
    }
    function getBeanModule(){
        return $this->bean_module;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getOrigen(){
        return $this->origen;
    }
    function getDatos(){
        return $this->datos;
    }
    function getDateCreated(){
       return $this->date_created;
    }
    function getDateModified(){
       return $this->date_modified;
    }
    function getModifiedUserId(){
        return $this->modified_user_id;
    }
    function getDeleted(){
        return $this->deleted;
    }
    /*
     * Actualiza el registro,
     * @return <bool> Verdadero o Falso si se ejecuto la transaccion
     */
    function save(){
       global $db;
       $sql="insert into historico
             (parent_id,bean_module,origen,datos,date_created,date_modified,modified_user_id,deleted, fecha )
              values (
             '".$this->parent_id ."','".$this->bean_module ."','".$this->origen ."','".$this->datos ."',
             '".$this->date_created ."','".$this->date_modified ."','".$this->modified_user_id ."','".$this->deleted ."',
             '".$this->fecha ."'    
             )";
      // $GLOBALS['log']->fatal($sql);
       return $db->query($sql);
       
    }
    /*
     * Actualiza el registro,
     * @param <int> Id del registro que se va a eliminar
     * @return <bool> Verdadero o Falso si se ejecuto la transaccion
     */
    function update($id=''){
        global $db;
        $sql="Update historico set
              parent_id='".$this->parent_id."',
              bean_module='".$this->bean_module."',
              origen='".$this->origen."',
              datos='".$this->datos."',
              date_created='".$this->date_created."',
              date_modified='".$this->date_modified."',
              modified_user_id='".$this->modified_user_id."',
              deleted='".$this->deleted." 
              where id=$id";
        //$GLOBALS['log']->fatal($sql);
        return $db->query($sql);
    }
    /*
     * Borrado logico de la tabla historico
     * @param <int> Id del registro que se va a eliminar
     * @return <bool> Verdadero o Falso si se ejecuto la transaccion
     */
    function delete($id){
        global $db;
        $sql="Update historico set deleted=0 where id=$id";
        //$GLOBALS['log']->fatal($sql);
        return $db->query($sql);
    }
    /**/
    
    
}
?>
