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
        $GLOBALS['log']->fatal($sql);
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $id = $a['id'];
            }
            
            return $id;
    }
    function saveFile($note){
        
         global $sugar_config;
          

        $focus = new Note();



        if(!empty($note['id'])){
                $focus->retrieve($note['id']);
                if(empty($focus->id)) {
                    return '-1';
                }
        }else{
                return '-1';
        }

        if(!empty($note['file'])){
                $decodedFile = base64_decode($note['file']);
                $this->upload_file->set_for_soap($note['filename'], $decodedFile);

                $ext_pos = strrpos($this->upload_file->stored_file_name, ".");
                $this->upload_file->file_ext = substr($this->upload_file->stored_file_name, $ext_pos + 1);
                if (in_array($this->upload_file->file_ext, $sugar_config['upload_badext'])) {
                        $this->upload_file->stored_file_name .= ".txt";
                        $this->upload_file->file_ext = "txt";
                }

                $focus->filename = $this->upload_file->get_stored_file_name();
                $focus->file_mime_type = $this->upload_file->getMimeSoap($focus->filename);
               	$focus->id = $note['id'];
                $return_id = $focus->save();
                $this->upload_file->final_move($focus->id);
        }else{
                return '-1';
        }

        return $return_id;

        
    }
}
?>
