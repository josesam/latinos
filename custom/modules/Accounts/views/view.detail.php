<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class AccountsViewDetail extends ViewDetail {

 	function AccountsViewDetail(){
 		parent::ViewDetail();
 		$this->useForSubpanel = true;
 	}

        function  display() {
            global $app_list_strings;
            echo ' <link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
                
                    ';
 		 if(file_exists('custom/include/clases/popups/modules/Accounts/popworkflowView.php')){
                    include_once 'custom/include/clases/popups/modules/Accounts/popworkflowView.php';
                 }
                  if(file_exists('custom/include/clases/popups/modules/Accounts/popreagendar.php')){
                    include_once 'custom/include/clases/popups/modules/Accounts/popreagendar.php';
                 }
             //$this->bean->status=$app_list_strings['estatus_dom'][$this->bean->status];    
             
             parent::display();
    }


        function  _displaySubPanels() {           
            

           require_once ('include/SubPanel/SubPanelTiles.php');
           $subpanel = new SubPanelTiles($this->bean, $this->module);
//         
           $subpanel->subpanel_definitions->layout_defs['subpanel_setup']['opportunities']['top_buttons'][0]['widget_class']='SubPanelTopCreateButton';
           unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['accounts']);
           unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['contacts']);
          unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['campaigns']);
           unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['documents']);

	   echo $subpanel->display();
          
        }

}
