<?php

class AdministrationController extends SugarController{
    
    function action_Ciudad(){
        $this->view='ciudad';
    }
    public function action_savetabs()
    {
        require_once('include/SubPanel/SubPanelDefinitions.php');
        require_once('modules/MySettings/TabController.php');


        global $current_user, $app_strings;

        if (!is_admin($current_user)) sugar_die($app_strings['ERR_NOT_ADMIN']);

        // handle the tabs listing
        $toDecode = html_entity_decode  ($_REQUEST['enabled_tabs'], ENT_QUOTES);
        $enabled_tabs = json_decode($toDecode);
        $tabs = new TabController();
        $tabs->set_system_tabs($enabled_tabs);
        $tabs->set_users_can_edit(isset($_REQUEST['user_edit_tabs']) && $_REQUEST['user_edit_tabs'] == 1);

        // handle the subpanels
        if(isset($_REQUEST['disabled_tabs'])) {
            $disabledTabs = json_decode(html_entity_decode($_REQUEST['disabled_tabs'], ENT_QUOTES));
            $disabledTabsKeyArray = TabController::get_key_array($disabledTabs);
            SubPanelDefinitions::set_hidden_subpanels($disabledTabsKeyArray);
        }

        header("Location: index.php?module=Administration&action=ConfigureTabs");
    }

    public function action_savelanguages()
    {
        global $sugar_config;
        $toDecode = html_entity_decode  ($_REQUEST['disabled_langs'], ENT_QUOTES);
        $disabled_langs = json_decode($toDecode);
        $toDecode = html_entity_decode  ($_REQUEST['enabled_langs'], ENT_QUOTES);
        $enabled_langs = json_decode($toDecode);
        $cfg = new Configurator();
        $cfg->config['disabled_languages'] = join(',', $disabled_langs);
        // TODO: find way to enforce order
        $cfg->handleOverride();
        header("Location: index.php?module=Administration&action=Languages");
    }

    public function action_updatewirelessenabledmodules()
    {
        require_once('modules/Administration/Forms.php');

        global $app_strings, $current_user, $moduleList;

        if (!is_admin($current_user)) sugar_die($app_strings['ERR_NOT_ADMIN']);

        require_once('modules/Configurator/Configurator.php');
        $configurator = new Configurator();
        $configurator->saveConfig();

        if ( isset( $_REQUEST['enabled_modules'] ) && ! empty ($_REQUEST['enabled_modules'] ))
        {
            $updated_enabled_modules = array () ;
            foreach ( explode (',', $_REQUEST['enabled_modules'] ) as $e )
            {
                $updated_enabled_modules [ $e ] = array () ;
            }

            // transfer across any pre-existing definitions for the enabled modules from the current module registry
            if (file_exists('include/MVC/Controller/wireless_module_registry.php'))
            {
                require('include/MVC/Controller/wireless_module_registry.php');
                if ( ! empty ( $wireless_module_registry ) )
                {
                    foreach ( $updated_enabled_modules as $e => $def )
                    {
                        if ( isset ( $wireless_module_registry [ $e ] ) )
                        {
                            $updated_enabled_modules [ $e ] = $wireless_module_registry [ $e ] ;
                        }

                    }
                }
            }

            $filename = 'custom/include/MVC/Controller/wireless_module_registry.php' ;

            mkdir_recursive ( dirname ( $filename ) ) ;
            write_array_to_file ( 'wireless_module_registry', $updated_enabled_modules, $filename );
            foreach($moduleList as $mod){
                sugar_cache_clear("CONTROLLER_wireless_module_registry_$mod");
            }
            //Users doesn't appear in the normal module list, but its value is cached on login.
            sugar_cache_clear("CONTROLLER_wireless_module_registry_Users");
            sugar_cache_reset();
        }

        echo "true";
    }


    /**
     * action_saveglobalsearchsettings
     *
     * This method handles saving the selected modules to display in the Global Search Settings.
     * It instantiates an instance of UnifiedSearchAdvanced and then calls the saveGlobalSearchSettings
     * method.
     *
     */
    public function action_saveglobalsearchsettings()
    {
		 global $current_user, $app_strings;

		 if (!is_admin($current_user))
		 {
		     sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
		 }

    	 try {
	    	 require_once('modules/Home/UnifiedSearchAdvanced.php');
	    	 $unifiedSearchAdvanced = new UnifiedSearchAdvanced();
	    	 $unifiedSearchAdvanced->saveGlobalSearchSettings();
	    	 echo "true";
    	 } catch (Exception $ex) {
    	 	 echo "false";
    	 }
    }

    public function action_UpdateAjaxUI()
    {
        require_once('modules/Configurator/Configurator.php');
        $cfg = new Configurator();
        $disabled = json_decode(html_entity_decode  ($_REQUEST['disabled_modules'], ENT_QUOTES));
        $cfg->config['addAjaxBannedModules'] = empty($disabled) ? FALSE : $disabled;
        $cfg->handleOverride();
        $this->view = "configureajaxui";
    }


    /*
     * action_callRebuildSprites
     *
     * This method is responsible for actually running the SugarSpriteBuilder class to rebuild the sprites.
     * It is called from the ajax request issued by RebuildSprites.php.
     */
    public function action_callRebuildSprites()
    {
        global $current_user;
        $this->view = 'ajax';
        if(function_exists('imagecreatetruecolor'))
        {
            if(is_admin($current_user))
            {
                require_once('modules/UpgradeWizard/uw_utils.php');
                rebuildSprites(false);
            }
        } else {
            echo $mod_strings['LBL_SPRITES_NOT_SUPPORTED'];
            $GLOBALS['log']->error($mod_strings['LBL_SPRITES_NOT_SUPPORTED']);
        }
    }
}
?>
