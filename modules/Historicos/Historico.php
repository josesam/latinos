<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Historico extends Basic{
    	
	// Stored fields
	var $date_created;
	var $date_modified;
	var $origen;
	var $fecha;
	var $bean_module;
	var $parent_id;
	var $module_dir = 'Historicos';
	var $modified_user_id;


	var $table_name = "historico";
	var $object_name = "Historico";
	var $importable = true;
	var $new_schema = true;
        function Historico(){
            parent::Basic();
        }
        
        function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = false, $ifListForExport = false){
           $ret_array['select']=" Select  historico.origen name, historico.fecha date_entered, historico.datos description";
           $ret_array['from']=" from historico ";
           $ret_array['from_min']=" from historico ";
           $ret_array['where']=" where(".$where.") and historico.deleted=0";
           return  $ret_array;;
        }
    
}
?>
