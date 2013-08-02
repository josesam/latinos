<?php 
 //WARNING: The contents of this file are auto-generated


global $mod_strings, $app_strings, $sugar_config;

$module_menu = Array();
if(ACLController::checkAccess('Documents', 'edit', true))$module_menu[]=Array("index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView", $mod_strings['LNK_NEW_DOCUMENT'],"CreateDocuments");
if(ACLController::checkAccess('Documents', 'list', true))$module_menu[]=Array("index.php?module=Documents&action=index", $mod_strings['LNK_DOCUMENT_LIST'],"Documents");
if(ACLController::checkAccess('Documents', 'edit', true)){
	
	$admin = new Administration();
	$admin->retrieveSettings();
	$user_merge = $current_user->getPreference('mailmerge_on');
	if ($user_merge == 'on' && isset($admin->settings['system_mailmerge_on']) && $admin->settings['system_mailmerge_on']){
		$module_menu[]=Array("index.php?module=MailMerge&action=index&reset=true", $mod_strings['LNK_NEW_MAIL_MERGE'],"Documents");
	}
}
if(ACLController::checkAccess('Documents', 'edit', true))
	$module_menu[] = array(
		"index.php?module=Documents&action=file_tree",
		"Visor Documentos","CampaignsWizard"
	);

?>