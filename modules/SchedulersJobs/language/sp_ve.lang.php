<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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
/**
 * Description:  Defines Spanish latam language pack for the base application.
 * $Id: sp_ve.lang.php,v 1.9 2012/06/25 16:20:29 carlose Exp $
 * Source: SugarCRM 6.5
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
'LBL_NAME' => 'Nombre de tarea',
'LBL_EXECUTE_TIME'	=> 'Hora ejecución',
'LBL_SCHEDULER_ID' 	=> 'Programador',
'LBL_STATUS' 	=> 'Status tarea',
'LBL_RESOLUTION' 	=> 'Resultado',
'LBL_MESSAGE' 	=> 'Mensajes',
'LBL_DATA' 	=> 'Datos de tarea',
'LBL_REQUEUE' 	=> 'Reintentar si falla',
'LBL_RETRY_COUNT' 	=> 'Máximo de reintentos',
'LBL_FAIL_COUNT' 	=> 'Fallas',
'LBL_INTERVAL' 	=> 'Intervalo mínimo entre intentos',
'LBL_CLIENT' 	=> 'Propietario',
'LBL_PERCENT'	=> 'Porcentaje completado',
// Errors
'ERR_CALL' 	=> "No se pudo llamar la función: %s",
'ERR_CURL' => "No CURL - no se puede ejecutar tareas URL",
'ERR_FAILED' => "Falla inesperada, revise los eventos de PHP y sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s en %s en la línea %d",
'ERR_NOUSER' => "No se especifica ID de usuario para la tarea",
'ERR_NOSUCHUSER' => "No se encontró ID de usuario %s",
'ERR_JOBTYPE' 	=> "Tipo de trabajo desconocido: %s",
'ERR_TIMEOUT' => "Falla forzada por exceder tiempo",
'ERR_JOB_FAILED_VERBOSE' => 'Tarea %1$s (%2$s) falló en el CRON',
);

?>
