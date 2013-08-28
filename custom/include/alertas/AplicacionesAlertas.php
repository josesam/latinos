<?php

/**
 * Description of ParticipantesAlertas
 *
 * @author BOS
 */
class AplicacionesAlertas extends Alertas {

    //put your code here
    // preparar variables
    // crear la plantilla
    //
    protected $generador;
    /*
     * @var <string> Plantilla actual
     * 
     */
    protected $template;

    /*
     * @var <array>  Array donde se encuentran la parametrizacion de las alertas
     */
    protected $parametros;
    /*
     * @var <array> Variables disponibles para la plantilla
     */
    protected $ctx = array();
    /*
     * @var <string> Ruta donde se encuentran todas los archivos de las alertas
     */
    protected $ruta = "custom/include/alertas/";
    /*
     * @var <string> Parametro para traer la parametrizacion  de la alerta
     */
    protected $scope = "aplicacion";

    function __construct($param) {

        $path = $this->ruta . "GeneradorPlantilla.php";
        if (file_exists($path)) {
            include_once $path;
            $this->generador = new GeneradorPlantilla();
        }
//        $path_parametros=$this->ruta."parametros.php";
//        if (file_exists($path_parametros)){
//            $this->parametros=include_once $path_parametros;
//            
//        }
        $this->parametros = $param;
        parent::__construct();
    }

    /*
     * Carga las variables que estaran disponibles para la plantilla
     * @param <ee_Profesor> Objeto profesor
     * @param <array> Consulta a la base datos
     * @return <array> Variables para la plantilla
     */

    public function cargarVariables($cuenta, $consulta = array(), $module = "Contacts") {
        global $beanList, $beanFiles;

        $res = array();
        $class_name = $beanList[$module];
        require_once($beanFiles[$class_name]);
        $vardef = new $class_name();
        foreach ($vardef->field_defs as $field => $value) {
            $res[$field] = $cuenta->$field;
        }
        // Cargar las variables de las consultas al array que se despliega en la plantilla 
        foreach ($consulta as $key => $value) {
            $res["c_" . $key] = $value;
        }
        return $res;
    }

    /*
     * Sirve a modo de patron facade , llama las funciones necesarias para enviar el mail
     */

    public function controlador() {
        global $db;
        $data = array();
        foreach ($this->parametros[$this->scope] as $value) {
            switch ($value['tipo']) {
                case '14_dias_incomplete':
                    $data = self::getDatosIncomplete($value['dias']);
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
//                           $this->ctx=array();                         
//                           $this->ctx['estudiante']=$valores;
//                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
//                           parent::setParentId($valores['estudiante']->id);
//                           parent::setParenttype($valores['module_name']);
//                           if (!empty($valores['estudiante']->email1)){
//                               parent::setEmail($valores['estudiante']->email1);
//                           }else{
//                               parent::setEmail($value['default']);
//                           }
//                           parent::sendMail($value['Subject'],$text);
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Aplication Incomplete 14 Days';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case '35_dias_incomplete':
                    $data = self::getDatosIncomplete($value['dias']);
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Aplication Incomplete 35 Days';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case '55_dias_incomplete':
                    $data = self::getDatosIncomplete($value['dias']);
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Aplication Incomplete 55 Days';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                
                case 'conditional_offer':
                    $data = self::getDatosConditionalOffer();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Conditional Offer';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case 'unconditional_offer':
                    $data = self::getDatosUnconditionalOffer();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Unconditional Offer';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                
                case 'acceptance_sent':
                    $data = self::getDatosAcceptanceSent();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Acceptance Sent';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case 'coe_received':
                    $data = self::getDatosCoeReceived();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Coe Received';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case 'visa_sent':
                    $data = self::getDatosVisaSent();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Visa Sent';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
                    
                case 'visa_received':
                    $data = self::getDatosVisaReceived();
                    if (count($data) > 0) {
                        foreach ($data as $valores) {
                            $this->ctx = array();
                            $this->ctx['aplicacion'] = $valores;
                            $text = $this->generador->generar($value['plantilla'], $this->ctx);
                            if (!empty($valores['aplicacion']->email1)) {
                                $email = $valores['aplicacion']->email1;
                            } else {
                                $email = $value['default'];
                            }
                            //ALMACENAR LAS ALERTAS GENERADAS
                            $modulo = $valores['module_name'];
                            $id_registro = $valores['aplicacion']->id;
                            $tipo_alerta = 'Visa Received';

                            $query = 'INSERT INTO alertas VALUES(0,"' . $modulo . '","' . $id_registro . '","' . $text . '","' . $value['Subject'] . '",
                                                              "' . $email . '","' . $tipo_alerta . '","no","' . $valores['aplicacion']->assigned_user_id . '") ';
                            $result = $db->query($query);
                        }
                    }
                    break;
            }
        }
    }

    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Aplication Incomplete
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosIncomplete($var) {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND datediff( now( ) , date(  ev.fecha ) ) = $var
                    AND o.deleted =0 AND ev.etapa = 'application_incomplete' AND ev.deleted=0
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Conditional Offer
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosConditionalOffer() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'conditional_offer' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Conditional Offer')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado UnConditional Offer
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosUnconditionalOffer() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'unconditional_offer' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Unconditional Offer')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Acceptance Sent
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosAcceptanceSent() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'acceptance_sent' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Acceptance Sent')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Coe Received
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosCoeReceived() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'coe_received' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Coe Received')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Visa Sent
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosVisaSent() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'visa_sent' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Visa Sent')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails de las aplicaciones que se encuentran en estado Visa Received
     * dependiendo del número de días parametrizado
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */

    function getDatosVisaReceived() {
        global $db;

        $query = "
                    SELECT o.* 
                    FROM opportunities o, etapa_venta ev
                    WHERE o.id=ev.id_oportunidad AND o.deleted =0 AND ev.etapa = 'visa_received' AND ev.deleted=0
                          AND o.id not in (SELECT id_registro FROM alertas WHERE modulo='Aplicaciones' AND tipo_alerta='Visa Received')
                ";
//          $query="SELECT * FROM accounts ";
        $result = $db->query($query);
        $GLOBALS['log']->fatal($query);
        $data = array();
        $cont = 0;

        while ($a = $db->fetchByAssoc($result)) {
            $aplicacion = new Opportunity();
            $aplicacion->disable_row_level_security = true;
            $aplicacion->retrieve($a['id']);
            if (!empty($aplicacion->id)) {
                $data[$cont]['module_name'] = 'Aplicaciones';
                $data[$cont]['aplicacion'] = $aplicacion;
                $cont++;
            }
        }
        return $data;
    }

    
}

?>
