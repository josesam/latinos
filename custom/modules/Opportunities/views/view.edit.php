<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


class OpportunitiesViewEdit extends ViewEdit
{
 	public function __construct()
 	{
 		parent::ViewEdit();
 		$this->useForSubpanel = false;
 		$this->useModuleQuickCreateTemplate = false;
 	}
        function display() {
        
            echo '

               <link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
               <link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />
               ';
echo '<div id="institucion_dlg" style="display:none;">
<div id="institucion_div"></div>
</div>';
             if(file_exists('custom/include/clases/popups/EtapasPopup.php'))
                include_once 'custom/include/clases/popups/EtapasPopup.php';
             
            
             
             if(!empty($this->bean->id)){
                if (file_exists('custom/include/clases/varios/ManejoEtapasVenta.php')){
                    include_once('custom/include/clases/varios/ManejoEtapasVenta.php');
                  //  var_dump($this->bean->sales_stage);
                    $manejo=new ManejoEtapasVenta($this->bean->sales_stage);
                    $this->bean->sales_stage=$manejo->prepareEditField($this->bean->sales_stage);
                }
            }
            if(empty($this->bean->id)){
                $idAlumno = $_REQUEST['account_id'];
            }else
                $idAlumno = $this->bean->account_id;
            
            include_once('custom/include/clases/varios/Clientes.php');
            $estudiante = new Clientes();
            $fechaNacimiento = $estudiante->fechaNacimiento($idAlumno);
            
            global $current_user;
            // Instantiate the TimeDate Class
            $timeDate = new TimeDate();
            
            
            $this->bean->fecha_nacimiento_ndb=$timeDate->to_display_date($fechaNacimiento, true, true, $current_user);;
            parent::display();
                          
             

 	}

        

}