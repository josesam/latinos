<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
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
 * $Id: sp_ve.lang.php,v 2.0 2012/08/12 19:20:29 carlose Exp $
 * Source: SugarCRM 6.5.2
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'	=> 'Los siguientes módulos han sido instalados:',
	'DESC_MODULES_QUEUED'		=> 'Los siguientes módulos están listos para ser instalados:',
	
	'ERR_UW_CANNOT_DETERMINE_GROUP'		=> 'No se ha podido determinar el Grupo',
	'ERR_UW_CANNOT_DETERMINE_USER'		=> 'No se ha podido determinar el Propietario',
	'ERR_UW_CONFIG_WRITE'			=> 'Error al actualizar config.php con la información de la nueva versión.',
	'ERR_UW_CONFIG'				=> 'Por favor, asigne permisos de escritura para su archivo config.php, y recargue esta página.',
	'ERR_UW_DIR_NOT_WRITABLE'	=> 'Directorio no tiene permiso de escritura',
	'ERR_UW_FILE_NOT_COPIED'	=> 'Archivo no copiado',
	'ERR_UW_FILE_NOT_DELETED'	=> 'Problema al quitar el paquete ',
	'ERR_UW_FILE_NOT_READABLE'	=> 'El archivo no ha podido ser leído.',
	'ERR_UW_FILE_NOT_WRITABLE'	=> 'El archivo no ha podido ser movido o escrito',
	'ERR_UW_FLAVOR_2'		=> 'Edición de la Actualización: ',
	'ERR_UW_FLAVOR'			=> 'Edición del Sistema SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'	=> './upgradeWizard.log no ha podido ser creado/escrito.  Por favor, corrija los permisos en su directorio de SugarCRM.', 
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'		=> 'mbstring.func_overload está establecido a un valor mayor que 1.  Por favor, modifique su archivo php.ini y reinicie su servidor web.', 
	'ERR_UW_MYSQL_VERSION'		=> 'SugarCRM requiere MySQL versión 4.1.2 o mayor.  Encontrada: ',
	'ERR_UW_OCI8_VERSION'	        => 'Su versión de Oracle no está soportada por Sugar. Necesitará instalar una versión compatible con la aplicación Sugar. Por favor, consulte la Matriz de Compatibilidad en las Notas de la Versión. Versión actual: ',
	'ERR_UW_NO_FILE_UPLOADED'	=> 'Por favor, especifique un archivo e inténtelo de nuevo',
	'ERR_UW_NO_FILES'		=> 'Ha ocurrido un error, no se han encontrado archivos para comprobar.',
	'ERR_UW_NO_MANIFEST'		=> 'El archivo zip no contiene un archivo manifest.php.  No se puede continuar.',
	'ERR_UW_NO_VIEW'		=> 'La vista especificada no es válida.',
	'ERR_UW_NO_VIEW2'		=> 'La vista no ha sido definida.  Por favor, vaya al inicio de Administración para navegar a esta página.',
	'ERR_UW_NOT_VALID_UPLOAD'	=> 'No es una subida de archivo válida.',
	'ERR_UW_NO_CREATE_TMP_DIR'	=> 'No ha podido crearse el directorio temporal. Compruebe los permisos.',
	'ERR_UW_ONLY_PATCHES'		=> 'Sólo puede subir parches en esta página.',
	'ERR_UW_PREFLIGHT_ERRORS'	=> 'Se han encontrado errores durante la comprobación previa',
	'ERR_UW_UPLOAD_ERR'		=> '¡Ha ocurrido un error al subir el archivo, por favor inténtelo de nuevo!<br>\n',
	'ERR_UW_VERSION'		=> 'Versión del Sistema SugarCRM: ',
	'ERR_UW_WRONG_TYPE'		=> 'Esta página no es para ejecutar ',
	'ERR_UW_PHP_FILE_ERRORS'	=> array(
						1 => 'El archivo subido excede el límite definido por la directiva upload_max_filesize en php.ini.',
						2 => 'El archivo subido excede el límite definido por la directiva MAX_FILE_SIZE especificada en el formulario HTML.',
						3 => 'El archivo ha sido subido parcialmente.',
						4 => 'No se ha subido ningún archivo.',
						5 => 'Error desconocido.',
						6 => 'Falta una carpeta temporal.',
						7 => 'Error al escribir el archivo.',
						8 => 'El archivo subido ha sido bloqueado debido a su extensión.',
						),
	
	'LBL_BUTTON_BACK'		=> '< Atrás',
	'LBL_BUTTON_CANCEL'		=> 'Cancelar',
	'LBL_BUTTON_DELETE'		=> 'Eliminar Paquete',
	'LBL_BUTTON_DONE'		=> 'Listo',
	'LBL_BUTTON_EXIT'		=> 'Salir',
	'LBL_BUTTON_INSTALL'		=> 'Inspección para Actualización',
	'LBL_BUTTON_NEXT'		=> 'Siguiente >',
	'LBL_BUTTON_RECHECK'		=> 'Comprobar de nuevo',
	'LBL_BUTTON_RESTART'		=> 'Reiniciar',
	'LBL_UPLOAD_UPGRADE'		=> 'Subir paquete de actualización ',
	'LBL_UPLOAD_FILE_NOT_FOUND'	=> 'Archivo de subida no encontrado',
												
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'	=> 'Copia de seguridad',
	'LBL_UW_BACKUP_FILES_EXIST'		=> 'La copia de seguridad de los archivos de esta actualización puede encontrarse en',
	'LBL_UW_BACKUP'			=> 'Copia de seguridad',
	'LBL_UW_CANCEL_DESC'		=> 'La Actualización ha sido cancelada.  Todos los archivos temporales y el archivo de la actualización han sido eliminados.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'	=> 'Cambios de Juego de Caracteres en el Esquema',
	'LBL_UW_CHECK_ALL'		=> 'Comprobar Todo',
	'LBL_UW_CHECKLIST'		=> 'Pasos de la Actualización',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'		=> "Las copias de seguridad de todos los archivos sobrescritos están en el siguiente directorio: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'		=> "Combinar manualmente los siguientes archivos:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'		=> 'Proceso de Actualización: Combinar Manualmente Archivos',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'	=> 'Por favor, utilice el método diff que le sea más familiar para combinar estos archivos.  Hasta que no haya completado este proceso, su instalación de SugarCRM estará en un estado inestable y la actualización incompleta.',
	'LBL_UW_COMPLETE'			=> 'Completado',
	'LBL_UW_CONTINUE_CONFIRMATION'		=> 'Esta versión de Sugar contiene un nuevo acuerdo de licencia. ¿Desea continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'		=> 'Todos los requerimientos del sistema han sido satisfechos',
	'LBL_UW_COMPLIANCE_CALLTIME'		=> 'Configuración de PHP: Paso por Referencia en Tiempo de LLamada',
	'LBL_UW_COMPLIANCE_CURL'		=> 'Módulo cURL',
	'LBL_UW_COMPLIANCE_IMAP'		=> 'Módulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'		=> 'Módulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parámetro mbstring.func_overload de MBStrings',
	'LBL_UW_COMPLIANCE_MEMORY'		=> 'Configuración de PHP: Límite de Memoria',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Configuración de PHP: Flujo',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'	=> 'MS SQL Server y PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'	=> 'Versión mínima de MySQL',
    'LBL_UW_COMPLIANCE_DB'              => 'Versión mínima base de datos',
	'LBL_UW_COMPLIANCE_PHP_INI'	=> 'Ruta de php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'	=> 'Versión mínima de PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'	=> 'Configuración de PHP: Modo Seguro',
	'LBL_UW_COMPLIANCE_TITLE'	=> 'Comprobación de configuración del servidor',
	'LBL_UW_COMPLIANCE_TITLE2'	=> 'Configuración detectada',
	'LBL_UW_COMPLIANCE_XML'		=> 'Análisis XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'	=> 'Soporte Zip',
	'LBL_UW_COPIED_FILES_TITLE'	=> 'Archivos copiados satisfactoriamente',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'	=> 'Cambios al esquema en tablas personalizadas',

	'LBL_UW_DB_CHOICE1'		=> 'El asistente de actualizaciones ejecutará el SQL',
	'LBL_UW_DB_CHOICE2'		=> 'Consultas de SQL lanzadas manualmente',
	'LBL_UW_DB_INSERT_FAILED'	=> 'Fallo en INSERT - los resultados comparados difieren',
	'LBL_UW_DB_ISSUES_PERMS'	=> 'Privilegios de base de datos',
	'LBL_UW_DB_ISSUES'		=> 'Problemas de base de datos',
	'LBL_UW_DB_METHOD'		=> 'Método de actualización en base de datos',
	'LBL_UW_DB_NO_ADD_COLUMN'	=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'	=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'		=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'		=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'	=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'	=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'		=> 'Todos los Privilegios Disponibles',
	'LBL_UW_DB_NO_INSERT'		=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'		=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'		=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'		=> 'Privilegio necesario',

	'LBL_UW_DESC_MODULES_INSTALLED'		=> 'Se han instalado los siguientes paquetes de actualización:',
	'LBL_UW_END_DESC'		=> 'Su sistema ha sido actualizado.',
	'LBL_UW_END_DESC2'		=> 'Si ha decidido ejecutar manualmente cualquier paso como combinaciones de archivos o consultas SQL, por favor hágalo ahora.  Su sistema estará en un estado inestable hasta que estos pasos se hayan completado.',
	'LBL_UW_END_LOGOUT_PRE'		=> 'La actualización está completa.',
	'LBL_UW_END_LOGOUT_PRE2'	=> 'Clic en Listo para salir del asistente.',
	'LBL_UW_END_LOGOUT'		=> 'Si planea aplicar otro paquete de actualización mediante el Asistente de Actualizaciones, antes cierre su sesión e ingrese nuevamente.',
	'LBL_UW_END_LOGOUT2'		=> 'Cerrar sesión',
	'LBL_UW_REPAIR_INDEX'		=> 'Para mejoras en el rendimiento de base de datos, por favor ejecute el <a href="index.php?module=Administration&action=RepairIndex" target="_blank">script de Reparación de Índices</a>.',	

	'LBL_UW_FILE_DELETED'		=> " ha sido eliminado.<br>",
	'LBL_UW_FILE_GROUP'		=> 'Grupo',
	'LBL_UW_FILE_ISSUES_PERMS'	=> 'Permisos de archivo',
	'LBL_UW_FILE_ISSUES'		=> 'Problemas con archivos',
	'LBL_UW_FILE_NEEDS_DIFF'	=> 'El archivo requiere un Diff manual',
	'LBL_UW_FILE_NO_ERRORS'		=> '<b>Todos los archivos tienen permiso de escritura</b>',
	'LBL_UW_FILE_OWNER'		=> 'Propietario',
	'LBL_UW_FILE_PERMS'		=> 'Permisos',
	'LBL_UW_FILE_UPLOADED'		=> ' ha sido subido',
	'LBL_UW_FILE'			=> 'Nombre de archivo',
	'LBL_UW_FILES_QUEUED'		=> 'Las siguientes actualizaciones están listas para ser instaladas:',
	'LBL_UW_FILES_REMOVED'		=> "Los siguientes archivos serán quitados del sistema:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'		=> "<b>Clic en Siguiente para subir paquetes de actualización.</b>",
	'LBL_UW_FROZEN'		=> 'Debe subir un paquete de actualización antes de continuar.',
	'LBL_UW_HIDE_DETAILS'	=> 'Ocultar Detalles',
	'LBL_UW_IN_PROGRESS'	=> 'En progreso',
	'LBL_UW_INCLUDING'	=> 'Incluyendo',
	'LBL_UW_INCOMPLETE'	=> 'Incompleto',
	'LBL_UW_INSTALL'	=> 'INSTALACIÓN de Archivo',
	'LBL_UW_MANUAL_MERGE'	=> 'Combinación de Archivos',
	'LBL_UW_MODULE_READY_UNINSTALL'		=> "El módulo está listo para ser desinstalado.  Haga clic en \"Proceder\" para proseguir con la desinstalación.<br>\n",
	'LBL_UW_MODULE_READY'		=> "El módulo está listo para ser instalado.  Haga clic en \"Proceder\" para proseguir con la instalación.",
	'LBL_UW_NO_INSTALLED_UPGRADES'	=> 'No se han detectado actualizaciones registradas.',
	'LBL_UW_NONE'			=> 'Ninguno',
	'LBL_UW_NOT_AVAILABLE'		=> 'No disponible',
	'LBL_UW_OVERWRITE_DESC'		=> "Todos los archivos cambiados serán sobrescritos, incluyendo cualquier personalización al código fuente y cambios realizados a las plantillas. ¿Está seguro de proceder?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Sobrescribir todos los archivos',
	'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Combinación Manual - Preservar todo',
	'LBL_UW_OVERWRITE_FILES'	=> 'Método de combinación',
	'LBL_UW_PATCH_READY'		=> 'El parche está preparado para ser procesado. Haga clic en el botón "Proceder" para completar el proceso de actualización.',
	'LBL_UW_PATCH_READY2'		=> '<h2>Aviso: Se han encontrado Diseños Personalizados</h2><br />Los siguientes archivos tienen campos nuevos o diseños de pantalla modificados aplicados vía el Estudio. El parche que va a instalar también contiene cambios a los archivos. Para <u>cada archivo</u> puede:<br><ul><li>[<b>Por omisión</b>] Mantener su versión dejando en blanco la casilla. Las modificaciones contenidas en el parche serán ignoradas.</li>o<li>Aceptar los archivos actualizados marcando la casilla. Sus diseños necesitarán ser implantados nuevamente mediante el Estudio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'	=> '¿Crear tarea para combinación manual?',
	'LBL_UW_PREFLIGHT_COMPLETE'	=> 'Comprobaciones previas',
	'LBL_UW_PREFLIGHT_DIFF'		=> 'Diferenciados ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'	=> 'Enviarse a si mismo un correo recordatorio para la Combinación Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'		=> 'Los siguientes archivos han sido modificados.  Desmarque los elementos que requieren una combinación manual. <i>Los cambios de diseño detectados son desmarcados automáticamente; marque los que deberían ser sobrescritos.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'	=> 'No se requiere Combinación Manual de archivos.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'	=> 'No es necesario.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'	=> 'Archivos Auto-preservados:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'		=> 'Todas las comprobaciones de inspección previa han sido satisfactorias.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Clic en Siguiente para copiar los archivos actualizados al sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Nota: </b> El resto del proceso de actualización es obligatorio, hacer clic en Siguiente implica completar el proceso. Si no desea continuar haga clic en Cancelar.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'	=> 'Cambiar todos los archivos',

	'LBL_UW_REBUILD_TITLE'		=> 'Reconstruir resultado',
	'LBL_UW_SCHEMA_CHANGE'		=> 'Cambios en el esquema',

	'LBL_UW_SHOW_COMPLIANCE'	=> 'Mostrar configuración detectada',
	'LBL_UW_SHOW_DB_PERMS'		=> 'Mostrar permisos de base de datos que faltan',
	'LBL_UW_SHOW_DETAILS'		=> 'Mostrar detalles',
	'LBL_UW_SHOW_DIFFS'		=> 'Mostrar archivos que requieren Combinanción Manual',
	'LBL_UW_SHOW_NW_FILES'		=> 'Mostrar archivos con permisos incorrectos',
	'LBL_UW_SHOW_SCHEMA'		=> 'Mostrar script de cambios al esquema',
	'LBL_UW_SHOW_SQL_ERRORS'	=> 'Mostrar consultas erróneas',
	'LBL_UW_SHOW'			=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'	=> 'Archivos Omitidos',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'	=> 'Omitiendo sobrescritura de archivos - Seleccionada combinación manual.',
	'LBL_UW_SQL_RUN'			=> 'Comprobar cuando se haya ejecutado el SQL manualmente',
	'LBL_UW_START_DESC'		=> 'Este Asistente le ayudará a actualizar esta instancia de Sugar.',
	'LBL_UW_START_DESC2'		=> 'Nota: Recomendamos que realice un respaldo de su base de datos y de sus archivos de sistema (todos los archivos de su carpeta de SugarCRM) antes de realizar esta operación. También recomendamos que antes de actualizar su instancia de producción compruebe el impacto de la actualización en un ambiente idéntico para pruebas', 
	'LBL_UW_START_DESC3'		=> 'Al hacer clic en Siguiente se realizará una comprobación de que el sistema está listo para la actualización. La comprobación incluye permisos de archivos, privilegios de acceso a la base de datos y configuración del servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'		=> 'El nuevo Asistente de Actualizaciones retomará ahora el proceso de instalación. Por favor, continue con su actualización.',
	'LBL_UW_START_UPGRADED_UW_TITLE'	=> 'Bienvenido al nuevo Asistente de Actualizaciones',

	'LBL_UW_SYSTEM_CHECK_CHECKING'		=> 'Realizando comprobaciones. Espere, por favor.  Esto podría tardar unos 30 segundos.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'	=> 'Buscando todos los archivos a comprobar.',
	'LBL_UW_SYSTEM_CHECK_FILES'	=> 'Archivos',
	'LBL_UW_SYSTEM_CHECK_FOUND'	=> 'Encontrados',

	'LBL_UW_TITLE_CANCEL'		=> 'Cancelar',
	'LBL_UW_TITLE_COMMIT'		=> 'Realizar actualización',
	'LBL_UW_TITLE_END'		=> 'Informe',
	'LBL_UW_TITLE_PREFLIGHT'	=> 'Comprobaciones previas',
	'LBL_UW_TITLE_START'		=> 'Bienvenido',
	'LBL_UW_TITLE_SYSTEM_CHECK'	=> 'Comprobación del sistema',
	'LBL_UW_TITLE_UPLOAD'		=> 'Subir paquete',
	'LBL_UW_TITLE'			=> 'Asistente de actualizaciones',
	'LBL_UW_UNINSTALL'		=> 'Desinstalar',

	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 	=> 'Aceptar Licencia',
	'LBL_UW_CONVERT_THE_LICENSE' 	=> 'Convertir Licencia',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Módulos Actualizados/Personalizados',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Se han detectado los siguientes módulos personalizados que serán preservados',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Se han detectado los siguientes módulos personalizados mediante el Estudio y serán actualizados',

	'LBL_START_UPGRADE_IN_PROGRESS'  => 'Inicio en progreso',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'  => 'Comprobación del sistema en progreso',
	'LBL_LICENSE_CHECK_IN_PROGRESS'  => 'Comprobación de licencia en progreso',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'      => 'Comprobaciones previas en progreso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'      => 'Copia de archivos en progreso',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'       => 'Ejecución de la actualización en progreso',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'	=> 'Actualización de scripts en progreso',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'	=> 'Resumen de la actualización en progreso',
	'LBL_UPGRADE_IN_PROGRESS'               => 'en progreso     ',
	'LBL_UPGRADE_TIME_ELAPSED'              => 'Tiempo transcurrido',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'	=> 'Cancelación de actualización y limpieza en progreso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'La actualización puede durar unos minutos',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Comprobaciones de subida en progreso',
    'LBL_UPLOADING_UPGRADE_PACKAGE'      	=> 'Subiendo paquete de actualización ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 		=> '¿Desea que Sugar elimine el esquema obsoleto de la versión 4.5.1?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'	=> 'El Asistente de Actualizaciones eliminará el antiguo esquema 4.5.1',
	'LBL_UW_DROP_SCHEMA_MANUAL'		=> 'Eliminación manual del esquema post-instalación',
	'LBL_UW_DROP_SCHEMA_METHOD'		=> 'Método de eliminación de antiguo esquema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'	=> 'Mostrar el antiguo esquema que sería eliminado',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'  => 'Consultas saltadas',
	'LBL_INCOMPATIBLE_PHP_VERSION' 		=> 'Se requiere la versión de PHP 5 o superior.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      	=> 'Su versión de PHP no está soportada.  Necesitará instalar una versión que sea compatible con la aplicación Sugar.  Consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para información sobre las versiones de PHP soportadas. Su versión es la  ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 	=> 'El modo de compatibilidad hacia atrás de PHP está habilitado. Configure zend.ze1_compatibility_mode en Off antes de continuar',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Acción',
    'LBL_ML_CANCEL'=> 'Cancelar',
    'LBL_ML_COMMIT'=>'Proceder',
    'LBL_ML_DESCRIPTION' => 'Descripción',
    'LBL_ML_INSTALLED' => 'Fecha instalación',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha publicación',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versión',
	'LBL_ML_INSTALL'=>'Instalar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Monitorización',
	'LBL_CURRENT_PHP_VERSION' => '(Su versión actual de PHP es ',
	'LBL_RECOMMENDED_PHP_VERSION' => '. La versión recomendada de PHP es 5.2.1 o superior)',																						
	'LBL_IE6COMPAT_CHECK' => 'Sugar ha detectado que está utilizando Internet Explorer 6, que no está soportado por todos los Temas de Sugar. El tema "Sugar IE6", que funciona con Internet Explorer 6, ha sido seleccionado automáticamente.',
 	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'La versión Sugar Community Edition 6.1 utiliza la GNU Affero General Public License versión 3. Esta actualización convertirá su licencia actual a la nueva licencia mostrada abajo.',
 
 	'LBL_MODULE_NAME' => 'Asistente Actualización',
	'LBL_UPLOAD_SUCCESS' => 'Paquete de actualización subido satisfactoriamente. Clic en Siguiente para realizar una comprobación final.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirmar Diseños',
	'LBL_LAYOUT_MODULE_TITLE' => 'Diseños',
	'LBL_LAYOUT_MERGE_DESC' => 'Existen nuevos campos disponibles como parte de esta actualización y serán agregados automáticamente a los diseños de pantalla existentes. Para mayor información sobre los campos nuevos, por favor consulte  las Notas de la Versión a la que está actualizando.<br><br>Si no desea agregar los campos nuevos, desmarque el módulo y sus diseños personalizados permanecerán sin cambios. Los campos estarán disponibles en el Estudio luego de la actualización. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Clic en Siguiente para confirmar los cambios y finalizar la actualización.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Clic en Siguiente para completar la actualización.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar Diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmar resultados de Diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Los diseños a continuación han sido combinados satisfactoriamente:',
	'LBL_SELECT_FILE' => 'Seleccionar archivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'El archivo cargado no es compatible con esta versión de Sugar: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'El archivo cargado no es compatible con esta edición (Comunitaria, Profesional o Empresarial) de Sugar: ',
	'LBL_LANGPACKS' => 'Paquetes de idioma' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Gestionar módulos' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Parches actualización' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Flujo de trabajo' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Actualizar' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Procesando' /*for 508 compliance fix*/,
);
?>
