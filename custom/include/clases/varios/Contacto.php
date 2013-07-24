<?php
/**
 * Crea contactos ingresados manual cuando la oportunidad ha sido creada
 *
 * @author BOS
 */
class RespuestaContacto{
    var $estado;
    var $errores=array();
}

class Contacto {
    
    /*
     * @var <string> Etapa de venta actual
     */
    var $etapa_actual;
    /*
     * @var <string> Id de la oportunidad.
     */
    var $id_oportunidad;
    /*
     * <object> $res Objeto para mostrar los errores al guardar el contacto
     */
    private $res;

    function  __construct($id='',$etapa='') {
        $this->etapa_actual=$etapa;
        $this->id_oportunidad=$id;
        $this->res=new RespuestaContacto();
    }
    
    /*
     * Valida la informacion del formulario de contactos
     */
    function tramitarRequest($form=array()){
       // $this->validaFechas($form['birthdate']);
        $this->validarCedula($form);
        self::cargaEstado();
        if($this->res->estado=='error') return $this->res;
    }
    /*
     * Carga e
     */
    public function cargaEstado(){
        if(count($this->res->errores)>0){
                $this->res->estado='error';
        }else
              $this->res->estado='exito';
    }


    /*
     * Valida que la fecha ingresada no sea futura
     * ademas valida que no sea menor de 18 y mayor de 100 años
     * <data> fecha_nacimento  Fecha ingresada por el usuario
     * <int> max Edad Maxima
     * <int> min Edad minima
     *
     */
    private function validaFechas($fecha,$min=18,$max=100){
        global $timedate;
        if(empty($fecha))
            return '';
       // si es manual verificar que la fecha no sea anterior
       // fecha validez tres mes a partir de la fecha posible de cierre.
        $fecha_hoy= new DateTime($timedate->to_db(date($timedate->get_date_format())));
        $fecha_ingresada=new DateTime($timedate->to_db($fecha));

       $path1="custom/include/clases/varios/DateUtils.php";

          if(file_exists($path1)){
              include_once $path1;


              }

       $date=DateUtils::dateDiff($fecha_ingresada,$fecha_hoy);


           if($fecha_ingresada>=$fecha_hoy){
               $this->res->errores['fecha_nacimiento_futura']=" La fecha de nacimiento no puede ser  mayor a la fecha actual";
           }else{
                    if(($date['years']<$min) || ($date['years']>$max))
                        $this->res->errores['fecha_nacimiento_rangos']="La fecha de nacimiento no se encuentra entre los rangos ".$min ." y ". $max;
           }



    }



     public function validarCedula($form){
        // Solo si esta lleno

            $path="custom/include/clases/varios/ValidacionCedulaRuc.php";
            if(!file_exists($path)){


                $this->res->errores['error_validacion']=" La clase de validación de cédula ha sido borrada ";
                return '';
            }else{
                require_once $path;
            }
           if(!empty($form['cedula_c'])){
           $respuesta=ValidacionCedulaRuc::procesarDocumento($form['cedula_c']);
           if($respuesta->tipo!='natural')
                $this->res->errores['tipo_natural']=" Solo permite cédulas de personas naturales ";
                 /*
                 * Verificar que el tipo documento corresponda
                 */
           if($respuesta->valido){
               
               
                   if($this->validaExistencias($form['cedula_c'],$form['record']))
                               $this->res->errores['cedula']="Nro de Documento Identidad existente";
               

                
              }else{
                   $this->res->errores['cedula']=$respuesta->mensaje;
              }
           }


    }
    /*
     * @param <string> Cedula del Contacto
     * @param <string> Record Actual, id que genera sugarcrm para cada registro de contacto
     * @param <boolean>
     */
    function validaExistencias($cedula="",$record="",$detalle=false){
        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        global $db;
        if(empty($record)){
            $sql="Select c.id from contacts c inner join contacts_cstm cs on c.id=cs.id_c where  cs.cedula_c='".$cedula."' and c.deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $sql="Select c.id id from contacts c inner join contacts_cstm cs on c.id=cs.id_c where  cs.cedula_c='".$cedula."' and deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
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
