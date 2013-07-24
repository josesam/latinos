<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


    $admin_option_defs=array();
    
    $admin_option_defs['PARAMETROS']['Catalogos']= array('Catalogos Generales','LBL_CATALOGOS','LBL_CATALOGOS','./index.php?module=Administration&action=catalogo');
    $admin_option_defs['PARAMETROS']['Alertas']= array('Alertas','LBL_ALERTAS','LBL_ALERTAS','./index.php?module=Administration&action=alertas');
    
    $admin_group_header[]= array('LBL_CATALOGO_SISTEMA','',false,$admin_option_defs, 'LBL_CATALOGO_SISTEMA');





?>