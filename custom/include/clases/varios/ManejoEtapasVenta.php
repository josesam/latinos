<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ManejoEtapasVenta{
    // copia de las etapas de venta
    //
    var $clonesales_stage;
    // sub etapas de ventas
    // se activan  cuando se encuentra  en calificacion
    //Especifica el tipo de negocio que esta manejando
    //InCompany , Abierto

    var $clase;


    var $sales_posiciones;
    var $sales_posiciones_array;
    /*
     *  Etapa Actual
     *  var $string
     */
    var $etapa_actual;

    
    function __construct($etapa=""){
        global $app_list_strings;
        $this->etapa_actual=$etapa;
        
        
//  [application_sent] => (string) Application Sent
//  [application_incomplete] => (string) Application Incomplete
//  [application_complete] => (string) Application Complete
//  [application_unsuccessful] => (string) Application Unsuccessful
//  [conditional_offer] => (string) Conditional Offer
//  [unconditional_offer] => (string) Unconditional Offer
//  [acceptance_sent] => (string) Acceptance Sent
//  [coe_received] => (string) COE Received
//  [visa_sent] => (string) Visa Sent
//  [visa_received] => (string) Visa Received
//  [visa_denied] => (string) Visa Denied
//  [Closed Won] => (string) Studying Course
//  [Closed Lost] => (string) Cancelled Application
//  [cancelled_application_incomplete] => (string) Cancelled Application Incomplete
//  [deferral_process] => (string) Deferral Process
        
        if($etapa == ""){
            $this->clonesales_stage = array(
                "application_sent"=>"Application Sent",
                "application_incomplete"=>"Application Incomplete"
            );
        }
        
        if($etapa == "Application Sent"){
            $this->clonesales_stage = array(
                "application_unsuccessful"=>"Application Unsuccessful",
                "conditional_offer"=>"Conditional Offer",
                "unconditional_offer"=>"Unconditional Offer",
                "coe_received"=>"COE Received",
                "deferral_process"=>"Deferral Process",
            );
        }
            if($etapa == "Application Unsuccessful"){
                $this->clonesales_stage = array();
            }
            if($etapa == "Conditional Offer"){
                $this->clonesales_stage = array(
                    "unconditional_offer"=>"Unconditional Offer",
                    "Closed Lost"=>"Cancelled Application",
                    "deferral_process"=>"Deferral Process",
                );
            }
            if($etapa == "Unconditional Offer"){
                $this->clonesales_stage = array(
                    "Closed Lost"=>"Cancelled Application",
                    "acceptance_sent"=>"Acceptance Sent",
                    "coe_received"=>"COE Received",
                    "deferral_process"=>"Deferral Process",
                );
            }
                if($etapa == "Acceptance Sent"){
                    $this->clonesales_stage = array(
                        "coe_received"=>"COE Received",
                        "deferral_process"=>"Deferral Process",
                    );
                }
                    if($etapa == "COE Received"){
                        $this->clonesales_stage = array(
                            "Closed Lost"=>"Cancelled Application",
                            "visa_sent"=>"Visa Sent",
                            "deferral_process"=>"Deferral Process",
                        );
                    }
                        if($etapa == "Visa Sent"){
                            $this->clonesales_stage = array(
                                "visa_denied"=>"Visa Denied",
                                "visa_received"=>"Visa Received",
                                "deferral_process"=>"Deferral Process",
                            );
                        }
                            if($etapa == "Visa Received"){
                                $this->clonesales_stage = array(
                                    "deferral_process"=>"Deferral Process",
                                    "Closed Lost"=>"Cancelled Application",
                                    "Closed Won"=>"Studying Course",
                                );
                            }
        
        
        
        
        if($etapa == "Application Incomplete"){
            $this->clonesales_stage = array(
                "application_sent"=>"Application Sent",
                "Closed Lost"=>"Cancelled Application",
                "deferral_process"=>"Deferral Process",
            );
        }
        
        
        
        
        if($etapa == "Cancelled Application"){
            $this->clonesales_stage = array();
        }
        if($etapa == "Visa Denied"){
            $this->clonesales_stage = array();
        }
        if($etapa == "Studying Course"){
            $this->clonesales_stage = array();
        }
        if($etapa == "Deferral Process"){
            $this->clonesales_stage = array(
                "unconditional_offer"=>"Unconditional Offer",
            );
        }
        
//            $this->clonesales_stage=$app_list_strings['sales_stage_dom'];
            
        self::prepareSalesStage();

     }

    // Prepara las etapas de ventas , no puede ir para atras




     function  prepareSalesStage(){

         if(is_array($this->sales_posiciones_array)){
             
             $temp1=$this->sales_posiciones_array;
             
             foreach($temp1 as $key =>$value){

                 if((int)$value<=(int)$this->sales_posiciones){
                    // unset($this->clonesales_stage[$key]);

                 }

             }

         }
     }
    function showEtapas(){
       
        return $this->showAll();      

    }
    //muestra todas las etapas de ventas
    function showAll(){
        $cont=0;
        $cadena.='<table width="100%" id="hor-minimalist-b">
            <thead>
                <tr>
                     <th scope="col">Nombre</th>
        	</tr>
            </thead>';
        
        if(count($this->clonesales_stage)>0){
        $cadena.="<tbody>";
            foreach($this->clonesales_stage as $key=> $values){
                   $cadena.='<tr>';
                   $cadena.='<td>';
                   $cadena.='<a href="javascript:copiarEtapa(\''.$values.'\',\''.$this->getProbability($key).'\')">'.$values.'</a>';
                   $cadena.='</td>';
                   $cadena.='</tr>';
                    $cont++;
                }
             $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            $cadena.='<tr>';
            $cadena.='<td>';
            $cadena.=' La etapa de venta actual '.$this->etapa_actual ." es el último proceso de la venta";
            $cadena.='</td>';
            $cadena.='</tr>';
            $cadena.="</tbody>";
        }
       
        $cadena.='</table>';
        return $cadena;

    }
    //Selecciona la probabilidad
    function getProbability($value){
        global $app_list_strings;
      
         if ($this->clase=="Incompany")
           return $app_list_strings['sales_probability_dom'][$value];
         else if($this->clase=="Abierto")
            return  $app_list_strings['sales_probability1_dom'][$value];
         else
            return  $app_list_strings['sales_probability2_dom'][$value];

    }
    /*
     * Transforma a ingles para ser guardado
     * @param <string> Nombre de la etapa seleccionada
     * @return <string> Etapa de venta lista para guardar en la base datos
     */
    function prepareSaveStage($etapa){
       global $app_list_strings;
        foreach($app_list_strings['sales_stage_dom'] as $key =>$value){
            if(trim($value)==trim($etapa))
                return $key;
        }
    }
    /**
     *
     * Prepara el dato para mostrar al usuario
     * @param <string> Etapa de Venta actual en la base de datos
     * @return <string> Etapa de Venta lista para mostrar al usuario, sirve para las etapas que estan en Inglés
     */
    function prepareEditField($etapa){
        global $app_list_strings;
        foreach($app_list_strings['sales_stage_dom'] as $key =>$value){
            if(trim($key)==trim($etapa))
                return $value;
        
        }
    }


    /*
     * Unset el resto de valores de la lista
     * @var $tiponegocio
     * @var $listaname
     * @return array
     */
     function manejoTipoNegocio($tiponegocio,$listaname){
         global $app_list_strings;
         $temp=$app_list_strings[$listaname];
         if(is_array($temp)){
             foreach($temp  as $key =>$value){

                 if($key!=$tiponegocio){
                     unset($app_list_strings[$listaname][$key]);
                 }
             }
         }
         
         return $app_list_strings[$listaname];
     }
}
?>
