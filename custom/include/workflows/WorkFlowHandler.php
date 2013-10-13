<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//include_once 'custom/include/workflows/autoload.php';
include_once 'custom/include/workflows/Documento.php';
include_once 'custom/include/clases/varios/FormatUtil.php';


include_once 'custom/include/workflows/Finite/StateMachine/StateMachineInterface.php';
include_once 'custom/include/workflows/Finite/StateMachine/StateMachine.php';
include_once 'custom/include/workflows/Finite/State/StateInterface.php';
include_once 'custom/include/workflows/Finite/State/State.php';
//include_once 'Finite/Exception/Exception.php';
include_once 'custom/include/workflows/Finite/Exception/TransitionException.php';
include_once 'custom/include/workflows/Finite/Exception/StateException.php';


include_once 'Finite/Transition/TransitionInterface.php';
include_once 'Finite/Transition/Transition.php';

//use Finite\StateMachine\StateMachine;
//use \Documento;
class WorkFlowHandler{
    public $document;
    /* @var <StateMachine> */
    public $stm;
    /*@var <array> Formato json*/
    public $json;
    public function __construct($contexto,$estado_actual) {
        
        $this->document=new Documento();
        $this->stm=new StateMachine();
        $this->stm->setObject($this->document);
        $this->json=FormatUtil::safeUnserialize(file_get_contents("custom/include/workflows/".$contexto.".json"));
        self::cargarEstados($estado_actual);
        self::cargarTransiciones();
        $this->stm->initialize();
                
    } 
    /* Devuelve el estado acutal */
    function getEstadoActual(){
        return $this->document->getFiniteState();
    }
    /* 
     * Setea el estado actual verificando si esta permitido
     * @param <string> Nombre del estado
     * @return <boolean> Verdadero si logro el proceso o Falso si existio algun error
     */
    function setEstadoActual($state){
        $estados_permitidos=$this->stm->getStates();
        if(in_array($state,$estados_permitidos)){
            $this->document->setFiniteState($state);
            
            return true;
        }else{
            return false;
        }
    }
    /*
     * Verifica que la transicion este permitida
     * @return <bool> Si la transicion esta permitida
     */
    function transicionPermitida($transicion){
        return $this->stm->can($transicion);
    }
    
    /*
     * Cambia el estado una vez que esta verificado
     * @return <string> Estado Actual
     */
    function cambiarEstado($transicion){
        $this->stm->apply($transicion);
        return $this->stm->getCurrentState();
    }
    /*
     * Carga los estados disponibles , 
     * los cuales se encuentran en archivos
     * @param <string> Carga cualquier estado como inicial para que funcionen las transiciones
     * @return <void>
     */
    private function cargarEstados($estado){
        if (count($this->json)>0){
            foreach($this->json->estado as $key => $value){
                
                if(empty($estado)){
                    if ($key==0){
                        $this->stm->addState($value, 'initial');
                    }else
                        $this->stm->addState($value);
                }else{
                    
                    if ($value===$estado){
                        $this->stm->addState($value, 'initial');
                    }else{
                        $this->stm->addState($value);
                    }
                }    
            }
        }
    }
    /*
     * Carga las transiciones,
     * las cuales se encuentran cargadas en un archivo
     * json
     * @return <void>
     */
    private function cargarTransiciones() {
        if (count($this->json)>0){
            foreach($this->json->transiciones as $key=> $value){
                $this->stm->addTransition($key, $value->inicial, $value->final);
            }
        }
    }
            
            
}
?>
