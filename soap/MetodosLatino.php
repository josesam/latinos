<?php
/*
NOTE SPECIFIC CODE
*/
$server->register(
        'set_file_attachment',
        array('session'=>'xsd:string','oportunidad_id'=>'xsd:string','note'=>'tns:note_attachment'),
        array('return'=>'tns:set_entry_result'),
        $NAMESPACE);

/**
 * Add or replace the attachment on a Note.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param Binary $note -- The flie contents of the attachment.
 * @return Array 'id' -- The ID of the new note or -1 on error
 *               'error' -- The SOAP error if any.
 */

function set_file_attachment($session,$note) {
        $error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	require_once('modules/Documents/DocumentSoap.php');
	$ns = new NoteSoap();
	return array('id'=>$ns->saveFile($note), 'error'=>$error->get_soap_array());
}


/////// outlook

$server->register(
    'set_entry_estudiantes',
    array('session'=>'xsd:string', 'module_name'=>'xsd:string','email'=>'xsd:string',  'name_value_list'=>'tns:name_value_list'),
    array('return'=>'tns:set_entry_result'),
    $NAMESPACE);


function set_entry_estudiantes($session,$module_name,$email,$name_value_list) {
    	global  $beanList, $beanFiles;
        
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'write')){
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	$class_name = $beanList[$module_name];
	require_once($beanFiles[$class_name]);
	$seed = new $class_name();

	foreach($name_value_list as $value){
        if($value['name'] == 'id' && isset($value['value']) && strlen($value['value']) > 0){
	    $result = $seed->retrieve($value['value']);
            //bug: 44680 - check to ensure the user has access before proceeding.
            if(is_null($result))
            {
                $error->set_error('no_access');
		        return array('id'=>-1, 'error'=>$error->get_soap_array());
            }
            else
            {
                break;
            }

		}
	}
	foreach($name_value_list as $value){
        $GLOBALS['log']->debug($value['name']." : ".$value['value']);
		$seed->$value['name'] = $value['value'];
	}
	if(! $seed->ACLAccess('Save') || ($seed->deleted == 1  &&  !$seed->ACLAccess('Delete')))
	{
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
        $seed->assigned_user_id=$current_user->id;
        
        $path="custom/include/clases/varios/WebServiceHelpers.php";
        if (file_exists($path)){
            
            include_once $path;
            
            $helper=new WebServiceHelpers();
            $id=$helper->validaEmail($email);
            $path_historico="custom/include/clases/varios/Historico/HistoricoModelo.php"; 
            $GLOBALS['log']->fatal($path_historico);
            if(file_exists($path_historico)){
                include_once $path_historico;
                $GLOBALS['log']->fatal("Ingreso a path_historico");
                $historico=new HistoricoModelo();
                $historico->setBeanModule($module_name);
                $historico->setDateCreated(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setDateModified(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setDeleted(0);
                $historico->setFecha(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setModifiedUserId($current_user->id);
                $historico->setOrigen($seed->medioingreso);
                $historico->setDatos(json_encode($name_value_list));
                $GLOBALS['log']->fatal("Ingreso a historico");
            }
            $GLOBALS['log']->fatal("despues de historico");
            if ((strlen($id)>0)&&(!empty($id))){
                $GLOBALS['log']->fatal("existe");
                $historico->setParentId($id);
                $historico->save();
            }else{
                $GLOBALS['log']->fatal("no existe");
                $seed->save();
                $historico->setParentId($seed->id);
                $historico->save();
            }
        }
	
	if($seed->deleted == 1){
			$seed->mark_deleted($seed->id);
	}
	return array('id'=>$seed->id, 'error'=>$error->get_soap_array());

}

$server->register(
    'set_entry_documentos',
    array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'name_value_list'=>'tns:name_value_list'),
    array('return'=>'tns:set_entry_result'),
    $NAMESPACE);


function set_entry_documentos($session,$module_name,$name_value_list) {
    	global  $beanList, $beanFiles;
        
	$error = new SoapError();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'write')){
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}

	$class_name = $beanList[$module_name];
	require_once($beanFiles[$class_name]);
	$seed = new $class_name();

	foreach($name_value_list as $value){
        if($value['name'] == 'id' && isset($value['value']) && strlen($value['value']) > 0){
	    $result = $seed->retrieve($value['value']);
            //bug: 44680 - check to ensure the user has access before proceeding.
            if(is_null($result))
            {
                $error->set_error('no_access');
		        return array('id'=>-1, 'error'=>$error->get_soap_array());
            }
            else
            {
                break;
            }

		}
	}
	foreach($name_value_list as $value){
        $GLOBALS['log']->debug($value['name']." : ".$value['value']);
		$seed->$value['name'] = $value['value'];
	}
	if(! $seed->ACLAccess('Save') || ($seed->deleted == 1  &&  !$seed->ACLAccess('Delete')))
	{
		$error->set_error('no_access');
		return array('id'=>-1, 'error'=>$error->get_soap_array());
	}
        $seed->assigned_user_id=$current_user->id;
        
        
            $path_historico="custom/include/clases/varios/Historico/HistoricoModelo.php"; 
        
            if(file_exists($path_historico)){
                include_once $path_historico;
                $GLOBALS['log']->fatal("Ingreso a path_historico");
                $historico=new HistoricoModelo();
                $historico->setBeanModule($module_name);
                $historico->setDateCreated(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setDateModified(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setDeleted(0);
                $historico->setFecha(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
                $historico->setModifiedUserId($current_user->id);
                $historico->setOrigen("outlook");
                $historico->setDatos(json_encode($name_value_list));
                $GLOBALS['log']->fatal("Ingreso a historico");
                $seed->save();
                $historico->setParentId($seed->id);
                $historico->save();
            
            }
        if($seed->deleted == 1){
			$seed->mark_deleted($seed->id);
	}
	return array('id'=>$seed->id, 'error'=>$error->get_soap_array());

}




$server->register(
    'set_relationship_v2',
    
    array('session'=>'xsd:string',
          'module_name'=>'xsd:string','module_id'=>'xsd:string',
          'link_field_name'=>'xsd:string', 'related_ids'=>'tns:select_fields'),
        array('return'=>'tns:error_value'),
    $NAMESPACE);
//$this->serviceClass->registerFunction(
//		    'set_relationship',
//		    array('session'=>'xsd:string','module_name'=>'xsd:string','module_id'=>'xsd:string','link_field_name'=>'xsd:string', 'related_ids'=>'tns:select_fields', 'name_value_list'=>'tns:name_value_list', 'delete'=>'xsd:int'),
//		    array('return'=>'tns:new_set_relationship_list_result'));
/**
 * Set a single relationship between two beans.  The items are related by module name and id.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- name of the module that the primary record is from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param String $module_id - The ID of the bean in the specified module_name
 * @param String link_field_name -- name of the link field which relates to the other module for which the relationship needs to be generated.
 * @param array related_ids -- array of related record ids for which relationships needs to be generated
 * @param array $name_value_list -- The keys of the array are the SugarBean attributes, the values of 
 *                                  the array are the values the attributes should have.
 * @param integer $delete -- Optional, if the value 0 or nothing is passed then it will add the relationship for related_ids and if 1 is passed, it will delete this relationship for related_ids
 * @return Array - created - integer - How many relationships has been created
 *               - failed - integer - How many relationsip creation failed
 * 				 - deleted - integer - How many relationships were deleted
 * @exception 'SoapFault' -- The SOAP error, if any
 */
function set_relationship_v2($session, $module_name, $module_id, $link_field_name, $related_ids){
	$GLOBALS['log']->fatal('Begin: relaciones');
//        $GLOBALS['log']->fatal('Modulo 1'.$module_name);
//    $GLOBALS['log']->fatal('array = '.$related_ids[0]);
//    $GLOBALS['log']->fatal('id 1'.$module_id);
//    $GLOBALS['log']->fatal('id 2'.$link_field_name);
	$error = new SoapError();
	

        if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return $error->get_soap_array();
	}
	$count = 0;
	$deletedCount = 0;
	$failed = 0;
	$deleted = 0;
	
	

	
	if (new_handle_set_relationship($module_name, $module_id, $link_field_name, $related_ids)) {
		if ($deleted) {
			$deletedCount++;
		} else {
			$count++;
		}
	} else {
		$failed++;
	} // else
	//$GLOBALS['log']->info('End: SugarWebServiceImpl->set_relationship');
	return array('created'=>$count , 'failed'=>$failed, 'deleted' => $deletedCount);
}

$server->register(
    'get_entries_bymail',
    array('session'=>'xsd:string', 
          'module_name'=>'xsd:string', 'ids'=>'tns:select_fields', 
          'select_fields'=>'tns:select_fields','email'=>'xsd:string'),
    array('return'=>'tns:get_entry_result'),
    $NAMESPACE);

/**
 * Retrieve a list of SugarBean's based on provided IDs.
 *
 * @param String $session -- Session ID returned by a previous call to login.
 * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
 * @param Array $ids -- An array of SugarBean IDs.
 * @param Array $select_fields -- A list of the fields to be included in the results. This optional parameter allows for only needed fields to be retrieved.
 * @return Array 'field_list' -- Var def information about the returned fields
 *               'entry_list' -- The records that were retrieved
 *               'error' -- The SOAP error, if any
 */
function get_entries_bymail($session, $module_name, $ids,$select_fields,$email ){
	global  $beanList, $beanFiles;
	$error = new SoapError();
	$field_list = array();
	$output_list = array();
	if(!validate_authenticated($session)){
		$error->set_error('invalid_login');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
        $using_cp = false;
        if($module_name == 'CampaignProspects'){
            $module_name = 'Prospects';
            $using_cp = true;
        }
	if(empty($beanList[$module_name])){
		$error->set_error('no_module');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}
	global $current_user;
	if(!check_modules_access($current_user, $module_name, 'read')){
		$error->set_error('no_access');
		return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
	}

        $path="custom/include/clases/varios/WebServiceHelpers.php";
        if (file_exists($path)){
            
            include_once $path;
            
            $helper=new WebServiceHelpers();
            $ids=$helper->buscarAplicaciones($email);
        }
        $GLOBALS['log']->fatal("ids");
	$class_name = $beanList[$module_name];
        $GLOBALS['log']->fatal($class_name);
	require_once($beanFiles[$class_name]);
	//todo can modify in there to call bean->get_list($order_by, $where, 0, -1, -1, $deleted);
	//that way we do not have to call retrieve for each bean
	//perhaps also add a select_fields to this, so we only get the fields we need
	//and not do a select *
	if(is_array($ids)&& count($ids)>0){
            foreach($ids as $id){
                $GLOBALS['log']->fatal($id);
		$seed = new $class_name();

                if($using_cp){
                    $seed = $seed->retrieveTarget($id);
                }else{
                            if ($seed->retrieve($id) == null)
                                    $seed->deleted = 1;
                }

                if ($seed->deleted == 1) {
                    $list = array();
                    $list[] = array('name'=>'warning', 'value'=>'Access to this object is denied since it has been deleted or does not exist');
                            $list[] = array('name'=>'deleted', 'value'=>'1');
                    $output_list[] = Array('id'=>$id,
                                                                            'module_name'=> $module_name,
                                                                    'name_value_list'=>$list,
                                                                    );
                            continue;
                }
                    if(! $seed->ACLAccess('DetailView')){
                            $error->set_error('no_access');
                            return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
                    }
		$output_list[] = get_return_value($seed, $module_name);
                $GLOBALS['log']->fatal($output_list);
		if(empty($field_list)){
				$field_list = get_field_list($seed);

		}
            }
        }else{
            $GLOBALS['log']->fatal("Valores vacios");   
        
        }
        
	$output_list = filter_return_list($output_list, $select_fields, $module_name);
	$field_list = filter_field_list($field_list,$select_fields, $module_name);
        $GLOBALS['log']->fatal("2  ".$output_list);
	return array( 'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());
}

?>
