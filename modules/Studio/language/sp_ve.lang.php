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
 * $Id: sp_ve.lang.php,v 2.1 2012/02/08 20:10:29 carlose Exp $
 * Source: SugarCRM 6.4
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/


$mod_strings = array (
'LBL_EDIT_LAYOUT'=>'Editar diseño',
'LBL_EDIT_ROWS'=>'Editar filas',
'LBL_EDIT_COLUMNS'=>'Editar columnas',
'LBL_EDIT_LABELS'=>'Editar etiquetas',
'LBL_EDIT_FIELDS'=>'Editar campos personalizados',
'LBL_ADD_FIELDS'=>'Agregar campos personalizados',
'LBL_DISPLAY_HTML'=>'Mostrar código HTML',
'LBL_SELECT_FILE'=> 'Seleccionar archivo',
'LBL_SAVE_LAYOUT'=> 'Guardar diseño',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un subpanel',
'LBL_SELECT_SUBPANEL' => 'Seleccionar subpanel',
'LBL_MODULE_TITLE' => 'Estudio',
'LBL_TOOLBOX' => 'Caja de herramientas',
'LBL_STAGING_AREA' => 'Área de diseño (arrastre y suelte elementos aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Ver papelera Sugar', 
'LBL_FAILED_TO_SAVE' => 'Error al Guardar',
'LBL_CONFIRM_UNSAVE' => 'Los cambios no se han guardado y se perderán. ¿Está seguro de continuar?',
'LBL_PUBLISHING' => 'Publicando ...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_DROP_HERE' => '[Soltar Aquí]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nombre',
'LBL_LABEL'=>'Etiqueta',
'LBL_MASS_UPDATE'=>'Actualización Masiva',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor por omisión',
'LBL_REQUIRED'=>'Requerido',
'LBL_DATA_TYPE'=>'Tipo',


'LBL_HISTORY'=>'Historial',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>¡Bienvenido al Estudio!</h2><br> ¿Qué desea hacer hoy?<br><b> Por favor, seleccione una de las siguientes opciones.</b>',
'LBL_SW_EDIT_MODULE'=>'Editar un Módulo',
'LBL_SW_EDIT_DROPDOWNS'=>'Editar Listas Desplegables',
'LBL_SW_EDIT_TABS'=>'Configurar Pestañas',
'LBL_SW_RENAME_TABS'=>'Renombrar módulos',
'LBL_SW_EDIT_GROUPTABS'=>'Configurar Grupos de módulos',
'LBL_SW_EDIT_PORTAL'=>'Editar Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Editar Flujo de Trabajo',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparar Campos Personalizados',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrar Campos Personalizados',

//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>¡Bienvenido al Estudio!</h2><br><b>Por favor, seleccione uno de los siguientes módulos.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editar un Módulo</h2>¿Qué desea hacer con ese módulo?<br><b>Por favor, seleccione la acción que desea realizar.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editar Campos Personalizados',
'LBL_SMA_EDIT_LAYOUT'=>'Editar Diseño',
'LBL_SMA_EDIT_LABELS' =>'Editar Etiquetas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_WELCOME'=> '<h2>Historial</h2><br> El Historial le permite ver ediciones publicadas anteriormente del archivo con el que está trabajando. Puede comparar con o restaurar versiones previas. Si restaura un archivo, éste se convertirá en su archivo de trabajo. Debe publicarlo antes de que sea visible para cualquier otra persona.<br> ¿Qué desea hacer?<br><b> Por favor, seleccione una de las siguientes opciones.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Crea una Lista Desplegable',
'LBL_ED_WELCOME'=>'<h2>Editor de Listas Desplegables</h2><br><b>Puede editar una lista desplegable existente, o crear una nueva.',
'LBL_DROPDOWN_NAME' => 'Nombre de Lista Desplegable:',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma de Lista Desplegable:',
'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Editor de Campos Personalizados</h2><br><b>Puede ver o editar un campo personalizado existente, crear un nuevo campo personalizado, o limpiar la caché de campos personalizados.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Ver Campos Personalizados',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Crear Campo Personalizado',
'LBL_EC_CLEAR_CACHE'=>'Limpiar Caché',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historial</h2><br><b>Por favor, seleccione el archivo que desea visualizar.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Valor de Visualización',
'LBL_DD_DATABASEVALUE'=>'Valor de Base de datos',
'LBL_DD_ALL'=>'Todo',

//BUTTONS
'LBL_BTN_SAVE'=>'Guardar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar y Publicar',
'LBL_BTN_HISTORY'=>'Historial',
'LBL_BTN_NEXT'=>'Siguiente',
'LBL_BTN_BACK'=>'Atrás',
'LBL_BTN_ADDCOLS'=>'Agregar Columnas',
'LBL_BTN_ADDROWS'=>'Agregar Filas',
'LBL_BTN_UNDO'=>'Deshacer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Campo Personalizado',
'LBL_BTN_TABINDEX'=>'Editar Orden de Pestañas',

//TABS
'LBL_TAB_SUBTABS'=>'Subpestañas',
'LBL_MODULES'=>'Módulos',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administración',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurar filtros del menú módulos',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Los siguientes filtros serán mostrados en el menú de módulos para que los usuarios los vean agrupados. Arrastre y suelte módulos desde y hacia los filtros. Nota: Los filtros vacíos no serán mostrados en el menú.',
'LBL_RENAME_TAB_WELCOME'=>'Haga clic en Valor de Visualización para cambiar el nombre de cualquier pestaña de la siguiente tabla.',
'LBL_DELETE_MODULE'=>'Quitar&nbsp;Módulo<br />del&nbsp;filtro',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Seleccione mostrar la pestaña "Otros" en la barra de navegación.  Por omisión, la pestaña "Otros" muestra aquellos módulos que aún no se han incluido en ningún grupo.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Seleccione un idioma de los disponibles, edite las etiquetas del Grupo y haga clic en Guardar e Implantar para aplicar las etiquetas en el idioma seleccionado.',
'LBL_ADD_GROUP'=>'Agregar filtro',
'LBL_NEW_GROUP'=>'Nuevo Grupo',
'LBL_RENAME_TABS'=>'Renombrar módulos',
'LBL_DISPLAY_OTHER_TAB' => 'Mostrar Pestaña \'Otros\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Por omisión',
'LBL_ADDITIONAL'=>'Adicional',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuación se muestran tres columnas. La columna "Por omisión" contiene los campos que se muestran por defecto en una lista, la columna "Adicional" contiene campos que un usuario puede elegir a la hora de crear una vista personalizada y la columna "Disponible" muestra columnas que, usted como administrador, puede o bien añadirlas a las columnas por omisión, o a las adicionales para que sean usadas por los usuarios.', 
'LBL_LISTVIEW_EDIT'=>'Editor de Listas',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Campo ya existente',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de clave no válido: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal de Sugar',
'LBL_SMP_WELCOME'=>' Por favor, seleccione el módulo que desea editar de la siguiente lista',
'LBL_SP_WELCOME'=>'Bienvenido al Estudio para el Portal de Sugar. Puede elegir editar módulos aquí, o realizar una sincronización con una instancia de portal.<br> Por favor, selecciónelo de la siguiente lista.',
'LBL_SP_SYNC'=>'Sincronización de Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, introduzca el URL de la instancia de portal que desea actualizar y haga clic en el botón Ir.<br> Tras esto, se le pedirá su nombre y contraseña.<br> Por favor, introduzca su nombre y contraseña de Sugar y haga clic en el botón Iniciar Sincronización.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Tiene dos columnas a continuación: Por omisión, que incluye los campos que se mostrarán, y Disponible, que incluye los campos que no se mostrarán, pero que están disponibles para ser mostrados. Simplemente tiene que arrastrar los campos entre ambas columnas. También puede cambiar el orden de los elementos en una columna arrastrándolos y soltándolos.',
'LBL_SP_STYLESHEET'=>'Subir una Hoja de Estilo',
'LBL_SP_UPLOADSTYLE'=>'Haga clic en el botón de exploración y seleccione la hoja de estilo que desea subir desde su computador.<br> La próxima vez que realice una sincronización al portal, se incluirá la hoja de estilo.',
'LBL_SP_UPLOADED'=> 'Subido',
'ERROR_SP_UPLOADED'=>'Por favor, asegúrese de que está subiendo una hoja de estilo CSS.',
'LBL_SP_PREVIEW'=>'Aquí tiene una presentación preliminar de la apariencia que tendrá su hoja de estilo',

	'LBL_SAVE' => 'Guardar' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Deshacer' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Rehacer' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Borrar' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Agregar campo' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Agregar filas' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Agregar campo' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Seleccione el idioma a editar.',
'LBL_SINGULAR' => 'Etiqueta en singular',
'LBL_PLURAL' => 'Etiqueta en plural',
'LBL_RENAME_MOD_SAVE_HELP' => 'Clic <b>Guardar</b> para aplicar los cambios.'
);
?>
