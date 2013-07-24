<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
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
 * $Id: sp_ve.lang.php,v 1.8 2010/06/29 10:20:29 carlose Exp $
 * Source: SugarCRM 6.0
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Informes gerenciales',
  'LBL_MODULE_TITLE' => 'Informes gerenciales',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar informes gerenciales',
  'LBL_LIST_FORM_TITLE' => 'Listar informes gerenciales',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_QUERY_NAME' => 'Consulta',
  'LBL_LIST_PUBLISHED' => 'Publicado',
  'LBL_LIST_SCHEDULED' => 'Planificado',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_LIST_MODULE_TITLE' => 'Módulo',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_PARENT_DATASET' => 'Conjunto de Datos Padre:',
  'LBL_QUERY_NAME' => 'Nombre de Consulta:',
  'LBL_TYPE' => 'Tipo de Informe:',
  'LBL_SCHEDULED' => 'Planificar Informe:',
  'LBL_PUBLISHED' => 'Publicar Informe:',
  'LBL_NAME' => 'Nombre de Informe:',
  'LBL_TITLE' => 'Título de Informe:',
  'LBL_TABLE_WIDTH' => 'Ancho de Tabla %:',
  'LBL_TABLE_HEIGHT' => 'Altura de Tabla %:',
  'LBL_FONT_SIZE' => 'Tamaño de Fuente:',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_CURRENCY' => 'Moneda:',
  'LNK_LIST_REPORTMAKER' => 'Lista de Informes gerenciales',
  'LNK_NEW_REPORTMAKER' => 'Crear Informe',
  'LNK_LIST_DATASET' => 'Lista de Formatos de Datos',
  'LNK_NEW_DATASET' => 'Crear Formato de Datos',
  'LNK_NEW_CUSTOMQUERY' => 'Crear Consulta Personalizada',
  'LNK_CUSTOMQUERIES' => 'Consultas Personalizadas',
  'LNK_NEW_QUERYBUILDER' => 'Crear Consulta',
  'LNK_QUERYBUILDER' => 'Diseñador de Consultas',
  'LNK_ADVANCED_REPORTING' => 'Informes gerenciales',
  'LBL_ALL_REPORTS' => 'Todos los Informes',
  'LBL_ADD_DATA_SET' => 'Agregar un nuevo Conjunto de Datos',
  'LBL_EDIT_DATA_SET' => 'Actualizar Conjunto de Datos',
  'LBL_DATA_SET' => 'Conjunto de Datos:',
  'LBL_LIST_ORDER_Y' => 'Posicionamiento Vertical:',
  'LBL_LIST_ORDER_X' => 'Posicionamiento Horizontal:',
  'LBL_REPORT_ALIGN' => 'Alineación del Informe:',
  'LBL_ADD_BUTTON_TITLE' => 'Seleccionar [Alt+A]',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_LABEL' => 'Seleccionar',
  'LBL_NEW_BUTTON_TITLE' => 'Agregar [Alt+N]',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Crear Nuevo',
  'LBL_DETAILS_BUTTON_TITLE' => 'Detalles del Informe [Alt+D]',
  'LBL_DETAILS_BUTTON_KEY' => 'D',
  'LBL_DETAILS_BUTTON_LABEL' => 'Detalles del Informe',
  'LBL_EDIT_BUTTON_TITLE' => 'Editar Informe [Alt+E]',
  'LBL_EDIT_BUTTON_KEY' => 'N',
  'LBL_EDIT_BUTTON_LABEL' => 'edit',
  //for subpanel under the reports
  'LBL_RUN_BUTTON_TITLE' => 'Ejecutar Informe [Alt+R]',
  'LBL_RUN_BUTTON_KEY' => 'R',
  'LBL_RUN_BUTTON_LABEL' => 'Ejecutar Informe',
  'LNK_UP' => 'Arriba',
  'LNK_DOWN' => 'Abajo',
  'LBL_NONE' => 'Sin planificar',
  'LBL_SCHEDULE_EMAIL' => 'Planificado',
  'LBL_HELLO' => 'Hola',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Adjunto se encuentra un informe autogenerado enviado a usted desde la aplicación Sugar. Este informe se creó el ',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => ' y se guardó con el nombre "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Si desea cambiar la configuración de sus informes, inicie la sesión en la aplicación Sugar y haga clic en la pestaña "Informes".\n\n',
);


?>
