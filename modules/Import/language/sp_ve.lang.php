<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*******************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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
 * $Id: sp_ve.lang.php,v 1.8 2011/07/10 10:20:29 carlose Exp $
 * Source: SugarCRM 6.2
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array (
    'LBL_GOOD_FILE' => 'Archivo de importación leído satisfactoriamente',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'filas ignoradas debido a errores',
    'LBL_UPDATE_SUCCESSFULLY' => 'registros actualizados satisfactoriamente',
    'LBL_SUCCESSFULLY_IMPORTED' => 'registros fueron creados',
    'LBL_STEP_4_TITLE' => 'Paso {0}: Archivo de importación',
    'LBL_STEP_5_TITLE' => 'Paso {0}: Ver resultados de importación',
    'LBL_CUSTOM_ENCLOSURE' => 'Campos calificados por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No se puede Publicar. Hay otro mapeo publicado con el mismo nombre.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No se puede Ocultar un mapeo que pertenece a otro usuario.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No se han habilitado Importaciones para este tipo de módulo',
    'LBL_IMPORT_TYPE' => '¿Qué desea hacer con los datos importados?',
    'LBL_IMPORT_BUTTON' => 'Solo crear nuevos registros',
    'LBL_UPDATE_BUTTON' => 'Crear nuevos registros y actualizar los existentes',
    'LBL_CREATE_BUTTON_HELP' => 'Use esta opción para crear nuevos registros. Nota: Las filas del archivo de importación que contengan valores cuyo ID sea igual al de registros existentes no serán importados si los valores están mapeados con el campo ID.',
    'LBL_UPDATE_BUTTON_HELP' => 'Use esta opción para actualizar registros existentes. Los datos del archivo de importación se relacionarán con los registros existentes basándose en el ID del registro que conste en el archivo de importación.',
    'LBL_ERROR_INVALID_BOOL'=>'Valor booleano no válido',
    'LBL_NO_ID' => 'ID Obligatorio',
    'LBL_PRE_CHECK_SKIPPED' => 'Revisión previa ignorada',
    'LBL_IMPORT_ERROR' => 'Errores de importación:',
    'LBL_ERROR' => 'Error',
    'LBL_NOLOCALE_NEEDED' => 'No es necesaria la conversión de localización',
    'LBL_FIELD_NAME' => 'Nombre campo',
    'LBL_VALUE' => 'Valor',
    'LBL_ROW_NUMBER' => 'Número fila',
    'LBL_NONE' => 'Ninguno',
    'LBL_REQUIRED_VALUE' => 'Falta valor obligatorio',
    'LBL_ID_EXISTS_ALREADY' => 'ID ya existe en esta tabla',
    'LBL_ASSIGNED_USER' => 'Si el usuario no existe, utilice el usuario actual',
    'LBL_SHOW_HIDDEN' => 'Mostrar campos que normalmente no son importables',
    'LBL_UPDATE_RECORDS' => 'Actualizar registros existentes en lugar de importarlos (no se puede deshacer)',
    'LBL_TEST'=> 'Probar importación (no guarda o actualiza datos)',
    'LBL_TRUNCATE_TABLE' => 'Vaciar tabla antes de importar (elimina todos los registros)',
    'LBL_RELATED_ACCOUNTS' => 'No crear cuentas relacionadas',
    'LBL_NO_DATECHECK' => 'No validar fecha ( es más rápido pero produce un error si alguna fecha tiene el formato incorrecto)',
    'LBL_NO_EMAILS' => 'No enviar notificaciones por correo durante esta importación',
    'LBL_NO_PRECHECK' => 'Native Format mode',
    'LBL_STRICT_CHECKS' => 'Usar reglas estrictas (revisa también direcciones de correo y números de teléfono)',
    'LBL_ERROR_SELECTING_RECORD' => 'Error seleccionando registro:',
    'LBL_ERROR_DELETING_RECORD' => 'Error eliminando registro:',
    'LBL_NOT_SET_UP' => 'La importación no está habilitada para este tipo de módulo',
    'LBL_ARE_YOU_SURE' => '¿Está seguro? Esto eliminará todos los datos en este módulo.',
    'LBL_NO_RECORD' => 'No hay registro para actualizar con este ID',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'La importación no está habilitada para este tipo de módulo',
    'LBL_DEBUG_MODE' => 'Habilitar modo de depuración',
    'LBL_ERROR_INVALID_ID' => 'ID es muy larga para caber en el campo (longitud máxima es 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de teléfono no válido',
    'LBL_ERROR_INVALID_NAME' => 'Cadena muy larga para caber en el campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'Cadena muy larga para caber en el campo',
    'LBL_ERROR_INVALID_DATE' => 'Fecha no válida',
    'LBL_ERROR_INVALID_DATETIME' => 'Datetime no válido',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Datetime no válido',
    'LBL_ERROR_INVALID_TIME' => 'Hora no válida',
    'LBL_ERROR_INVALID_INT' => 'Valor entero no válido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico no válido',
    'LBL_ERROR_INVALID_TIME' => 'Hora no válida',
    'LBL_ERROR_INVALID_EMAIL'=>'Dirección de correo no válida',
    'LBL_ERROR_INVALID_BOOL'=>'Valor no válido (debe ser 1 ó 0)',
    'LBL_ERROR_INVALID_DATE'=>'Cadena de fecha no válida',
    'LBL_ERROR_INVALID_USER'=>'Nombre de usuario o ID no válido',
    'LBL_ERROR_INVALID_TEAM' => 'Nombre de equipo o ID no válido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nombre de cuenta o ID no válido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional no válido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moneda no válido',
    'LBL_ERROR_INVALID_FLOAT' => 'Número de punto flotante no válido',
    'LBL_ERROR_NOT_IN_ENUM' => 'Valor no está enn lista deplegable. Valores permitidos son:: ',
    'LBL_NOT_MULTIENUM' => 'No es un MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Importaciones no habilitadas para este tipo de módulo',
    'LBL_IMPORT_MODULE_NO_USERS' => 'AVISO: No hay usuarios definidos en su sistema. Si realiza la importación sin haber añadido usuarios antes, todos los registros pertenecerán al Administrador.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'No se puede Publicar. Hay otro mapeo publicado con el mismo nombre.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'No se puede Ocultar un mapeo que pertenece a otro usuario.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'El directorio ',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' no existe o no tiene permiso para escritura',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'El archivo no fue cargado satisfactoriamente, intente nuevamente.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Archivo demasiado grande. Máx:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Cambie $upload_maxsize en config.php',
  'LBL_MODULE_NAME' => 'Importar',
  'LBL_TRY_AGAIN' => 'Intente nuevamente',
    'LBL_START_OVER' => 'Comenzar nuevamente',
  'LBL_ERROR' => 'Error:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'El archivo de importación contiene {0} filas. El número óptimo de filas es {1}, un número mayor de filas puede retardar el proceso. Clic en Aceptar para continuar con la importación. Clic en Cancelar para revisar y recargar el archivo de importación.',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Conjunto fecha hora no válido',
  'ERR_MULTIPLE' => 'Se han definido varias columnas con el mismo nombre de campo.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Faltan campos requeridos:',
  'ERR_MISSING_MAP_NAME' => 'Falta el nombre del mapeo personalizado',
  'ERR_SELECT_FULL_NAME' => 'No se puede seleccionar Nombre Completo cuando se ha seleccionado Nombre Y Apellido.',
  'ERR_SELECT_FILE' => 'Seleccione el archivo a cargar.',
  'LBL_SELECT_FILE' => 'Seleccione archivo:',
  'LBL_CUSTOM' => 'Personalizado',
    'LBL_CSV' => 'un archivo de mi computadora',
    'LBL_EXTERNAL_SOURCE' => 'una aplicación o servicio externos',
    'LBL_TAB' => 'Archivo delimitado por tabulaciones',
    'LBL_CUSTOM_DELIMITED' => 'Archivo delimitado por caracter especificado',
    'LBL_CUSTOM_DELIMITER' => 'Campos delimitados por:',
  'LBL_CUSTOM_CSV' => 'Archivo delimitado por comas',
  'LBL_CUSTOM_TAB' => 'Archivo delimitado por tabulación',
  'LBL_DONT_MAP' => '-- No utilizar este campo --',
    'LBL_STEP_MODULE' => '¿Hacia cuál módulo desea importar los datos?',
  'LBL_STEP_1_TITLE' => 'Paso 1: Seleccione el origen',
    'LBL_CONFIRM_TITLE' => 'Paso {0}: Confirmar propiedades del archivo de importación',
    'LBL_CONFIRM_EXT_TITLE' => 'Paso {0}: Confirmar propiedades del origen externo',
  'LBL_WHAT_IS' => 'Los datos están en:',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'El mapeo para Microsoft Outlook depende de que el archivo de importación esté delimitado por comas (.csv). Si su archivo de importación está delimitado por tabulaciones, el mapeo no se aplicará de la forma esperada.',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_2005' => 'Act! 2005',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_MY_SAVED' => 'Para usar un mapeo guardado, selecciónelo de la lista a continuación:',
  'LBL_PUBLISH' => 'publicar',
  'LBL_DELETE' => 'borrar',
  'LBL_PUBLISHED_SOURCES' => 'Para usar un mapeo publicado, selecciónelo de la lista a continuación:',
  'LBL_UNPUBLISH' => 'ocultar',
  'LBL_NEXT' => 'Siguiente >',
  'LBL_BACK' => '< Atrás',
  'LBL_STEP_2_TITLE' => 'Paso {0}: Cargar archivo de importación',
  'LBL_HAS_HEADER' => 'Fila de encabezado:',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NOTES' => 'Notas.',
  'LBL_NOW_CHOOSE' => 'Ahora escoja ese archivo para importar:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 y 2000 pueden exportar datos en formato <b>Valores separados por comas</b> el cual puede ser usado para importar datos al sistema. Para exportar sus datos desde Outlook, siga estos pasos:',
  'LBL_OUTLOOK_NUM_1' => 'Inicie <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Seleccione, en el menú <b>Archivo</b>, la opción <b>Importar y Exportar...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Seleccione <b>Exportar a un archivo</b> y haga clic en <b>Siguiente</b>',
  'LBL_OUTLOOK_NUM_4' => 'Escoja <b>Valores separados por comas (Windows)</b> y haga clic en <b>Siguiente</b>.<br>  Nota: puede aparecer una solicitud para instalar el componente de exportación',
  'LBL_OUTLOOK_NUM_5' => 'Seleccione la carpeta <b>Contactos</b> y haga clic en <b>Siguiente</b>. Puede seleccionar diferentes carpetas si sus contactos se han guardado en varias carpetas.',
  'LBL_OUTLOOK_NUM_6' => 'Escriba un nombre de archivo y haga clic en <b>siguiente</b>',
  'LBL_OUTLOOK_NUM_7' => 'Clic en <b>Finalizar</b>',
  'LBL_IMPORT_ACT_TITLE' => 'Act! puede exportar datos en formato <b>Comma Separated Values</b> el cual puede ser usado para importar datos al sistema. Para exportar sus datos desde Act! siga estos pasos:',
  'LBL_ACT_NUM_1' => 'Inicie <b>ACT!</b>',
  'LBL_ACT_NUM_2' => 'Seleccione, en el menú <b>File</b>, la opción <b>Data Exchange</b>, luego la opción <b>Export...</b> ',
  'LBL_ACT_NUM_3' => 'Escoja el tipo de archivo <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Elija un nombre y ubicación para el archivo que contendrá los datos exportados y haga clic en <b>Next</b>',
  'LBL_ACT_NUM_5' => 'Seleccione <b>Contacts records only</b>',
  'LBL_ACT_NUM_6' => 'Haga clic en el botón <b>Options...</b>',
  'LBL_ACT_NUM_7' => 'Seleccione <b>Comma</b> como el separador de campos',
  'LBL_ACT_NUM_8' => 'Marque <b>Yes, export field names</b> y haga clic en <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Clic en <b>Next</b>',
  'LBL_ACT_NUM_10' => 'Seleccione <b>All Records</b> y luego haga clic en <b>Finish</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com can export data in the <b>Comma Separated Values</b> format which can be used to import data into the system. To export your data from Salesforce.com, follow the steps below:',
  'LBL_SF_NUM_1' => 'Open your browser, go to http://www.salesforce.com, and login with your email address and password',
  'LBL_SF_NUM_2' => 'Click on the <b>Reports</b> tab on the top menu',
  'LBL_SF_NUM_3' => 'To export Accounts:</b> Click on the <b>Active Accounts</b> link<br><b>To export Contacts:</b> Click on the <b>Mailing List</b> link',
  'LBL_SF_NUM_4' => 'On <b>Step 1: Select your report type</b>, select <b>Tabular Report</b>click <b>Next</b>',
  'LBL_SF_NUM_5' => 'On <b>Step 2: Select the report columns</b>, choose the columns you want to export and click <b>Next</b>',
  'LBL_SF_NUM_6' => 'On <b>Step 3: Select the information to summarize</b>, just click <b>Next</b>',
  'LBL_SF_NUM_7' => 'On <b>Step 4: Order the report columns</b>, just click <b>Next</b>',
  'LBL_SF_NUM_8' => 'On <b>Step 5: Select your report criteria</b>, under <b>Start Date</b>, choose a date far enough in the past to include all your Accounts. You can also export a subset of Accounts using more advanced criteria. When you are done, click <b>Run Report</b>',
  'LBL_SF_NUM_9' => 'A report will be generated, and the page should display <b>Report Generation Status: Complete.</b> Now click <b>Export to Excel</b>',
  'LBL_SF_NUM_10' => 'On <b>Export Report:</b>, for <b>Export File Format:</b>, choose <b>Comma Delimited .csv</b>. Click <b>Export</b>.',
  'LBL_SF_NUM_11' => 'A dialog will pop up for you to save the export file to your computer.',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Varias aplicaciones permiten exportar datos hacia un archivo <b>Delimitado por Comas (.csv)</b>. Generalmente los pasos son los siguientes:',
  'LBL_CUSTOM_NUM_1' => 'Ejecutar la aplicación y abrir el archivo que contiene los datos',
  'LBL_CUSTOM_NUM_2' => 'Seleccionar, en el menú <b>Archivo</b>, la opción <b>Exportar...,</b> o <b>Guardar como...</b>',
  'LBL_CUSTOM_NUM_3' => 'Guardar el archivo en el formato <b>CSV</b> o <b>Valores Delimitados por Comas</b>',
  'LBL_IMPORT_TAB_TITLE' => 'Varias aplicaciones permiten exportar datos hacia un archivo <b>Delimitado por Tab (.tsv o .tab)</b>. Generalmente los pasos son los siguientes:',
  'LBL_TAB_NUM_1' => 'Ejecutar la aplicación y abrir el archivo que contiene los datos',
  'LBL_TAB_NUM_2' => 'Seleccionar, en el menú <b>Archivo</b>, la opción <b>Exportar...,</b> o <b>Guardar como...</b>',
  'LBL_TAB_NUM_3' => 'Guardar como un archivo de texto con formato <b>TSV</b> o <b>Valores delimitados por Tabulación</b>',
  'LBL_STEP_3_TITLE' => 'Paso {0}: Confirmar mapeo de campos',
    'LBL_STEP_DUP_TITLE' => 'Paso {0}: Buscar posibles duplicados',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Seleccione de la lista el campo de SugarCRM hacia el que va a ser importado cada campo del Archivo. Cuando termine, haga clic en <b>Siguiente</b>:',
  'LBL_DATABASE_FIELD' => 'Campo del módulo',
  'LBL_HEADER_ROW' => 'Fila de encabezado',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccione si la primera fila del archivo es de encabezado y contiene la etiqueta de cada campo.',
  'LBL_ROW' => 'Fila',
  'LBL_SAVE_AS_CUSTOM' => 'Guardar con el nombre de:',
  'LBL_CONTACTS_NOTE_1' => 'Debe seleccionar Apellido o Nombre Completo.',
  'LBL_CONTACTS_NOTE_2' => 'Si selecciona Nombre Completo, entonces se ignoran Nombre y Apellido.',
  'LBL_CONTACTS_NOTE_3' => 'Si selecciona Nombre Completo, los datos se dividen en Nombre y Apellido al insertarlos en la base de datos.',
  'LBL_CONTACTS_NOTE_4' => 'Los campos Dirección 2 y Dirección 3 se unen con el campo Dirección al insertarlos en la base de datos.',
  'LBL_ACCOUNTS_NOTE_1' => 'Debe seleccionar al menos Nombre de Cuenta.',
  'LBL_ACCOUNTS_NOTE_2' => 'Los campos Dirección 2 y Dirección 3 se unen con el campo Dirección al insertarlos en la base de datos.',
  'LBL_OPPORTUNITIES_NOTE_1' => 'Los campos Nombre Oportunidad, Nombre Cuenta, Fecha Cierre y Etapa Venta son obligatorios.',
  'LBL_IMPORT_NOW' => 'Importar ahora',
  'LBL_' => '',
  'LBL_REQUIRED_NOTE' => 'Campo(s) obligatorios',

  'LBL_CANNOT_OPEN' => 'No tiene permiso para leer el archivo a importar',
  'LBL_NOT_SAME_NUMBER' => 'Su archivo de importación no tiene el mismo número de campos en todas las filas',
  'LBL_NO_LINES' => 'No se ha detectado ninguna fila en su archivo. Por favor verifique que no contenga líneas en blanco e intente nuevamente',
  'LBL_FILE_ALREADY_BEEN_OR' => 'El archivo de importación ya fue procesado o no existe',
  'LBL_SUCCESS' => 'Exito:',
	'LBL_FAILURE' => 'Importación fallida:',
  'LBL_SUCCESSFULLY' => 'Importación Satisfactoria',
  'LBL_LAST_IMPORT_UNDONE' => 'La importación se ha descartado',
  'LBL_NO_IMPORT_TO_UNDO' => 'No hay importación para Deshacer.',
  'LBL_FAIL' => 'Falla:',
  'LBL_RECORDS_SKIPPED' => 'registros ignorados',
  'LBL_IDS_EXISTED_OR_LONGER' => 'claves ya existentes o cuya longitud es mayor que 36 caracteres',
  'LBL_RESULTS' => 'Resultados',
    'LBL_CREATED_TAB' => 'Registros creados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Errores',
  'LBL_IMPORT_MORE' => 'Importar otra vez',
  'LBL_FINISHED' => 'Finalizada',
  'LBL_UNDO_LAST_IMPORT' => 'Deshacer importación',
  'LBL_LAST_IMPORTED' => 'Creada',
  'ERR_MULTIPLE_PARENTS' => 'Solo puede tener un Parent ID definido',

    'LBL_DUPLICATES' => 'Se encontraron duplicados',
    'LNK_DUPLICATE_LIST' => 'Descargar lista de duplicados',
    'LNK_ERROR_LIST' => 'Descargar lista de errores',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descargar lista de filas que no fueron importadas.',
    'LBL_UNIQUE_INDEX' => 'Elegir índice para comparación de duplicados',
    'LBL_VERIFY_DUPS' => 'Para encontrar registros existentes que coincidan con los datos del archivo, seleccione los campos a verificar.',
    'LBL_INDEX_USED' => 'Campos a verificar:',
    'LBL_INDEX_NOT_USED' => 'Campos disponibles:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'El archivo no fue cargado satisfactoriamente.  Revise los permisos de archivos en el directorio cache de la instalación Sugar.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Unique ID number',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Name or ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número teléfono',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nombre equipo o ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Fecha',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datetime',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nombre usuario o ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' ó \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Dirección correoE',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (se permiten decimales)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (se permiten decimales)',
    'LBL_DATE_FORMAT' => 'Formato fecha:',
    'LBL_TIME_FORMAT' => 'Formato hora:',
    'LBL_TIMEZONE' => 'Zona horaria:',
    'LBL_ADD_ROW' => 'Agregar campo',
    'LBL_REMOVE_ROW' => 'Quitar campo',
    'LBL_DEFAULT_VALUE' => 'Valor por omisión',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar propiedades del archivo de importación',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar propiedades del archivo de importación',
    'LBL_SHOW_NOTES' => 'Mostrar notas',
    'LBL_HIDE_NOTES' => 'Ocultar notas',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Mostrar columnas vista previa',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Ocultar columnas vista previa',
    'LBL_SAVE_MAPPING_AS' => 'Guardar mapeo como',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Comilla simple (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Comilla doble (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ninguno',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Otro:',
    'LBL_IMPORT_COMPLETE' => 'Salir',
    'LBL_IMPORT_COMPLETED' => 'Importación completada',
    'LBL_IMPORT_ERROR' => 'Ocurrieron errores en la importación',
    'LBL_IMPORT_RECORDS' => 'Importando registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'a',
    'LBL_CURRENCY' => 'Moneda',
	'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos significativos de moneda',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_NUMBER_GROUPING_SEP' => 'separador de miles',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato para mostrar nombre',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saludo, "f" Nombre, "l" Apellido</i>',
    'LBL_CHARSET' => 'Codificación archivo',
    'LBL_MY_SAVED_HELP' => 'Use esta opción para aplicar a esta importación una configuración previamente definida incluyendo propiedades, mapeos y verificaciones de duplicados.<br>Clic en <b>Borrar</b> para eliminar un mapeo; ningún otro usuario lo podrá utilizar.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use esta opción para aplicar a esta importación una configuración previamente definida incluyendo propiedades, mapeos y verificaciones de duplicados.<br>Clic en <b>Publicar</b> para que el mapeo esté disponible para otros usuarios.<br>Clic en <b>Ocultar</b> para que el mapeo no esté disponible para otros usuarios.<br>Clic en <b>Borrar</b> para eliminar un mapeo.',
    'LBL_MY_PUBLISHED_HELP' => 'Use esta opción para aplicar a esta importación una configuración previamente definida incluyendo propiedades, mapeos y verificaciones de duplicados.',
    'LBL_ENCLOSURE_HELP' => '<p>El <b>caracter calificador</b> se usa para encerrar el contenido del campo, incluyendo los caracteres usados como delimitadores.<br><br>Ejemplo: Si el delimitador es una coma (,) y el calificador es una comilla ("),<br><b>"Cupertino, California"</b> será importado en un campo y aparecerá como <b>Cupertino, California</b>.<br>Si no hubiera caracter calificador, o si el mismo es un caracter diferente,<br><b>"Cupertino, California"</b> será importado como dos campos adyacentes: <b>"Cupertino"</b> y <b>"California"</b>.<br><br>Nota: El archivo de importación puede no tener ningún caracter calificador.<br>El caracter calificador por omisión en los archivos delimitados por coma o tabulación creados en Excel, es la comilla.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Use esta opción para seleccionar y cargar el archivo que contiene los datos que desea importar. Ejemplos: archivo con valores delimitados por comas .csv o un archivo exportado desde Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Seleccione esta opción si el caracter que separa los campos en el archivo de importación es una <b>TAB</b>,  y la extensión del archivo es .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Seleccione esta opción si el caracter que separa los campos en el archivo de importación no es una coma o una TAB, y escriba el caracter en el campo adyacente.',
    'LBL_DATABASE_FIELD_HELP' => 'Esta columna muestra todos los campos del módulo. Seleccione un campo para mapear con los datos del archivo de importación.',
    'LBL_HEADER_ROW_HELP' => 'Esta columna muestra las etiquetas que contiene el encabezado del archivo de importación.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indica el valor que se usará en el campo del registro creado o modificado si el campo en el archivo de importación no contiene datos.',
    'LBL_ROW_HELP' => 'Esta columna muestra los datos en la primera fila luego del encabezado del archivo de importación.',
    'LBL_SAVE_MAPPING_HELP' => 'Ingrese un nombre para guardar la configuración de la importación que incluye el mapeo y los índices usados para la verificación de duplicados. Las configuraciones guardadas podrán usarse en futuras importaciones.',
'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Durante la carga de su archivo de importación, algunas propiedades podrían haber sido detectadas automáticamente. Revise y modifique las propiedades según su necesidad.<br>Nota: las opciones utilizadas aquí aplican solamente a esta importación y no reemplazan sus preferencias de usuario.',
	'LBL_IMPORT_FILE_SETTINGS' => 'Configuración archivo importación',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Buscar registros existentes que podrían considerarse duplicados de los registros que va a importar realizando una revisión de datos coincidentes. Los campos arrastrados a la columna "Revisar datos" serán usados para la detección de duplicados. Las filas del archivo de importación que contienen las coincidencias se listarán en la siguiente página, en donde podrá seleccionar cuales filas importar.',
    'LBL_IMPORT_STARTED' => 'Importación iniciada:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Formato archivo a importar',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registro podría no ser actualizado debido a un inconveniente con los permisos',
    'LBL_DELETE_MAP_CONFIRMATION' => '¿Está seguro de eliminar esta configuración de importación?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si los datos del archivo fueron exportados de alguno de los siguientes orígenes, selecciónelo.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccione el origen para aplicar automáticamente un mapeo con la finalidad de simplificar el proceso que se realizará en el siguiente paso (mapeo).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Use esta opción para importar datos directamente desde una aplicación o servicio externos, como por ejemplo Gmail.',
    'LBL_EXAMPLE_FILE' => 'Descargar plantilla de archivo de importación',
    'LBL_CONFIRM_IMPORT' => 'Ha seleccionado actualizar registros durante el proceso de importación. Las actualizaciones no pueden ser descartadas. Sin embargo, los registros creados durante el proceso si pueden ser descartados si así lo desea. Clic en Cancelar para solamente crear los nuevos registros o clic en Aceptar para continuar.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Aviso: Ya ha seleccionado un mapeo para esta importación ¿Desea continuar?',
    'LBL_EXTERNAL_FIELD' => 'campo externo',
    'LBL_SAMPLE_URL_HELP' => 'Descargue un archivo de muestra que contiene el encabezado con los campos del módulo. Ese archivo puede usarse como plantilla para crear un archivo de importación, agregando las filas con los datos que se importarían.',
    'LBL_AUTO_DETECT_ERROR' => 'No se puede detectar el delimitador de campos y el calificador en el archivo. Verifique las propiedades del archivo de importación.',
    'LBL_MIME_TYPE_ERROR_1' => 'El archivo seleccionado no parece contener una lista delimitada. Por favor, verifique el tipo de archivo. Se recomienda archivos con valores delimitados por comas (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para importar desde el archivo seleccionado haga clic en Aceptar. Para cargar otro archivo haga clic en Intente nuevamente',
    'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de campos especifica el caracter usado para separar los campos.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccione un archivo que contenga datos separados por un delimitador, puede ser coma o tabulación. Se recomienda los archivos del tipo .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Imposible obtener el adaptador de origen, intente nuevamente después de un momento.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Imposible acceder al canal externo, intente nuevamente después de un momento.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'No tiene permiso de escritura en el directorio caché para importar.',
    'LBL_ADD_FIELD_HELP' => 'Use esta opción para asignar un valor al campo en todos los registros creados y/o actualizados. Seleccione el campo y luego escriba o seleccione un valor en la columna Valor por omisión.',
    'LBL_MISSING_HEADER_ROW' => 'No se encontró fila de encabezado',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => '¿Está listo para iniciar la importación? Seleccione el origen de los datos que desea importar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccione un archivo de su computadora que contenga los datos que desea importar o descargue la plantilla que le ayudará a crear un archivo de importación.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Así lucen las primeras filas del archivo de importación con las propiedades detectadas del archivo. Si fue detectado un encabezado se muestra en la primera fila de la tabla. Revise las propiedades detectadas y haga los cambios necesarios o añada otras propiedades. Modificar la configuración actualizará los datos que aparecen en la tabla.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'La tabla a continuación contiene todos los campos del módulo que pueden mapearse con los datos en el archivo de importación. Si el archivo contiene un encabezado, las columnas han sido mapeadas con los campos coincidentes. Verifique que el mapeo sea correcto, de ser necesario realice los cambios. Para ayudarle con la verificación, la primera fila muestra los datos del archivo. Asegúrese de mapear todos los campos obligatorios (identificados con un asterisco).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar la creación de registros duplicados, seleccione los campos por los que desea hacer una revisión a medida que se importan los datos. Si se encuentran coincidencias, las filas del archivo que contienen los datos se mostrarán en los resultados de la importación (página siguiente). Allí podrá seleccionar cuales de esas filas se importarán.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Ingresar',
    'LBL_DUP_HELP' => 'Estas son las filas del archivo que no fueron importadas debido a que contienen datos que coinciden con valores en registros ya existentes, de acuerdo con la revisión definida. El dato que coincide esta resaltado. Para volver a importar estas filas, descargue la lista, haga los cambios y luego clic en <b>Importar nuevamente</b>.',
    'LBL_DESELECT' => 'demarcar',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_OK' => 'Aceptar',
    'LBL_ERROR_HELP' => 'Estas son las filas del archivo que no fueron importadas debido a que contienen errores. Para volver a importar estas filas, descargue la lista, haga los cambios y luego clic en <b>Importar nuevamente</b>.',
    'LBL_EXTERNAL_MAP_HELP' => 'La tabla a continuación contiene los campos del origen externo y los campos del módulo con los que están mapeados. Verifique que el mapeo es correcto, de ser necesario, realice los cambios. Asegúrese de mapear todos los campos obligatorios (identificados con un asterisco).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Se intentará importar los contactos de todos los grupos de Google Contacts.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Por omisión, los nombres de usuario de los usuarios que se van a crear serán los nombres completos del contacto en Google. Estos nombres de usuario pueden ser cambiados luego que los registros se hayan creado.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Clic en <b>Importar ahora</b> para iniciar la importación. Solamente se crearán registros para filas que incluyan el apellido. No se crearán registros para datos identificados como duplicados debido a que los nombres y/o direcciones de correo coinciden con registros existentes.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Esta columna muestra los campos del origen externo que contiene los datos que se usarán para crear los nuevos registros.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indica un valor a usar para el campo en el nuevo registro si el campo en el origen externo no contiene datos.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted mismo, use la columna Por omisión para seleccionar un usuario diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para asignar los nuevos registros a un equipo que no sea el suyo, use la columna Por omisión para seleccionar un equipo diferente.',
    'LBL_SIGN_IN_HELP' => 'Para habilitar este servicio ingrese a él desde la pestaña Cuentas externas dentro de la página de sus preferencias de usuario.',

);

?>
