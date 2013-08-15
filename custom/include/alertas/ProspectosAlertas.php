<?php

/**
 * Description of ParticipantesAlertas
 *
 * @author BOS
 */

class ProspectosAlertas extends Alertas {
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
    protected $ctx=array();
    /*
     * @var <string> Ruta donde se encuentran todas los archivos de las alertas
     */
    protected $ruta="custom/include/alertas/";
    /*
     * @var <string> Parametro para traer la parametrizacion  de la alerta
     */
    protected $scope="prospectos";
    function  __construct($param) {
        
        $path=$this->ruta."GeneradorPlantilla.php";
        if(file_exists($path)){
            include_once $path;
            $this->generador=new GeneradorPlantilla();
        }
//        $path_parametros=$this->ruta."parametros.php";
//        if (file_exists($path_parametros)){
//            $this->parametros=include_once $path_parametros;
//            
//        }
        $this->parametros=$param;
        parent::__construct();
        
    }
    
    /*
     * Carga las variables que estaran disponibles para la plantilla
     * @param <ee_Profesor> Objeto profesor
     * @param <array> Consulta a la base datos
     * @return <array> Variables para la plantilla
     */
    
    public function cargarVariables($cuenta,$consulta=array(),$module="Contacts"){
        global  $beanList, $beanFiles;
        
        $res=array();
	$class_name = $beanList[$module];
	require_once($beanFiles[$class_name]);
        $vardef = new $class_name();
        foreach ($vardef->field_defs as $field=>$value){
            $res[$field]=$cuenta->$field;
        }
        // Cargar las variables de las consultas al array que se despliega en la plantilla 
        foreach($consulta as $key =>$value){
            $res["c_".$key]=$value;
        }
        return $res;
    }
    /*
     * Sirve a modo de patron facade , llama las funciones necesarias para enviar el mail
     */
    public function controlador(){
        global $db;
        $data=array();
        foreach($this->parametros[$this->scope] as $value){
            switch ($value['tipo']){
                case '14_dias_despues':
                    $data=self::getDatosEstudiante($value['dias']);
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['estudiante']=$valores;
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           if (!empty($valores['estudiante']->email1)){
                               $email = $valores['estudiante']->email1;
                           }else{
                               $email = $value['default'];
                           }
                           //ALMACENAR LAS ALERTAS GENERADAS
                           $modulo = $valores['module_name'];
                           $id_registro = $valores['estudiante']->id;
                           $tipo_alerta = 'Contact Out After 14 days';
                           
                           $query='INSERT INTO alertas VALUES(0,"'.$modulo.'","'.$id_registro.'","'.$text.'","'.$value['Subject'].'",
                                                              "'.$email.'","'.$tipo_alerta.'","no") ';
                           $result=$db->query($query);
                        }
                    }
                    break;
                case '28_dias_despues':
                    $data=self::getDatosEstudiante($value['dias']);
                    if(count($data)>0){
                        foreach($data as $valores){
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
                           $this->ctx=array();                         
                           $this->ctx['estudiante']=$valores;
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           if (!empty($valores['estudiante']->email1)){
                               $email = $valores['estudiante']->email1;
                           }else{
                               $email = $value['default'];
                           }
                           //ALMACENAR LAS ALERTAS GENERADAS
                           $modulo = $valores['module_name'];
                           $id_registro = $valores['estudiante']->id;
                           $tipo_alerta = 'Contact Out After 28 days';
                           
                           $query='INSERT INTO alertas VALUES(0,"'.$modulo.'","'.$id_registro.'","'.$text.'","'.$value['Subject'].'",
                                                              "'.$email.'","'.$tipo_alerta.'","no") ';
                           $result=$db->query($query);
                        }
                    }
                    
                    break;
                case '42_dias_despues':
                    $data=self::getDatosEstudiante($value['dias']);
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['estudiante']=$valores;
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           if (!empty($valores['estudiante']->email1)){
                               $email = $valores['estudiante']->email1;
                           }else{
                               $email = $value['default'];
                           }
                           //ALMACENAR LAS ALERTAS GENERADAS
                           $modulo = $valores['module_name'];
                           $id_registro = $valores['estudiante']->id;
                           $tipo_alerta = 'Contact Out After 42 days';
                           
                           $query='INSERT INTO alertas VALUES(0,"'.$modulo.'","'.$id_registro.'","'.$text.'","'.$value['Subject'].'",
                                                              "'.$email.'","'.$tipo_alerta.'","no") ';
                           $result=$db->query($query);
                           
                        }
                    }
                    break;
                case 'not_attended':
                    $data=self::getDatosNotAttended();
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['estudiante']=$valores;
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           if (!empty($valores['estudiante']->email1)){
                               $email = $valores['estudiante']->email1;
                           }else{
                               $email = $value['default'];
                           }
                           //ALMACENAR LAS ALERTAS GENERADAS
                           $modulo = $valores['module_name'];
                           $id_registro = $valores['estudiante']->id;
                           $tipo_alerta = 'Not Attended';
                           
                           $query='INSERT INTO alertas VALUES(0,"'.$modulo.'","'.$id_registro.'","'.$text.'","'.$value['Subject'].'",
                                                              "'.$email.'","'.$tipo_alerta.'","no") ';
                           $result=$db->query($query);
                           
                        }
                    }
                    break;
                case 'attended':
                    $data=self::getDatosAttended();
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['estudiante']=$valores;
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           if (!empty($valores['estudiante']->email1)){
                               $email = $valores['estudiante']->email1;
                           }else{
                               $email = $value['default'];
                           }
                           //ALMACENAR LAS ALERTAS GENERADAS
                           $modulo = $valores['module_name'];
                           $id_registro = $valores['estudiante']->id;
                           $tipo_alerta = 'Attended';
                           
                           $query='INSERT INTO alertas VALUES(0,"'.$modulo.'","'.$id_registro.'","'.$text.'","'.$value['Subject'].'",
                                                              "'.$email.'","'.$tipo_alerta.'","no") ';
                           $result=$db->query($query);
                           
                        }
                    }
                    break;
            }
        }
        
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getDatosEstudiante($var){
        global $db;
        
        $query="
                    SELECT * 
                    FROM accounts a
                    WHERE datediff( now( ) , date(  a.date_entered ) ) = $var
                    AND a.deleted =0 AND (status = 'new-enquiry' or status = 'event-registration')
                ";
//          $query="SELECT * FROM accounts ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          $path="custom/include/workflows/ProspectosWorkFlow.php";
        
        
          while ($a=$db->fetchByAssoc($result)){
              $estudiante=new Account();
              $estudiante->disable_row_level_security=true;
              $estudiante->retrieve($a['id']);
              if(!empty($estudiante->id)){ 
                 $data[$cont]['module_name']='Accounts';
                 $data[$cont]['estudiante']=$estudiante;
                 $cont++;
              }
              if($var==42){
                  $queryAlumno="UPDATE accounts SET potential='Bajo' WHERE id='".$a['id']."' ";
                  $resultAlumno=$db->query($queryAlumno);
              }
          }
          return $data;
     }
     
     function getDatosNotAttended(){
        global $db;
        
        $query="
                    SELECT * 
                    FROM accounts a
                    WHERE a.deleted =0 AND status = 'not-attended' AND a.id NOT IN (SELECT id_registro FROM alertas WHERE modulo='Accounts' AND tipo_alerta='Not Attended')
                ";
//          $query="SELECT * FROM accounts ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
              $estudiante=new Account();
              $estudiante->disable_row_level_security=true;
              $estudiante->retrieve($a['id']);
              if(!empty($estudiante->id)){ 
                 $data[$cont]['module_name']='Accounts';
                 $data[$cont]['estudiante']=$estudiante;
                 $cont++;
              }
          }
          return $data;
     }
     
     function getDatosAttended(){
        global $db;
        
        $query="
                    SELECT * 
                    FROM accounts a
                    WHERE a.deleted =0 AND status = 'attended' AND a.id NOT IN (SELECT id_registro FROM alertas WHERE modulo='Accounts' AND tipo_alerta='Attended')
                ";
//          $query="SELECT * FROM accounts ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
              $estudiante=new Account();
              $estudiante->disable_row_level_security=true;
              $estudiante->retrieve($a['id']);
              if(!empty($estudiante->id)){ 
                 $data[$cont]['module_name']='Accounts';
                 $data[$cont]['estudiante']=$estudiante;
                 $cont++;
              }
          }
          return $data;
     }
    
    /*
     * Obtiene los datos de la base para poder enviar emails
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getDatos($var){
        global $db;

          $query="
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.fechainicio_programa ) ) =- $var
                    AND p.deleted =0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $programa=new ee_Programas();
             $programa->disable_row_level_security=true;
             $programa->retrieve($a['id']);
             if(!empty($programa->id)){
                 $data[$cont]['programa']=$programa;
                
                $ganados=self::totalParticipante($programa->id);
                $facturados=self::totalParticipanteFacturados($programa->id); 
                $data[$cont]['info']['participanteprospecto']=number_format(self::totalParticipantesInscritos($programa->id,"Prospecting"),0);
                $data[$cont]['info']['participanteseguimienti']=number_format(self::totalParticipantesInscritos($programa->id,"Seguimiento"),0);
                $data[$cont]['info']['participanteinscritos']=number_format(self::totalParticipantesInscritos($programa->id),0);
                $data[$cont]['info']['participantereal']=number_format((int)$facturados['totales'],0);
                $data[$cont]['info']['participanteregistrados']=$ganados['pagados'];
                 
                  
                 $cont++;
             }
         }
        return $data;
    }
    
     /*
     * Obtiene los datos de la base para poder enviar emails,
      * Carga todos los programas que han sido creado un dia antes
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getProgramaCreado($var){
        global $db;

          $query="
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.date_entered ) ) = $var
                    AND p.deleted =0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $programa=new ee_Programas();
             $programa->disable_row_level_security=true;
             $programa->retrieve($a['id']);
             if(!empty($programa->id)){
                 $data[$cont]['programa']=$programa;
                 
                 $sql_info="
                     SELECT *
                            FROM `detalle_programa`
                            WHERE fecha_inicio = (
                            SELECT min( fecha_inicio )
                            FROM `detalle_programa`
                            WHERE programa_id = '".$programa->id."' )
                            AND deleted =0
                            AND programa_id = '".$programa->id."'
                        ";
                 $GLOBALS['log']->fatal($query);
                 $result_info=$db->query($sql_info);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                         $data[$cont]['info']=$a_info;
                 }
                 $cont++;
             }
         }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails,
      * Carga todos los programas que han sido creado un dia antes
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getProgramaInicio($var){
        global $db;

          $query="
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.fechainicio_programa ) ) =- $var
                    AND p.deleted =0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
              
              $sql_participantes="Select idcontacto as id from 
                                  opportunities o inner join detalle_participante det 
                                  on  o.id=det.oportunidad_id where o.deleted=0 
                                  and o.id in (
                                        Select oportunidad_id from  opportunities o inner join detalle_cotizacion d on o.id=d.oportunidad_id
                                        and o.deleted=0 and d.deleted=0
                                        where d.idprograma = '".$a['id']."' and  (o.sales_stage like '%Closed Won%' or o.sales_stage like '%Facturado-No-Cobrado%')
                                    ) and det.deleted=0 and det.idcontacto <>'-99' ";
              $GLOBALS['log']->fatal($query);
               $result_info=$db->query($sql_participantes);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                        $contacto=new Contact();
                        $contacto->disable_row_level_security=true;
                        $contacto->retrieve($a_info['id']);
                         if(!empty($contacto->id)){
                            $data[$cont]['contacto']=$contacto;
                            $data[$cont]['info']=$a;        
                            $cont++;
                         }
                 }
                 
         }
        return $data;
    }
    
    
    
    
     /*
     * Obtiene todos los participantes que deben asistir a
      * un curso dos dias antes de que inicie el modulo
      *
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getCursoInicio($var){
        global $db;

          $query="
                    SELECT p . * ,d.modulo,d.profesor,d.horas,d.lugar,d.instalaciones,d.fecha_inicio,d.fecha_fin
                    FROM ee_programas p inner join detalle_programa d on p.id=d.programa_id
                    WHERE datediff( now( ) , date(  d.fecha_inicio ) ) =- $var
                    AND p.deleted =0 and d.deleted=0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query);
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
              
              $sql_participantes="Select idcontacto as id from 
                                  opportunities o inner join detalle_participante det 
                                  on  o.id=det.oportunidad_id where o.deleted=0 
                                  and o.id in (
                                        Select oportunidad_id from  opportunities o inner join detalle_cotizacion d on o.id=d.oportunidad_id
                                        and o.deleted=0 and d.deleted=0
                                        where d.idprograma = '".$a['id']."' and  (o.sales_stage like '%Closed Won%' or o.sales_stage like '%Facturado-No-Cobrado%')
                                    ) and det.deleted=0 and det.idcontacto <>'-99' ";
              $GLOBALS['log']->fatal($query);
               $result_info=$db->query($sql_participantes);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                        $contacto=new Contact();
                        $contacto->disable_row_level_security=true;
                        $contacto->retrieve($a_info['id']);
                         if(!empty($contacto->id)){
                            $data[$cont]['contacto']=$contacto;
                            $data[$cont]['info']=$a;        
                            $cont++;
                         }
                 }
                 
         }
        return $data;
    }
    
    
    /*
     * Subquery total participantes inscritos (etapa "inscrito")
     * @var <string> programas
     */

    function totalParticipantesInscritos($id,$etapa="Inscrito"){
        global $db;
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id 
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and a.deleted=0 and ao.deleted=0 and
                    d.idprograma='$id' and o.sales_stage ='$etapa' $filtros";
       // echo $sql;
        $GLOBALS['log']->fatal($query);
        $result=$db->query($sql);
        $a=$db->fetchByAssoc($result);
        $total=$a['numero'];
      //  echo $sql;
        return (empty($total))? 0 : $total ;
    }

    /*
     * Subquery total participantes ganados (etapa "ganados") y que hayan realizado un pago,
     * @var <string> programas
     */

    function totalParticipante($id){
        global $db;
        $contador=0;
        $por_pagar=0;
        $valor=0;
        $res=array('pagados'=>0,'totales'=>0,'valor'=>0);
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero,o.idcobranza
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and a.deleted=0 and ao.deleted=0 and
                    d.idprograma='$id' and (sales_stage ='Closed Won')
              $filtros and o.idcobranza is not null
             group by o.idcobranza
             ";
      //  echo $sql."<br>";
        $GLOBALS['log']->fatal($query);
        $result=$db->query($sql);
        $flag=false;
        while ($a=$db->fetchByAssoc($result)){

            $total_registrado+=$a['numero'];
            $sql_detalle="Select id,valor from detalle_pagos
                          where deleted=0 and valor>0 and cobranza_id='".$a['idcobranza']."'";
         //  echo $sql_detalle.";<br>";
            $GLOBALS['log']->fatal($query);
            $result_detalle=$db->query($sql_detalle);
            $flag=false;
            while ($a1=$db->fetchByAssoc($result_detalle)){
                if(!empty($a1['id'])){

                    $total=(empty($a['numero']))? 0 : $a['numero'] ;
                    $valor+=(empty($a1['valor']))? 0 : $a1['valor'] ;
                    $total=(empty($total))? 0 : $total ;
                    if(!$flag){
                        $contador+=$total;
                        $flag=true;
                    }
                }
            }
        }
        //$a=$db->fetchByAssoc($result);
        //$total=$a['numero'];
        //return (empty($contador))? 0 : $contador ;
        $res['pagados']=$contador;
        $res['totales']=$total_registrado;
        $res['valor']=$valor;
        return $res;
    }

    /*
     * Subquery total participantes generados facturas pero sin pago
     * @var <string> programas
     */

    function totalParticipanteFacturados($id){
        global $db;
        $contador=0;
        $por_pagar=0;
        $valor=0;
        $res=array('pagados'=>0,'totales'=>0,'valor'=>0);
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero,o.idcobranza
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and
                    d.idprograma='$id' and (sales_stage ='Facturado-No-Cobrado') $filtros
             group by o.idcobranza
             ";
       // echo $sql."<br>";
        $GLOBALS['log']->fatal($query);
        $result=$db->query($sql);
        $flag=false;
        $total_registrado=0;
        while ($a=$db->fetchByAssoc($result)){

            $total_registrado+=$a['numero'];
            
        }
        //$a=$db->fetchByAssoc($result);
        //$total=$a['numero'];
        //return (empty($contador))? 0 : $contador ;
        
        $res['totales']=$total_registrado;
        
        return $res;
    }
    
//    /*
//     * Obtiene todos los usuarios del sistema 
//     * @return <array>
//     */
//    function usuariosSistema(){
//        global $db;
//        $sql="Select id from users where status='Active'";
//        $result=$db->query($sql);
//        $data=array();
//        while ($a=$db->fetchByAssoc($result)){
//           $user=new User();
//           $user->retrieve($a['id']);
//           if(!empty($user->id)){
//               if(!empty($user->email1)){
//                   $data[]=$user->email1;
//               }
//           }
//           
//        }
//        return $data;
//    }
//    

}
?>
