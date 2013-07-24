<?php
/*
 * Maneja los diferentes estados que un prospecto 
 * pasa antes de aplicar
 * @author josesambrano
 * @company BOS
 */
include 'custom/include/workflows/WorkFlowHandler.php';
class OportunidadWorkFlow extends WorkFlowHandler{
    private $tipo="2";
    /*
     * @param <string> Nombre del Archivo sin la extension json
     * @param <string> Estado Actual del estudiante, para setear ese estado como inicial
     * 
     */
    function __construct($contexto,$estado_actual) {
        parent::__construct($contexto,$estado_actual);
    }
    
    function procesaWorkFlow($parent_id,$bean_module,$transicion,$estado_actual,$origen,$is_new=true){
        global $current_user;
        $usuario=$current_user->user_name;
        
        if ($is_new){
            parent::setEstadoActual('application_sent');
            $current_state=  parent::getEstadoActual();
            self::registraWorkFlow('',$current_state,$origen,$usuario,$parent_id,$bean_module);
        }else{
            $estado_permitido=parent::setEstadoActual($estado_actual);
            if ($estado_permitido){
                $transicion_permitida=  parent::transicionPermitida($transicion);
                if ($transicion_permitida){
                    parent::cambiarEstado($transicion);
                    $current_state=  parent::getEstadoActual();
                    self::registraWorkFlow($estado_actual,$current_state,$origen,$usuario,$parent_id,$bean_module);
                    self::actualizaUltimoEstado($current_state,$parent_id);
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
            
            
        
        
        
        
        

//        if ($is_new){
//            parent::setEstadoActual('event_registration');
//            $current_state=  parent::getEstadoActual();
//            self::registraWorkFlow('',$current_state,$origen,$usuario,$parent_id,$bean_module);
//                    
//                    
//            switch ($origen){
//                case 'outlook':
//                case 'webform':
//                case 'llamada':    
//                    $current_state=  parent::getEstadoActual();
//                    self::registraWorkFlow('',$current_state,$origen,$usuario,$parent_id,$bean_module);
//                    break;
//                case 'excel':
//                    parent::setEstadoActual('event_registration');
//                    $current_state=  parent::getEstadoActual();
//                    self::registraWorkFlow('',$current_state,$origen,$usuario,$parent_id,$bean_module);
//                    break;
//                case 'contacto_directo':
//                    parent::setEstadoActual('interview-walked-in');
//                    $current_state=  parent::getEstadoActual();
//                    self::registraWorkFlow('',$current_state,$origen,$usuario,$parent_id,$bean_module);
//                    break;
//                    
//            }
//            self::actualizaUltimoEstado($current_state,$parent_id);
//            return true;
//        }else{
//            $estado_permitido=parent::setEstadoActual($estado_actual);
//            if ($estado_permitido){
//                $transicion_permitida=  parent::transicionPermitida($transicion);
//                if ($transicion_permitida){
//                    parent::cambiarEstado($transicion);
//                    $current_state=  parent::getEstadoActual();
//                    self::registraWorkFlow($estado_actual,$current_state,$origen,$usuario,$parent_id,$bean_module);
//                    self::actualizaUltimoEstado($current_state,$parent_id);
//                    return true;
//                }else{
//                    return false;
//                }
//            }else{
//                return false;
//            }
//            
//        }
        
    }
    /*
     * TODO se debe crear un usuario para el webform
     * Registra en la tabla del workflow el proceso que se ejecuto
     * @param <string> Estado Actual, cuando un valor nuevo eeste valor es nulo
     * @param <string> Estado al que pasa el proceso
     * @param <string> Input de donde fue ejecutado el proceso
     * @param <string> Usuario que ejecuto el proceso
     * @param <string> Id del Estudiante
     * @param <string> Nombre del Modulo 
     * @return <boolean> True or False
     */
    private function registraWorkFlow($estado_actual,$estado_final,$origen,$usuario,$parent_id,$bean_module){
        global $db;
        $fecha_creacion=new DateTime();
        $sql="insert into workflow (
               estado_anterior,
               estado_actual,origen,
               usuario,
               parent_id,bean_module,
               tipo,fecha_creacion) values (
               '$estado_actual',
               '$estado_final',
               '$origen',
               '$usuario',
               '$parent_id',
               '$bean_module',
               '$this->tipo','".FormatUtil::formatDate($fecha_creacion)."')";
        return $db->query($sql);
    }
    /*
     * Actualiza el status  al ultimo estado del proceso
     * @param <string> Estado Actual, cuando un valor nuevo eeste valor es nulo
     * @param <string> Id del Estudiante 
     */
    private function actualizaUltimoEstado($estado_actual,$parent_id){
        global $db;
        $update="Update accounts set status='$estado_actual' where id='$parent_id'";
        return $db->query($update);
    }
    /*
     * Actualiza el campo potencial cuando se han dispararod ciertas condiciones
     * en las alertas
     * @param <string> Valor puede ser Low , High (verificar los lenguajes)
     * @param <string> Id del Estudiante 
     */
    public function setPotential($valor,$parent_id){
        global $db;
        $update="Update accounts set  potential='$valor' where id='$parent_id'";
        return $db->query($update);
    }
}
?>
