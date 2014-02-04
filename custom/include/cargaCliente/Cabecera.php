<?php
class Cabecera {

    function clientes($lista=array()){
        global $db,$current_user;
        $user_id=$current_user->id;
        
        for($i=0;$i<count($lista);$i++){
           $verificarMail = '';
           $sqlVerificarMail=$db->query('SELECT ea.id email_id 
                                         FROM email_addresses ea,email_addr_bean_rel br 
                                         WHERE ea.id=br.email_address_id AND bean_module="Accounts" AND email_address="'.(utf8_decode($lista[$i][4])).'"
                                               AND ea.deleted=0 AND br.deleted=0'); 
           while($a = $db->fetchByAssoc($sqlVerificarMail))
              $verificarMail=$a['email_id'];
           
           if (filter_var($lista[$i][4], FILTER_VALIDATE_EMAIL)){
           if($verificarMail == ''){
                $id=create_guid();
                $rr = "INSERT INTO accounts(
                                            id,
                                            name,
                                            date_entered,
                                            date_modified,
                                            modified_user_id,
                                            created_by,
                                            description,
                                            deleted,
                                            assigned_user_id,  
                                            phone_fax,
                                            phone_office,
                                            phone_alternate,
                                            lae,
                                            levelinterest,
                                            groupassociation,
                                            potential,
                                            status,
                                            dateofbirth,
                                            registrationdate,
                                            areainterest,
                                            paisinterest,
                                            medioingreso
                                         )
                       VALUES(";
                $ff = "'".$id."',
                     '".utf8_encode($lista[$i][0])."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".$user_id."',
                     '".$user_id."',
                     '".utf8_encode($lista[$i][15])."',
                     '0',
                     '".$user_id."',
                     '".$lista[$i][6]."',
                     '".$lista[$i][5]."',
                     '".$lista[$i][7]."',
                     '".$lista[$i][10]."',
                     '".$lista[$i][14]."',
                     '".$lista[$i][9]."',
                     '".$lista[$i][16]."',
                     'event-registration',
                     '".$lista[$i][3]."',
                     '".date('Y-m-d')."',
                     '".$lista[$i][13]."',
                     '".$lista[$i][12]."',
                     '".$lista[$i][2]."'
                     )";
                $r=$db->query($rr.$ff);

                $idEmail1=create_guid();
                $email1="insert into email_addresses
                         ( 
                         id,
                         email_address,
                         email_address_caps,
                         date_created,
                         date_modified,
                         deleted
                         ) VALUES (

                          '$idEmail1',
                          '".$lista[$i][4]."',
                          '".strtoupper($lista[$i][4])."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0'
                         )";
                $r=$db->query($email1); 

                $idEmailrelacion1=create_guid();
                $emailRelacion1="insert into email_addr_bean_rel
                         ( 
                         id,
                         email_address_id,
                         bean_id,
                         bean_module,
                         primary_address,
                         date_created,
                         date_modified,
                         deleted
                         ) VALUES (
                          '$idEmailrelacion1',
                          '".$idEmail1."',
                          '".$id."',
                          'Accounts',
                          1,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0'
                         )";
                $r=$db->query($emailRelacion1); 
            }else{
                $error['fila']=$i+2;
                $error['detalle']="ESTUDIANTE DUPLICADO CON MAIL: ".$lista[$i][4];
                $errores[]=$error; 
            }
             
            }else{
                $error['fila']=$i+2;
                $error['detalle']="CORREO INVÁLIDO: ".$lista[$i][4];
                $errores[]=$error; 
            }
        }
        $retorno['error']=$errores;
        return $retorno; 
    }
}
?>