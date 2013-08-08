<?php
if (!defined('sugarEntry'))define('sugarEntry', true);
/*
 * Funciones utilitarias para los metodos del servicio web
 * de Latinos
 * @author josesam
 */
require_once('include/upload_file.php');
class WebServiceHelpers {
    var $upload_file;
    public function __construct() {
        $this->upload_file = new UploadFile('uploadfile');
    }
    
    /*
     * Valida la unicidad del correo electronico
     * @param <string> Email
     * @return <string> id de la tabla de sugarcrm
     */
    function validaEmail($email,$module="Accounts"){
        global $db;
        $id="";
        $sql="SELECT a.id 
                    FROM accounts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = '$module'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 and em.email_address ='$email' limit 0,1";
            //$GLOBALS['log']->fatal($sql);
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $id = $a['id'];
            }
            
            return $id;
    }
    /* 
     * Extrae todas las aplicaciones buscadas desde un email
     * @param <string> Correo, filtro de busqueda
     * @return <array> Matriz con el o los ids de las oportunidades
     */
    function buscarAplicaciones($email="",$estudiante_name=""){
        global $db;
        $retorno=array();
        if (empty($estudiante_name))
            return $retorno;
        $detalle=array(
            'estudiante_id'=>'',
            'email'=>'',
            'estudiante_name'=>'',
            'aplicacion_id'=>'',
            'institucion'=>'',
            'city'=>'',
            'destination'=>'',
            
        );
        $filtro="";
        if (!empty($email))
            $filtro=" and em.email_address='".$email."'";
        if (!empty($estudiante_name))
            $filtro=" and a.name like '%".$estudiante_name."%'";
        
        $sql="Select a.id estudiante_id,
                     a.name estudiante_name,
                     em.email_address email,
                     o.id aplicacion_id,
                     o.institution institucion,
                     o.destination destination,
                     o.city city
                from 
              accounts a inner join accounts_opportunities ao on a.id=ao.account_id
              inner join opportunities o on o.id=ao.opportunity_id 
              INNER JOIN email_addr_bean_rel h ON a.id = h.bean_id
              INNER JOIN email_addresses em on em.id=h.email_address_id
              where a.deleted=0 and ao.deleted=0 and o.deleted=0 and
                    h.bean_module = 'Accounts' 
                    and h.primary_address=1 
                    and em.email_address='$email'
              ";
        //$GLOBALS['log']->fatal($sql);
        $result=$db->query($sql);
        while ($a =$db->fetchByAssoc($result)){
            
            $detalle['estudiante_id']=$a['estudiante_id'];
            $detalle['email']=$a['email'];
            $detalle['estudiante_name']=$a['estudiante_name'];
            $detalle['aplicacion_id']=$a['aplicacion_id'];
            $detalle['institucion']=$a['institucion'];
            $detalle['destination']=$a['destination'];
            $detalle['city']=$a['city'];
            $retorno[]=$detalle;
        }
        return $retorno;
    }
    
}
?>
