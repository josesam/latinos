<?php

class Respuesta{
    var $estado;
    var $errores=array();
}
/**
 * Description of Clientes
 *
 * @author Jose Sambrano
 */

class Clientes {
    /*
     * @var $id int
     */
    private $id;
    /*
     * @var $db
     *
     */
    private $db;

    /*
     * @var sql;
     */
    private $sql;
    
    private $res;
    /*
     * @param $path_validacion;
     */
    private $path_validacion='custom/include/clases/varios/ValidacionCedulaRuc.php';
    
    function __construct(){
        $this->db = DBManagerFactory::getInstance();
        $this->res=new Respuesta();
        if (file_exists($this->path_validacion)){
            include_once $this->path_validacion;
        }

    }
    /*
     * Setea la id
     */
    function setId($var){
        $this->id=$var;
    }
    
     /*
      *Verifica la obligatoriedad de los campos
      * @$form array valores pasado del formulario
      */
    public function tramitarRequest($form=array()){
        $this->validarCampos($form);
        $this->cargaEstado();
        $this->validarCedula($form);
        
        $this->cargaEstado();
        
        
        if($this->res->estado=='error') return $this->res;
     
        
    }

    public function cargaEstado(){
        if(count($this->res->errores)>0){
                $this->res->estado='error';
        }else
              $this->res->estado='exito';
    }
    
    public function validarCampos($form){
         
        /*
         * Si cateforia es flota debe ser Juridico.
         */
        if($form['categoria_c']=="Flotas"){
            if($form['genero_c']!='JURIDICO'){
                 $this->res->errores['genero']='Si la categoria es Retail , favor dede escoger el género Jurídico';
            }
        }
        if(empty($form['phone_alternate']) && empty($form['phone_office'])){
          $this->res->errores['telefonos']='Ingrese uno de los telefonos';
        }
        
         if(empty($form['name']))
            $this->res->errores['name']='El nombre no puede estar vacio';
        
    }

    public function validarCedula($form){
        // Solo si esta lleno
        if(!empty($form['cedularuc_c'])){
            if($form['genero_c']!='Extranjero'){
                $respuesta=ValidacionCedulaRuc::procesarDocumento($form['cedularuc_c']);
                 /*
                 * Verificar que el tipo documento corresponda
                 */
              if($respuesta->valido){
                if(($form['genero_c']=='JURIDICO')){//ruc
                     if(!$respuesta->ruc){
                            $this->res->errores['ruc']="Nro de Documento Identidad equivocado";
                        }else{
                            if($this->validaExistencias($form['cedularuc_c'],$form['record']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
                        }

              }
                if(($form['genero_c']=='NATURAL')||($form['genero_c']=='MASCULINO')||($form['genero_c']=='FEMENINO')){//cedula
                      if(!$respuesta->valido){
                            $this->res->errores['cedula']="El Nro de Documento Identidad equivocado";
                        }else{
                             if($this->validaExistencias($form['cedularuc_c'],$form['record']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
                        }
                    
                }
                if($form['genero_c']==''){
                                $this->res->errores['tipo_documento']="El tipo de documento no puede estar vacio";
                }
              }else{
                   $this->res->errores['ruc']=$respuesta->mensaje;
              }
           }
        }
        
    }
    
    function validaExistencias($cedula="",$record="",$detalle=false){
        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        if(empty($record)){
            $this->sql="Select a.id from accounts a inner join accounts_cstm c on a.id=c.id_c  where  c.cedularuc_c='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $this->sql="Select a.id id from accounts a inner join accounts_cstm c on a.id=c.id_c where  c.cedularuc_c='".$cedula."' and deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal = $a['id'];
                    if(trim($data_principal)!=trim($record)){
                        return true;
                    }
            }
                  
            return false;
        }
    }
 

}
?>
