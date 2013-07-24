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
 * $Id: sp_ve.lang.php,v 2.1 2012/10/23 15:20:29 carlose Exp $
 * Source: SugarCRM 6.5.6
 * Contributor(s): Carlos Espinosa (carlose@proactinfo.com)
 ********************************************************************************/

$mod_strings = array(
   'LBL_LOADING' => 'Cargando' /*for 508 compliance fix*/,
   'LBL_HIDEOPTIONS' => 'Ocultar opciones' /*for 508 compliance fix*/,
   'LBL_DELETE' => 'Borrar' /*for 508 compliance fix*/,
   'LBL_POWERED_BY_SUGAR' => 'Powered by SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
	'package'=>array(
			'create'=>'Proporcione un <b>Nombre</b> para el paquete. El nombre que introduzca debe ser alfanumérico y no debe contener espacios. (Ejemplo: Gestión_RH)<br/><br/> Puede proporcionar la información del <b>Autor</b> y la <b>Descripción</b> del paquete. <br/><br/>Haga clic en <b>Guardar</b> para crear el paquete.',
			'modify'=>'Las propiedades y acciones posibles del <b>Paquete</b> aparecen aquí.<br><br>Puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> del paquete, así como ver y personalizar cualquiera de los módulos contenidos en el paquete.<br><br>Haga clic en <b>Nuevo Módulo</b> para crear un módulo para el paquete.<br><br>Si el paquete contiene al menos un módulo, puede <b>Publicar</b> y <b>Implantar</b> el paquete, así como <b>Exportar</b> las personalizaciones realizadas al paquete.',
			'name'=>'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El nombre que introduzca debe ser alfanumérico, comenzar por una letra y no contener espacios. (Example: Gestión_RH)',
			'author'=>'Este es el <b>Autor</b> mostrado durante la instalación como el nombre de la entidad que ha creado el paquete.<br><br>El Autor podría ser un individuo o una empresa.',
			'description'=>'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
			'publishbtn'=>'Haga clic en <b>Publicar</b> para guardar todos los datos introducidos y para crear un archivo .zip que sea una versión instalable del paquete.<br><br>Utilice el <b>Cargardor de Módulos</b> para subir el archivo .zip e instalar el paquete.',
			'deploybtn'=>'Haga clic en <b>Implantar</b> para guardar todos los datos introducidos e instalar el paquete en la instancia actual, incluyendo todos los módulos.',
			'duplicatebtn'=>'Haga clic en <b>Duplicar</b> para copiar el contenido del paquete en un paquete nuevo y mostrarlo. <br/><br/>Se generará de forma automática un nombre para el nuevo paquete añadiendo un número al final del nombre original. Puede renombrar el nuevo paquete introduciendo otro <b>Nombre</b> y haciendo clic en <b>Guardar</b>.',			
			'exportbtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip que contenga las personalizaciones hechas al paquete.<br><br> El archivo generado no es una versión instalable del paquete.<br><br>Utilice el <b>Cargador de Módulos</b> para importar el archivo .zip y para que el paquete, personalizaciones incluidas, aparezca en el Constructor de Módulos.',
			'deletebtn'=>'Haga clic en <b>Eliminar</b> para eliminar este paquete y todos los archivos relacionados con el mismo.',
			'savebtn'=>'Haga clic en <b>Guardar</b> para guardar todos los datos introducidos relativos al paquete.',
			'existing_module'=>'Haga clic en el icono <b>Módulo</b> para editar las propiedades y personalizar los campos, relaciones y diseños asociados al módulo.',
			'new_module'=>'Haga clic en <b>Nuevo Módulo</b> para crear un nuevo módulo para este paquete.',
			'key'=>'Esta <b>Clave</b> alfanumérica de 5 letras se usará para prefijar todos los directorios, nombres de clases y tablas de base de datos de todos los módulos en el paquete actual.<br><br>La clave se usa para contribuir a la unicidad de los nombres de tablas.',
			'readme'=>'Haga clic para agregar un texto <b>Léame</b> para este paquete.<br><br>El Léame quedará disponible en el momento de instalación.',
	),
	'main'=>array(
		
	
	),
	'module'=>array(

		'create'=>'Proporcione un <b>Nombre</b> para el módulo. La <b>Etiqueta</b> que introduzca aparecerá en la pestaña de navegación. <br/><br/>Elija mostrar una pestaña de navegación para el módulo marcando el cuadro <b>Pestaña de Navegación</b>.<br/><br/>Marque el cuadro <b>Seguridad de Equipos</b> para tener un campo de selección de Equipos dentro de los registros del módulo. <br/><br/>Finalmente, seleccione el tipo de módulo que desea crear. <br/><br/>Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto determinado de campos, así como diseños predefinidos, para ser usados como base de su módulo. <br/><br/>Haga clic en <b>Guardar</b> para crear el módulo.',

		'modify'=>'Puede cambiar las propiedades del módulo o personalizar los <b>Campos</b>, <b>Relaciones</b> y <b>Diseños</b> asociados con el módulo.',
		'importable'=>'Marcando la opción <b>Importable</b> se habilitará la importación para este módulo.<br><br>iAparecerá un enlace al Asistente de Importación en el panel de Atajos del módulo.  El Asistente de Importación le facilitará la importación de datos provenientes de fuentes externas en el módulo personalizado.',
		'team_security'=>'Marcando la opción <b>Seguridad de Equipos</b> se habilitará la seguridad de equipos para este módulo.  <br/><br/>Si la seguridad de equipos está habilitada, el campo de selección de Equipo aparecerá en los registros del módulo ',
		'reportable'=>'Marcando esta opción permitirá que este módulo tenga informes que corran contra él.',
		'assignable'=>'Marcando esta opción permitirá que un registro de este módulo sea asignado a un usuario.',
		'has_tab'=>'Marcando <b>Pestaña de Navegación</b> proveerá al módulo de una pestaña de navegación.',
		'acl'=>'Marcando esta opción habilitará los Controles de Acceso para este módulo, incluyendo la Seguridad a Nivel de Campo.',
		'studio'=>'Marcando esta opción permitirá que los administradores personalicen este módulo dentro del Estudio.',
		'audit'=>'Marcando esta opción habilitará la Auditoría para este módulo. Los cambios a algunos de los campos serán registrados de forma que los administradores puedan revisar el historial de cambios.',
		'viewfieldsbtn'=>'Haga clic en <b>Ver Campos</b> para ver los campos asociados con el módulo y crear y editar campos personalizados.',
		'viewrelsbtn'=>'Haga clic en <b>Ver Relaciones</b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
		'viewlayoutsbtn'=>'Haga clic en <b>Ver Diseños</b> para ver los diseños de este módulo y personalizar la disposición de los campos dentro de los diseños.',
		'duplicatebtn'=>'Haga clic en <b>Duplicar</b> para copiar las propiedades del módulo en uno nuevo y mostrar el nuevo módulo. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo módulo añadiendo un número al final del nombre del módulo original.',
		'deletebtn'=>'Haga clic en <b>Eliminar</b> para eliminar este módulo.',
		'name'=>'Este es el <b>Nombre</b> del módulo actual.<br/><br/>El nombre debe ser alfanumérico, empezar por una letra y no contener espacios. (Example: Gestión_RH)',
		'label'=>'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación del módulo. ',
		'savebtn'=>'Haga clic en <b>Guardar</b> para guardar todos los datos introducidos relacionados con el módulo.',
		'type_basic'=>'El tipo de plantilla <b>Básica</b> proporciona los campos básicos, como Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.',
		'type_company'=>'El tipo de plantilla <b>Empresa</b> proporciona campos particulares de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Cuentas.',
		'type_issue'=>'El tipo de plantilla <b>Incidencia</b> proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.',
		'type_person'=>'El tipo de plantilla <b>Persona</b> proporciona campos particulares de individuos, como Saludo, Cargo, Nombre, Dirección y Número de Teléfono.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Contactos y Clientes Potenciales.',
		'type_sale'=>'El tipo de plantilla <b>Ventas</b> proporciona campos específicos de una oportunidad, como la Toma de Contacto, Etapa, Cantidad y Probabilidad.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Oportunidades.',
		'type_file'=>'La plantilla <b>Archivo</b> proporciona campos específicos de un Documento, como Nombre de Archivo, tipo de Documento, y Fecha de Publicación.<br><br>Use esta plantilla para crear módulos que sean similares al módulo estándar de Documentos.',
	
	),
	'dropdowns'=>array(
		'default' => 'Todas las <b>Listas Desplegables</b> de la aplicación se muestran aquí.<br><br>Las listas desplegables pueden ser usadas para campos desplegables de cualquier módulo.<br><br>Para realizar cambios a una lista desplegable existente, haga clic en su nombre.<br><br>Haga clic en <b>Agregar Lista Desplegable</b> para crear una nueva lista.',
		'editdropdown'=>'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módulo.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si ha instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre del Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista visible por los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible por los usuarios.<br><br>Tras proporcionar el nombre del elemento y la etiqueta de visualización, haga clic en <b>Agregar</b> para añadir el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre elementos y suéltelos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el icono <b>Editar</b> e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga clic en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga clic en <b>Rehacer</b>.<br><br>Haga clic en <b>Guardar</b> para guardar la lista desplegable.',
	),
	'subPanelEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en el <b>Subpanel</b> aparecen aquí.<br><br>La columna <b>Por omisión</b> contiene los campos que son mostrados en el Subpanel.<br/><br/>La columna <b>Disponibles</b> contiene los campos que un usuario puede seleccionar en la Búsqueda para crear una Vista de Lista personalizada. <br/><br/>La columna <b>Ocultos</b> contiene los campos que pueden ser agregados a las columnas Por omisión o Disponibles.',
		'savebtn'	=> 'Haga clic en <b>Guardar e implantar</b> para guardar los cambios que ha realizado y activarlos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver historial</b> para ver y restaurar del historial, un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en el subpanel.',
		'Default'	=> 'Los campos <b>Por omisión</b> aparecen en el subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en la <b>Vista de Lista</b> aparecen aquí.<br><br>La columna <b>Por omisión</b> contiene los campos que son mostrados por defecto en la Vista de Lista.<br/><br/>La columna <b>Ocultos</b> muestra los campos que pueden ser agregados a las columnas Por omisión o Disponibles.', 
		'savebtn'	=> 'Haga clic en <b>Guardar e implantar</b> para guardar los cambios que ha realizado y activarlos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.<br><br><b>Restaurar</b> dentro de <b>Ver historial</b> restaura la colocación de los campos desde diseños previamente guardados. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista. Esta opción solamente restaura la colocación de los campos desde el diseño original. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no están disponibles para ser vistos por los usuarios en las Vistas de Lista.',
		'Available' => 'Los campos <b>Disponibles</b> no se muestran, pero pueden ser agregados a las Vistas de Lista por los usuarios.',
		'Default'	=> 'Los campos <b>Por omisión</b> aparecen en las Vistas de Lista que no han sido personalizadas por los usuarios.'
	),
	'popupListViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en la <b>Vista de Lista</b> aparecen aquí.<br><br>La columna <b>Por omisión</b> contiene los campos que son mostrados por defecto en la Vista de Lista.<br/><br/>La columna <b>Ocultos</b> muestra los campos que pueden ser agregados a las columnas Por omisión o Disponibles.', 
		'savebtn'	=> 'Haga clic en <b>Guardar e implantar</b> para guardar los cambios que ha realizado y activarlos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.<br><br><b>Restaurar</b> dentro de <b>Ver historial</b> restaura la colocación de los campos desde diseños previamente guardados. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista. Esta opción solamente restaura la colocación de los campos desde el diseño original. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no están disponibles para ser vistos por los usuarios en las Vistas de Lista.',
		'Available' => 'Los campos <b>Disponibles</b> no se muestran, pero pueden ser agregados a las Vistas de Lista por los usuarios.',
		'Default'	=> 'Los campos <b>Por omisión</b> aparecen en las Vistas de Lista que no han sido personalizadas por los usuarios.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en el formulario de <b>Búsqueda</b> aparecen aquí. <br><br>La columna <b>Por omisión</b> contiene los campos que serán mostrados en el formulario de Búsqueda.<br/><br/>La columna <b>Ocultos</b> contiene los campos disponibles para que usted, como administrador, los pueda agregar al formulario de Búsqueda.', 
		'savebtn'	=> 'Al hacer clic en <b>Guardar e implantar</b> guardará todos los cambios y los activará',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.<br><br><b>Restaurar</b> dentro de <b>Ver historial</b> restaura la colocación de los campos desde diseños previamente guardados. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista. Esta opción solamente restaura la colocación de los campos desde el diseño original. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en la búsqueda.',
		'Default'	=> 'Los campos <b>Por omisión</b> aparecen en la Búsqueda.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Cambie el diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
		'defaultquickcreate'=>'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Cambie el diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
		//this defualt will be used for edit view
		'default'	=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Edición</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		'saveBtn'	=> 'Haga clic en <b>Guardar</b> para preservar los cambios que ha realizado al diseño desde la última vez que lo guardó.<br><br>Los cambios se mostrarán en el módulo solamente cuando se hayan Implantado.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.<br><br><b>Restaurar</b> dentro de <b>Ver historial</b> restaura la colocación de los campos desde diseños previamente guardados. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista. Esta opción solamente restaura la colocación de los campos desde el diseño original. Para cambiar las etiquetas de los campos, clic en icono Editar junto a cada campo.',
		'publishBtn'=> 'Haga clic en <b>Guardar e implantar</b> para guardar todos los cambios que ha realizado al diseño desde la última vez que lo guardó, y para activar los cambios en el módulo.<br><br>El diseño será mostrado inmediatamente en el módulo.',
		'toolbox'	=> 'La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b>, elementos de diseño adicionales y el conjunto de campos disponibles para ser agregados al diseño.<br/><br/>Los elementos de diseño y los campos de la Caja de Herramientas pueden ser arrastrados y soltados en el diseño, y viceversa.<br><br>Los elementos de diseño son <b>Paneles</b> y <b>Filas</b>. Agregar una nueva fila o un nuevo panel al diseño proporciona ubicaciones adicionales para los campos en el diseño.<br/><br/>Arrastre y suelte cualquier campo en la Caja de Herramientas o en el diseño a una posición ocupada por otro campo para intercambiar la ubicación de los dos campos.<br/><br/>El campo de <b>Relleno</b> crea un espacio vacío en el sitio donde es colocado.',
		'panels'	=> 'El área de <b>Diseño</b> permite dibujar el plano del formulario del módulo, definiendo la manera en que aparecerá cuando los cambios realizados sean implantados.<br/><br/>Puede reposicionar campos, filas y paneles arrastrándolos y soltándolos en la ubicación deseada.<br/><br/>Quite elementos arrastrándolos y soltándolos en la <b>Papelera de Reciclaje</b> de la Caja de Herramientas, o agregue nuevos elementos y campos arrastrándolos de la <b>Caja de Herramientas</b> y soltándolos en la ubicación deseada del diseño.',
		'delete'	=> 'Arrastre y suelte cualquier elemento aquí para quitarlo del diseño',
		'property'	=> 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulación</b> controla en qué orden la tecla tabulador cambiará el foco entre los distintos campos.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Los campos personalizados creados para el módulo aparecen sobre los campos disponibles para el módulo por omisión.<br><br>Para editar un campo, haga clic en el <b>Nombre de Campo</b>.<br/><br/>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>.',
		'mbDefault'=>'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Para personalizar la etiqueta del campo, haga clic en el nombre del campo.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creación haciendo clic en el Nombre de Campo.<br><br>Tras la implantación del módulo, los nuevos campos creados con el Constructor de Módulos serán tratados en el Estudio como campos estándar del módulo.',
        'addField'	=> 'Seleccione un <b>Tipo de Dato</b> para el nuevo campo. El tipo que seleccione determinará que valores pueden introducirse en el campo. Por ejemplo, sólo se podrán introducir números enteros en campos que son del tipo Entero.<br><br> Asigne al campo un <b>Nombre</b>.  El nombre debe ser alfanumérico y no contener espacios. El carácter guión_bajo también es válido.<br><br> La <b>Etiqueta de Visualización</b> es la etiqueta que aparecerá para los campos en los diseños de módulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el código.<br><br> Según el tipo de datos seleccionado para el campo, algunas o todas las siguientes propiedades podrán ser establecidas en el mismo:<br><br> El <b>Texto de Ayuda</b> aparece temporalmente cuando el usuario mantiene el cursor sobre el campo y puede ser utilizado para indicar al usuario el tipo de entrada deseada.<br><br> El <b>Texto de Comentario</b> sólo se ve en el Estudio y/o Constructor de Módulos, y puede ser utilizado para describir el campo a los administradores.<br><br> El <b>Valor por omisión</b> que aparecerá en el campo.  Los usuarios podrán introducir un nuevo valor en el campo o dejar el predeterminado.<br><br> Seleccione la opción de <b>Actualización Masiva</b> para poder utilizar la característica de Actualización Masiva en el campo.<br><br>El valor del <b>Tamaño Máximo</b> determina el máximo número de caracteres que pueden ser introducidos en el campo.<br><br> Seleccione la opción <b>Campo Requerido</b> para que el campo sea obligatorio, es decir, debe  suministrarse un valor para este campo para poder guardar un registro que lo contenga.<br><br> Seleccione la opción <b>Informable</b> para permitir que el campo sea utilizado en filtros y para mostrar datos en Informes.<br><br> Seleccione la opción <b>Auditar</b> para posibilitar el seguimiento de los cambios de los valores del campo en el Registro de Cambios.<br><br>Seleccione una de las opciones en el campo <b>Importable</b> para permitir, prohibir o requerir que el campo sea importado mediante el Asistente de Importación.<br><br>Seleccione una opción en el campo <b>Combinar Duplicados</b> para habilitar o no las características de Combinar Duplicados y Búsqueda de Duplicados.<br><br>Para ciertos tipos de datos se podrán establecer propiedades adicionales.',
		'editField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
        'mbeditField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo de modo que no aparezca en el módulo, quite el campo de los <b>Diseños</b> correspondientes.'
	),
	'exportcustom'=>array(
	    'exportHelp'=>'Exportar personalizaciones realizadas en el Estudio creando paquetes que pueden ser cargados en otras instancias de Sugar a través del <b>Cargador de Módulos</b>.<br><br>  Antes de empezar, proporcione un <b>Nombre de Paquete</b>.  Además, puede introducir información sobre el <b>Autor</b> y la <b>Descripción</b> del paquete.<br><br>Seleccione el o los módulos que contengan las personalizaciones que desea exportar. Sólo aquellos módulos que contengan personalizaciones aparecerán en la lista de selección.<br><br>Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones.',
	    'exportCustomBtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=>'Este es el <b>Nombre</b> del paquete. Este nombre será mostrado durante la instalación.',
	    'author'=>'Este es el <b>Autor</b> que será mostrado durante la instalación como el nombre de la entidad que creó el paquete. El Autor puede ser un individuo o una empresa.',
	    'description'=>'Esta es la <b>Descripción</b> del paquete mostrada durante la instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b>. <br/><br/>Use las herramientas para crear y gestionar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos implantados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'sugarPortalBtn' => 'Use el <b>Editor de Portal de Sugar</b> para administrar y personalizar el Portal Sugar.',
		'dropDownEditorBtn' => 'Use el <b>Editor de Listas Desplegables</b> para agregar y editar listas desplegables globales para campos de lista desplegable.',
		'appBtn' 	=> 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Utilice el <b>Estudio</b> para establecer qué información del módulo se muestra y cómo lo hace.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Los componentes del módulo que puede personalizar aparecen aquí.<br><br>Haga clic en un icono para seleccionar el componente a editar.',
		'fieldsBtn'	=> 'Crear y personalizar los <b>Campos</b> que almacenan la información en el módulo.',		
		'labelsBtn' => 'Editar las <b>Etiquetas</b> mostradas para los campos y otros títulos del módulo.',
	    'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del módulo o ver las existentes.',
		'layoutsBtn'=> 'Personalizar los <b>Diseños</b> del módulo.  Los diseños son las diferentes vistas del módulo que contienen campos.<br><br>Puede establecer que campos aparecen y como son organizados en cada diseño.',
		'subpanelBtn'=> 'Determina los campos que aparecen en los <b>Subpaneles</b> del módulo.',
		'portalBtn' =>'Personalizar los <b>Diseños</b> del módulo que aparecen en el <b>Portal Sugar</b>.',
		'layoutsHelp'=>  'Los <b>Diseños</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Los diseños muestran los campos y sus datos.<br><br>Haga clic en un icono para seleccionar el diseño a editar.',
		'subpanelHelp'=> 'Los <b>Subpaneles</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Haga clic en un icono para seleccionar el módulo a editar.',
		'newPackage'=>'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear y descargar un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
        'mbHelp'    => 'Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados.',
	    'viewBtnEditView' => 'Personalizar el diseño de <b>Vista de Edición</b> del módulo.<br><br>La Vista de Edición es el formulario que contiene los campos de entrada para capturar los datos introducidos por el usuario.',
	    'viewBtnDetailView' => 'Personalizar el diseño <b>Vista de Detalle</b> del módulo.<br><br>La Vista de Detalle muestra datos de campos introducidos por el usuario.',
		'viewBtnDashlet' => 'Personalizar el <b>Sugar Dashlet</b> del módulo, incluyendo la Vista de Lista y la Búsqueda del Sugar Dashlet.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
		'viewBtnListView' => 'Personalizar el diseño <b>Vista de Lista</b> del módulo.<br><br>Los resultados de la Búsqueda aparecerán en la Vista de Lista.',
	    'searchBtn' => 'Personalizar los diseños de <b>Búsqueda</b> del módulo.<br><br>Determina que campos pueden ser utilizados para filtrar los registros que aparecen en la Vista de Lista.',
		'viewBtnQuickCreate' =>  'Personalizar el diseño <b>Creación Rápida</b> del módulo.<br><br>El formulario de Creación Rápida aparece en los subpaneles y en el módulo de Correo-e.',    
	    'searchHelp'=> 'Los formularios de <b>Búsqueda</b> que pueden ser personalizados aparecen aquí. <br><br>Los formularios de búsqueda contienen campos para filtrar registros.<br><br>Haga clic en un icono para seleccionar el diseño de búsqueda a editar.',
	    'dashletHelp' =>'Los diseños de <b>Sugar Dashlet</b> que pueden ser personalizados aparecen aquí.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
	    'DashletListViewBtn' =>'La <b>Vista de Lista de Sugar Dashlet</b> muestra los registros basándose en los fíltros de búsqueda del Sugar Dashlet.',
	    'DashletSearchViewBtn' =>'La <b>Búsqueda de Sugar Dashlet</b> filtra los registros de la vista de lista de Sugar Dashlet.',
		'BasicSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Básica</b> que aparece en la pestaña de Búsqueda Básica en el área de Búsqueda del módulo.',
	    'AdvancedSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Avanzada</b> que aparece en la pestaña Búsqueda Avanzada en el área de Búsqueda del módulo.',
	    'portalHelp' => 'Administrar y personalizar el <b>Portal de Sugar</b>.',
	    'SPUploadCSS' => 'Subir una <b>Hoja de Estilos</b> para el Portal de Sugar.',
	    'SPSync' => '<b>Sincronice</b> las personalizaciones a la instancia del Portal de Sugar.',
	    'Layouts' => 'Personalizar los <b>Diseños</b> de los módulos del Portal de Sugar.',
	    'portalLayoutHelp' => 'Los módulos del Portal de Sugar aparecen aquí.<br><br>Seleccione un módulo para editar sus <b>Diseños</b>.',
		'relationshipsHelp' => 'Todas las <b>Relaciones</b> que existen entre el módulo y otros módulos implantados aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones.  Por ejemplo, todas las propiedades de las relaciones para las que el módulo de Cuentas es el módulo principal se almacenan en las tablas de base de datos de Cuentas.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por esa columna.<br><br>Haga clic en una fila de la tabla para ver y editar las propiedades asociadas con esa relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.<br><br>Se pueden crear relaciones entre dos módulos implantados cualesquiera.',
        'relationshipHelp'=>'Las <b>Relaciones</b> pueden ser creadas entre este módulo y otro módulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
		'editDropDownBtn' => 'Editar una Lista Desplegable global',
		'addDropDownBtn' => 'Agregar una Lista Desplegable global',
	),
	'fieldsHelp'=>array(
		'default'=>'Los <b>Campos</b> del módulo aparecen aquí listados por Nombre de Campo.<br><br>La plantilla del módulo incluye un conjunto predeterminado de campos.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>.<br><br>Para editar un campo, haga clic en el <b>Nombre de Campo</b>.<br/><br/>Tras la implantación del módulo, los nuevos campos creados en el Constructor de Módulos, así como los campos de la plantilla, se tratarán como campos estándar en el Estudio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'Las <b>Relaciones</b> que han sido creadas entre el módulo y otros módulos aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones. Las propiedades de la relación son guardadas en tablas de la base de datos pertenecientes al módulo principal.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por esa columna.<br><br>Haga clic en una fila de la tabla para ver y editar las propiedades asociadas con esa relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.',
		'addrelbtn'=>'ayuda emergente para agregar relación...',
		'addRelationship'=>'Las <b>Relaciones</b> pueden ser creadas entre este módulo y otro módulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
	),
	'labelsHelp'=>array(
		'default'=> 'Las <b>Etiquetas</b> de los campos, así como otros títulos en el módulo, pueden ser cambiadas.<br><br>Edite la etiqueta haciendo clic dentro del campo, introduciendo una nueva etiqueta y haciendo clic en <b>Guardar</b>.<br><br>Si hay algún paquete de idioma instalado en la aplicación, puede seleccionar el <b>Idioma</b> a utilizar para las etiquetas.',
		'saveBtn'=>'Haga clic en <b>Guardar</b> para guardar todos los cambios.',
		'publishBtn'=>'Haga clic en <b>Guardar e implantar</b> para guardar todos los cambios y activarlos.',
	),
	'portalSync'=>array(
	    'default' => 'Introduzca el <b>URL de Portal de Sugar</b> de la instancia de portal a actualizar, y haga clic en <b>Adelante</b>.<br><br>Luego, introduzca un usuario y contraseña de Sugar válidos y haga clic en <b>Iniciar Sincronización</b>.<br><br>Las personalizaciones que haya realizado en los <b>Diseños</b> de Portal de Sugar, así como la <b>Hoja de Estilos</b>, si alguna hubiera sido subida, serán transferidas a la instancia de portal especificada.',
	),
	'portalStyle'=>array(
	    'default' => 'Puede personalizar la apariencia del Portal de Sugar mediante una hoja de estilos.<br><br>Seleccione la <b>Hoja de Estilos</b> a subir.<br><br>La hoja de estilos será utilizada en el Portal Sugar la próxima vez que realice una sincronización.',
	),
), 

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> y creará un nuevo paquete en el que albergar sus módulos personalizados. <br/><br/>Cada paquete puede contener uno o más módulos.<br/><br/>Por ejemplo, puede crear un paquete que contenga un módulo personalizado relacionado con el módulo estándar de Cuentas. O puede crear un paquete que contenga varios módulos nuevos, que trabajan de forma conjunta como un proyecto y que están relacionados entre si o con otros módulos ya existentes en la aplicación.',
			'somepackages'=>'Un <b>paquete</b> actúa como contenedor de módulos pesonalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.<br><br>Cuando el proyecto ha sido completado, puede <b>Implantar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
			'afterSave'=>'Su nuevo paquete debería contener al menos un módulo. Puede crear uno o más módulos personalizados para el paquete.<br/><br/>Haga clic en <b>Nuevo Módulo</b> para crear un módulo personalizado para este paquete.<br/><br/> Tras la creación de al menos un módulo, puede publicar o implantar el paquete y dejarlo así disponible para su instancia y/o para las instancias de otros usuarios.<br/><br/> Para implantar el paquete en su instancia de Sugar, haga clic en <b>Implantar</b>.<br><br>Haga clic en <b>Publicar</b> para guardar el paquete como un archivo .zip. Tras guardar el archivo .zip en su equipo, utilice el <b>Cargador de Módulos</b> para subir e instalar el paquete en su instancia de Sugar.  <br/><br/>Puede distribuir el archivo a otros usuarios para que lo suban e instalen en sus propias instancias de Sugar.',
			'create'=>'Un <b>paquete</b> actúa como contenedor de módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más módulos personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.',
			),
	'main'=>array(
		'welcome'=>'Use las <b>Herramientas de Desarrollo</b> para crear y administrar módulos y campos tanto estándar como personalizados. <br/><br/>Para administrar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de Módulos</b>.',
		'studioWelcome'=>'Todos los módulos actualmente instalados, incluyendo los objetos estándares así como los cargados por un módulo, son personalizables dentro del Estudio.'
	),
	'module'=>array(
		'somemodules'=>"Cuando el paquete actual contenga al menos un módulo, puede <b>Implantar</b> los módulos del paquete dentro de su instancia de Sugar o <b>Publicar</b> el paquete en la instancia de Sugar actual o en otra instancia utilizando el <b>Cargador de Módulos</b>.<br/><br/>Para instalar el paquete directamente en su instancia de Sugar, haga clic en <b>Implantar</b>.<br><br>Para crear un archivo .zip para el paquete que pueda ser cargado e instalado tanto en la instancia actual de Sugar como en otras instancias mediante el <b>Cargador de Módulos</b>, haga clic en <b>Publicar</b>.<br/><br/> Puede construir los módulos para este paquete en etapas, y publicarlos o implantarlos cuando esté preparado para ello. <br/><br/>Tras publicar o deplegar un paquete, puede hacer cambios a las propiedades del mismo y personalizar los módulos.  Entonces, publique o implante nuevamente el paquete para aplicar los cambios." ,
		'editView'=> 'Aquí puede editar los campos existentes. Puede quitar cualquiera de los campos existentes o agregar los campos disponibles en el panel situado a la izquierda.',
		'create'=>'Cuando seleccione el tipo de <b>Tipo</b> de módulo que desea crear, tenga en cuenta los tipos de campos que desea tener dentro del módulo. <br/><br/>Cada plantilla de módulo contiene un conjunto de campos pertenecientes al tipo de módulo descrito en su título.<br/><br/><b>Básica</b> - Proporciona los campos básicos que aparecen en módulos estándar, como el Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.<br/><br/> <b>Empresa</b> - Proporciona campos específicos de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.  Use esta plantilla para crear módulos que son similares al módulo estándar de Cuentas.<br/><br/> <b>Persona</b> - Proporciona campos específicos de un individuo, como Saludo, Cargo, Nombre, Dirección y Número de Teléfono. Use esta plantilla para crear módulos que sean similares a los módulos estándar de Contactos y Clientes Potenciales.<br/><br/><b>Incidencia</b> - Proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción. Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.<br/><br/>Nota: Tras la creación del módulo, puede editar las etiquetas de los campos incluidos en la plantilla, así como crear campos personalizados para agregarlos a los diseños del módulo.',
		'afterSave'=>'Personalice el módulo para ajustarse a sus necesidades mediante la edición y creación de campos, y el establecimiento de relaciones con otros módulos y de la disposición de los campos en los diseños.<br/><br/>Para ver los campos plantilla y administrar los campos personalizados dentro del módulo, haga clic en <b>Ver Campos</b>.<br/><br/>Para crear y administrar relaciones entre el módulo y otros módulos, independientemente de si los módulos ya existen en la aplicación o son otros módulos personalizados del mismo paquete, haga clic en <b>Ver Relaciones</b>.<br/><br/>Para editar los diseños de módulos, haga clic en <b>Ver Diseños</b>. Puede cambiar los diseños de las Vistas de Detalle y de Edición del módulo de la misma forma que lo haría para módulos existentes en la aplicación, utilizando el Estudio.<br/><br/> Para crear un módulo con las mismas propiedades que el módulo actual, haga clic en <b>Duplicar</b>.  Después podrá personalizar el nuevo módulo.',
		'viewfields'=>'Los campos del módulo pueden ser personalizados para ajustarse a sus necesidades.<br/><br/>No puede eliminar campos estándar, pero puede quitarlos de los diseños correspondientes dentro de las páginas de Diseños. <br/><br/>Puede editar las etiquetas de los campos estándar. El resto de propiedades de los campos estándar no son editables. No obstante, puede crear fácilmente nuevos campos que tengan propiedades similares haciendo clic en el nombre de un campo y después en <b>Clonar</b> dentro del formulario de <b>Propiedades</b>.  Introduzca cualquier propiedad nueva, y haga clic en <b>Guardar</b>.<br/><br/>Si está personalizando un nuevo módulo, una vez éste haya sido instalado, no todas las propiedades de los campos podrán ser editadas.  Establezca todas las propiedades para los campos estándar y personalizados antes de que publique e instale el paquete que contiene el módulo personalizado.',
		'viewrelationships'=>'Puede crear relaciones muchos-a-muchos entre el módulo actual y cualquier otro módulo del paquete, y/o entre el módulo actual y otros módulos ya instalados en la aplicación.<br><br> Para crear relaciones uno-a-muchos y uno-a-uno, cree campos <b>Relacionado con</b> y <b>Posiblemente Relacionado con</b> para los módulos.',
		'viewlayouts'=>'Puede controlar cuales módulos están disponibles para captura de datos desde la <b>Vista de Edición</b>.  También puede controlar cuales datos son mostrados desde la <b>Vista de Detalle</b>.  Las vistas no tienen que ser iguales. <br/><br/>El formulario de Creación Rápida se muestra cuando hace clic en <b>Crear</b> dentro del subpanel de un módulo. Por omisión, el diseño del formulario de <b>Creación Rápida</b> es el mismo que el diseño de <b>Vista de Edición</b>. Puede personalizar el formulario de Creación Rápida de forma que contenga menos y/o diferentes campos que el diseño de Vista de Edición. <br><br>Puede establecer la seguridad del módulo utilizando la personalización del Diseño conjuntamente con la <b>Administración de Roles</b>.<br><br>',
		'existingModule' =>'Tras crear y personalizar este módulo, puede crear módulos adicionales o volver al paquete para <b>Publicar</b> o <b>Implantar</b> el mismo.<br><br>Si desea crear módulos adicionales, haga clic en <b>Duplicar</b> para crear un módulo con las mismas propiedades que el módulo actual, o vuelva a navegar al paquete y haga clic en <b>Nuevo Módulo</b>.<br><br> Si ya está listo para <b>Publicar</b> o <b>Implantar</b> el paquete que contiene este módulo, vuelva a navegar al paquete para realizar estas funciones. Puede publicar y implantar paquetes que contengan al menos un módulo.',
		'labels'=> 'Las etiquetas de los campos estándar así como las de los campos personalizados pueden ser cambiadas. Los cambios a las etiquetas de los campos no afectan a los datos almacenados en los mismos.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'A la izquierda tiene tres columnas. La columna "Por omisión" contiene los campos que serán mostrados en una vista de lista por defecto, la columna "Disponibles" contiene los campos que un usuario puede seleccionar para utilizar al crear una vista de lista personalizada, y la columna "Ocultos" contiene los campos actualmente deshabilitados pero disponibles para que usted, como administrador, los agregue a las columnas Por omisión o Disponibles de modo que los usuarios puedan utilizarlos.', 
		'savebtn'	=> 'Haciendo clic en <b>Guardar</b> guardará todos los cambios y los activará.',
		'Hidden' 	=> 'Los campos Ocultos son campos que no están disponibles actualmente para que los usuarios los utilicen en las vistas de lista.',
		'Available' => 'Los campos Disponibles son campos que no se muestran, pero que pueden ser habilitados por los usuarios.',
		'Default'	=> 'Los campos Por omisión son mostrados a los usuarios que no han personalizado la configuración de las vistas de lista.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Hay dos columnas mostradas en la izquierda. La columna "Por omisión" contiene los campos que serán mostrados en la vista de búsqueda, y la columna "Ocultos" contiene los campos disponibles para que usted, como administrador, los pueda agregar a la vista.', 
		'savebtn'	=> 'Al hacer clic en <b>Guardar e implantar</b> guardará todos los cambios y los activará.',
		'Hidden' 	=> 'Los campos ocultos son campos que no son mostrados en la vista de búsqueda.',
		'Default'	=> 'Los campos Por omisión serán mostrados en la vista de búsqueda.',
	),
	'layoutEditor'=>array(
		'default'	=> 'A la izquierda tiene dos columnas. La de la derecha, llamada Diseño Actual o Vista Preliminar de Diseño, es donde realiza los cambios al diseño del módulo. La de la izquierda, llamada Caja de Herramientas, contiene elementos útiles y herramientas para utilizar en la edición del diseño. <br/><br/>Cuando el área de diseño se llama Diseño Actual, está trabajando en una copia del diseño utilizada actualmente en la presentación del módulo.<br/><br/>Si se llama Vista Preliminar del Diseño, está trabajando con una copia guardada previamente pero que puede haber sido cambiada desde que se creó la versión que ven los usuarios de este módulo.',
		'saveBtn'	=> 'Al hacer clic en este botón guarda el diseño de forma que puede preservar sus cambios. Cuando vuelva a este módulo trabajará con el nuevo diseño. Su diseño, sin embargo, no será visto por el resto de usuarios del módulo hasta que haga clic en el botón Guardar e implantar.',
		'publishBtn'=> 'Haga clic en este botón para implantar el diseño. Esto implica que el diseño quedará visible de forma inmediata para los usuarios de este módulo.',
		'toolbox'	=> 'La caja de herramientas contiene una variedad de características útiles para editar diseños, incluyendo un área de papelera y una serie de elementos adicionales, como un conjunto de campos disponibles. Cualquiera de éstos puede ser arrastrado y soltado en el diseño.',
		'panels'	=> 'Esta área muestra cómo los usuarios del módulo verán su diseño cuando esté implantado.<br/><br/>Puede reposicionar los elementos, como campos, filas y paneles arrastrando y soltándolos; eliminar elementos arrastrándolos y soltándolos en área de la papelera en la caja de herramientas, o agregar nuevos elementos arrastrándolos desde la caja de herramientas y soltándolos en la posición deseada del diseño.',
	),
	'dropdownEditor'=>array(
		'default'	=> 'A la izquierda tiene dos columnas. La de la derecha, llamada Diseño Actual o Vista Preliminar de Diseño, es donde realiza los cambios al diseño del módulo. La de la izquierda, llamada Caja de Herramientas, contiene elementos útiles y herramientas para utilizar en la edición del diseño. <br/><br/>Cuando el área de diseño se llama Diseño Actual, está trabajando en una copia del diseño actualmente utilizado en la presentación del módulo.<br/><br/>Si se llama Vista Preliminar del Diseño, está trabajando con una copia guardada previamente pero que puede haber sido cambiada desde que se creó la versión que ven los usuarios de este módulo.', 
		'dropdownaddbtn'=> 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',
	),
	'exportcustom'=>array(
	    'exportHelp'=>'Las personalizaciones realizadas en el Estudio dentro de esta instancia pueden ser empaquetadas y desplegadas en otra instancia. <br><br>Proporcione un <b>Nombre de Paquete</b>. Puede proporcionar información sobre el <b>Autor</b> y la <b>Descripción</b> del paquete.<br><br>Seleccione los módulos que contienen las personalizaciones a exportar. (Sólo los módulos que contengan personalizaciones estarán disponibles para ser seleccionados.)<br><br>Haga clic en <b>Exportar</b> para crear un archivo .zip con el paquete que contenga las personalizaciones. El archivo .zip podrá ser subido en otra instancia mediante el <b>Cargador de Módulos</b>.',
	    'exportCustomBtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip con el paquete que contenga las personalizaciones que desea exportar.
',
	    'name'=>'El <b>Nombre</b> del paquete será mostrado en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.',
	    'author'=>'El <b>Autor</b> es el nombre de la entidad que ha creado el paquete. El Autor puede ser un individuo o una empresa.<br><br>El Autor será mostrado en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.
',
	    'description'=>'La <b>Descripción</b> del paquete será mostrada en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b1>. <br/><br/>Use las herramientas para crear y administrar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos instalados cambiando la disposición de los campos, seleccionando los campos que están disponibles y creando campos de datos personalizados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'appBtn' 	=> 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Use el <b>Estudio</b> para personalizar los módulos instalados.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Seleccione el componente de módulo que desea editar',
		'fieldsBtn'	=> 'Edite que información será almacenada en el módulo mediante el control de los <b>Campos</b> del mismo.<br/><br/>Puede editar y crear campos personalizados aquí.',
		'labelsBtn' => 'Haga clic en <b>Guardar</b> para guardar sus etiquetas personalizadas.'	,
		'layoutsBtn'=> 'Personalice los <b>Diseños</b> de las vistas de Edición, Detalle, Lista y Búsqueda.',
		'subpanelBtn'=> 'Edite la información que se muestra en los subpaneles de estos módulos.',
		'layoutsHelp'=> 'Seleccione un <b>Diseño a editar</b>.<br/<br/>Para cambiar el diseño que contiene los campos de introducción de datos, haga clic en <b>Vista de Edición</b>.<br/><br/>Para cambiar el diseño que muestra los datos introducidos en los campos en la Vista de Edición, haga clic en <b>Vista de Detalle</b>.<br/><br/>Para cambiar las columnas que aparecen en la lista por omisión, haga clic en <b>Vista de Lista</b>.<br/><br/>Para cambiar los diseños de los formularios de búsqueda Básica y Avanzada, haga clic en <b>Búsqueda</b>.',
		'subpanelHelp'=> 'Seleccione un <b>Subpanel</b> a editar.',
		'searchHelp' => 'Seleccione un diseño de <b>Búsqueda</b> a editar.',
		'labelsBtn'	=> 'Edite las <b>Etiquetas</b> a mostrar para los valores de este módulo.',
        'newPackage'=>'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'mbHelp'    => '<b>Bienvenido al Constructor de Módulos.</b><br/><br/>Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados. <br/><br/>Para comenzar, haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete, o seleccione el paquete a editar.<br/><br/> Un <b>paquete</b> actúa como contenedor de módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más módulos que pueden estar relacionados entre ellos o con otros módulos de la aplicación. <br/><br/>Por ejemplo: puede crear un paquete que contenga un módulo personalizado que esté relacionado con el módulo estándar de Cuentas. O, puede crear un paquete que contenga varios módulos nuevos que funcionan conjuntamente como un proyecto y que están relacionados entre ellos y con otros módulos de la aplicación.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
	),
	
),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Listas Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar al Asistente en el futuro.',
'LBL_AS_IGNORE' => 'Ignorar al Asistente en el futuro.',
'LBL_AS_SAYS' => 'El Asistente Sugiere:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Módulos',
'LBL_STUDIO' => 'Estudio',
'LBL_DROPDOWNEDITOR' => 'Editor de Listas Desplegables',
'LBL_EDIT_DROPDOWN'=>'Editar Lista Desplegable',
'LBL_DEVELOPER_TOOLS' => 'Herramientas de Desarrollo',
'LBL_SUGARPORTAL' => 'Editor del Portal Sugar',
'LBL_SYNCPORTAL' => 'Sincronizar Portal',
'LBL_PACKAGE_LIST' => 'Lista de Paquetes',
'LBL_HOME' => 'Inicio',
'LBL_NONE'=>'-Ninguno-',

'LBL_ADD_FIELDS'=>'Agregar Campos Personalizados',
'LBL_AVAILABLE_SUBPANELS'=>'Subpaneles Disponibles',
'LBL_ADVANCED'=>'Avanzada',
'LBL_ADVANCED_SEARCH'=>'Búsqueda Avanzada',
'LBL_BASIC'=>'Básica',
'LBL_BASIC_SEARCH'=>'Búsqueda Básica',
'LBL_CURRENT_LAYOUT'=>'Diseño',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalizar',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vista de Lista de Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Búsqueda de Sugar Dashlet',
'LBL_DASHLETSEARCHVIEW'=>'Búsqueda de Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_DETAILVIEW'=>'Vista de Detalle',
'LBL_DROP_HERE' => '[Soltar Aquí]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Diseño',
'LBL_EDIT_ROWS'=>'Editar Filas',
'LBL_EDIT_COLUMNS'=>'Editar Columnas',
'LBL_EDIT_LABELS'=>'Editar Etiquetas',
'LBL_EDIT_FIELDS'=>'Editar Campos Personalizados',
'LBL_EDIT_PORTAL'=>'Editar Portal para ',
'LBL_EDIT_FIELDS'=>'Editar Campos',
'LBL_EDITVIEW'=>'Vista de Edición',
'LBL_FILLER'=>'(relleno)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Falla al guardar',
'LBL_FAILED_PUBLISHED' => 'Falla al publicar',
'LBL_HOMEPAGE_PREFIX' => 'Mi',
'LBL_LAYOUT_PREVIEW'=>'Vista Preliminar del Diseño',
'LBL_LAYOUTS'=>'Diseños',
'LBL_LISTVIEW'=>'Vista de Lista', 
'LBL_MODULES'=>'Módulos',
'LBL_MODULE_TITLE' => 'Estudio',
'LBL_NEW_PACKAGE' => 'Nuevo Paquete',
'LBL_NEW_PANEL'=>'Nuevo Panel',
'LBL_NEW_ROW'=>'Nueva Fila',
'LBL_PACKAGE_DELETED'=>'Paquete Eliminado',
'LBL_PUBLISHING' => 'Publicando ...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_SELECT_FILE'=> 'Seleccionar Archivo',
'LBL_SAVE_LAYOUT'=> 'Guardar Diseño',
'LBL_SELECT_A_SUBPANEL' => 'Seleccione un Subpanel',
'LBL_SELECT_SUBPANEL' => 'Seleccione Subpanel',
'LBL_SUBPANELS' => 'Subpaneles',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Título:',
'LBL_SEARCH_FORMS' => 'Búsqueda',
'LBL_SEARCH'=>'Búsqueda',
'LBL_STAGING_AREA' => 'Área de Diseño (arrastre y suelte elementos aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_TOOLBOX' => 'Caja de Herramientas',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Ver Papelera Sugar',
'LBL_VIEW' => 'Ver',
'LBL_QUICKCREATE' => 'Creación Rápida',
'LBL_EDIT_DROPDOWNS' => 'Editar una Lista Desplegable Global',
'LBL_ADD_DROPDOWN' => 'Agregar una nueva Lista Desplegable Global',
'LBL_BLANK' => '-vacío-',
'LBL_TAB_ORDER' => 'Orden de Tabulación',

'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Elementos de Lista',
'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del Elemento',
'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de Visualización',

'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar con Vista de Detalle',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccione esta opción para sincronizar el diseño de la Vista de Edición con el diseño correspondiente de la Vista de Detalle. Los campos y su ubicación en la Vista de Edición serán sincronizados y guardados automáticamente en la Vista de Detalle al hacer clic en Guardar o Guardar e implantar. <br>Luego no será posible hacer cambios de diseño desde la Vista de Detalle.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Esta Vista de Detalle está sincronizada con la Vista de Edición correspondiente. <br> Los campos y su ubicación son un reflejo de los campos y su ubicación en la Vista de Edición.<br> Las modificaciones a la Vista de Detalle no pueden ser guardadas desde ésta página. Haga los cambios o quite la sincronización en la página de Vista de Edición. ',
'LBL_COPY_FROM_EDITVIEW' => 'Copiar de Vista de Edición',
'LBL_DROPDOWN_BLANK_WARNING' => 'Ingrese valores tanto para el Nombre como para la Etiqueta. Para agregar un elemento en blanco, haga clic en Agregar sin escribir ningún valor en Nombre y Etiqueta.',

'LBL_WIRELESSLAYOUTS'=>'Diseños para celulares',
'LBL_WIRELESSEDITVIEW'=>'Vista de Edición para celulares',
'LBL_WIRELESSDETAILVIEW'=>'Vista de Detalle para celulares',
'LBL_WIRELESSLISTVIEW'=>'Vista de Lista para celulares',
'LBL_WIRELESSSEARCH'=>'Búsqueda para celulares',

//RELATIONSHIPS
'LBL_MODULE' => 'Módulo',
'LBL_LHS_MODULE'=>'Módulo Principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relación creada en el Estudio',
'LBL_RELATIONSHIPS'=>'Relaciones',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relación',
'LBL_REL_NAME' => 'Nombre',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipo',
'LBL_RHS_MODULE'=>'Módulo Relacionado',
'LBL_NO_RELS' => 'Sin Relaciones',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condición Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Columna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanel de',
'LBL_RELATIONSHIP_ONLY'=>'No se creará ningún elemento visible para esta relación ya que existía anteriormente una relación visible entre estos dos módulos.',
'LBL_ONETOONE' => 'Uno a Uno',
'LBL_ONETOMANY' => 'Uno a Muchos',
'LBL_MANYTOONE' => 'Muchos a Uno',
'LBL_MANYTOMANY' => 'Muchos a Muchos',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Seleccione una función o componente.',
'LBL_QUESTION_MODULE1' => 'Seleccione un módulo.',
'LBL_QUESTION_EDIT' => 'Seleccione un módulo a editar.',
'LBL_QUESTION_LAYOUT' => 'Seleccione un diseño a editar.',
'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
'LBL_QUESTION_SEARCH' => 'Seleccione un diseño de búsqueda a editar.',
'LBL_QUESTION_MODULE' => 'Seleccione un componente de módulo a editar.',
'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
'LBL_QUESTION_DROPDOWN' => 'Seleccione una lista desplegable a editar, o cree una nueva lista desplegable.',
'LBL_QUESTION_DASHLET' => 'Seleccione un diseño de dashlet a editar.',

//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionado Con',
'LBL_NAME'=>'Nombre',
'LBL_LABELS'=>'Etiquetas',
'LBL_MASS_UPDATE'=>'Actualización Masiva',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Por Defecto',
'LBL_REQUIRED'=>'Requerido',
'LBL_DATA_TYPE'=>'Tipo',
'LBL_HCUSTOM'=>'PERSONALIZADO',
'LBL_HDEFAULT'=>'POR OMISION',
'LBL_LANGUAGE'=>'Idioma:',
'LBL_CUSTOM_FIELDS' => '* campo creado en el Estudio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
'LBL_SECTION_PACKAGES' => 'Paquetes',
'LBL_SECTION_PACKAGE' => 'Paquete',
'LBL_SECTION_MODULES' => 'Módulos',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listas Desplegables',
'LBL_SECTION_PROPERTIES' => 'Propiedades',
'LBL_SECTION_DROPDOWNED' => 'Editar Lista Desplegable',
'LBL_SECTION_HELP' => 'Ayuda',
'LBL_SECTION_ACTION' => 'Acción',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Etiqueta de Panel',
'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
'LBL_SECTION_DEPLOY' => 'Implantar',
'LBL_SECTION_MODULE' => 'Módulo',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilidad',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Por omisión',
'LBL_HIDDEN'=>'Oculto',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuación se muestran tres columnas. La columna <b>Por omisión</b> contiene los campos que se muestran en una lista por defecto. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para que usted como administrador pueda, o bien añadirlas a las columnas Por omisión, o a las Adicionales para que sean usadas por usuarios.', 
'LBL_LISTVIEW_EDIT'=>'Editor de Listas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Diseño por omisión',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Agregar',
'LBL_BTN_SAVE'=>'Guardar',
'LBL_BTN_SAVE_CHANGES'=>'Guardar Cambios',
'LBL_BTN_DONT_SAVE'=>'Descartar Cambios',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_CLOSE'=>'Cerrar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar e implantar',
'LBL_BTN_NEXT'=>'Siguiente',
'LBL_BTN_BACK'=>'Anterior',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_ADDCOLS'=>'Agregar Columnas',
'LBL_BTN_ADDROWS'=>'Agregar Filas',
'LBL_BTN_ADDFIELD'=>'Agregar Campo',
'LBL_BTN_ADDDROPDOWN'=>'Agregar Lista Desplegable',
'LBL_BTN_SORT_ASCENDING'=>'Orden ascendente',
'LBL_BTN_SORT_DESCENDING'=>'Orden descendente',
'LBL_BTN_EDLABELS'=>'Editar Etiquetas',
'LBL_BTN_UNDO'=>'Deshacer',
'LBL_BTN_REDO'=>'Rehacer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Campo Personalizado',
'LBL_BTN_EXPORT'=>'Exportar Personalizaciones',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Implantar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Ver Diseños',
'LBL_BTN_VIEW_FIELDS'=>'Ver Campos',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Ver Relaciones',
'LBL_BTN_ADD_RELATIONSHIP'=>'Agregar Relación',
'LBL_BTN_RENAME_MODULE' => 'Renombrar módulo',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: El campo ya existe',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de clave no válido: [']",
'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
'ERROR_MINIMUM_FIELDS' => 'El diseño debe contener al menos un campo',
 'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
 'ERROR_REQUIRED_FIELDS' => '¿Está seguro de continuar? Los siguientes campos obligatorios no constan en el diseño:  ',
'ERROR_ARE_YOU_SURE' => '¿Está seguro de continuar?',

//SUGAR PORTAL
'LBL_PORTAL'=>'Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, introduzca el URL de la instancia de portal que desea actualizar.',
'LBL_SP_UPLOADSTYLE'=>'Seleccione la hoja de estilos a subir desde su equipo.<br> La hoja de estilos será utilizada en el Portal de Sugar la próxima vez que realice una sincronización.',
'LBL_SP_UPLOADED'=> 'Subido',
'ERROR_SP_UPLOADED'=>'Por favor, asegúrese de que está subiendo una hoja de estilos CSS.',
'LBL_SP_PREVIEW'=>'Aquí tiene una vista preliminar de la apariencia que tendrá el Portal de Sugar usando la hoja de estilos.',
'LBL_PORTALSITE'=>'URL de Portal de Sugar: ',
'LBL_PORTAL_GO'=>'Adelante',
'LBL_UP_STYLE_SHEET'=>'Subir Hoja de Estilos',
'LBL_QUESTION_SUGAR_PORTAL' => 'Seleccione el diseño de Portal de Sugar a editar.',
'LBL_QUESTION_PORTAL' => 'Seleccione el diseño de portal a editar.',
'LBL_SUGAR_PORTAL'=>'Editor del Portal de Sugar',

//PORTAL PREVIEW
'LBL_CASES'=>'Casos',
'LBL_NEWSLETTERS'=>'Boletines de Noticias',
'LBL_BUG_TRACKER'=>'Seguimiento de Incidencias',
'LBL_MY_ACCOUNT'=>'Mi Cuenta',
'LBL_LOGOUT'=>'Salir',
'LBL_CREATE_NEW'=>'Crear Nuevo',
'LBL_LIST'=>'Lista',
'LBL_LOW'=>'Baja',
'LBL_MEDIUM'=>'Media',
'LBL_HIGH'=>'Alta',
'LBL_NUMBER'=>'Número:',
'LBL_PRIORITY'=>'Prioridad:',
'LBL_SUBJECT'=>'Asunto',
'LBL_DESCRIPTION'=>'Descripción:',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nombre del Paquete:',
'LBL_MODULE_NAME'=>'Nombre del Módulo:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descripción:',
'LBL_KEY'=>'Clave:',
'LBL_ADD_README'=>' Léame',
'LBL_MODULES'=>'Módulos:',
'LBL_LAST_MODIFIED'=>'Última Modificación:',
'LBL_NEW_MODULE'=>'Nuevo Módulo',
'LBL_LABEL'=>'Etiqueta:',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_WIDTH'=>'Ancho',
'LBL_PACKAGE'=>'Paquete:',
'LBL_TYPE'=>'Tipo:',
'LBL_TEAM_SECURITY'=>'Seguridad de Equipos',
'LBL_ASSIGNABLE'=>'Asignable',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Compañía',
'LBL_ISSUE'=>'Incidencia',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Archivo',
'LBL_NAV_TAB'=>'Pestaña de Navegación',
'LBL_CREATE'=>'Crear',
'LBL_LIST'=>'Lista',
'LBL_LIST_VIEW'=>'Vista de Lista',
'LBL_HISTORY'=>'Ver Historial',
'LBL_RESTORE_DEFAULT'=>'Restaurar Vista por omisión',
'LBL_ACTIVITIES'=>'Actividades',
'LBL_SEARCH'=>'Buscar',
'LBL_NEW'=>'Nuevo',
'LBL_TYPE_BASIC'=>'básica',
'LBL_TYPE_COMPANY'=>'compañía',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'incidencia',
'LBL_TYPE_SALE'=>'venta',
'LBL_TYPE_FILE'=>'archivo',
'LBL_RSUB'=>'Este es el subpanel que se mostrará en su módulo',
'LBL_MSUB'=>'Este es el subpanel que su módulo proporciona para que sea mostrado por el módulo relacionado',
'LBL_MB_IMPORTABLE'=>'Importable',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'oculto',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ha sido eliminado',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalizaciones',
'LBL_EC_NAME'=>'Nombre del Paquete:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descripción:',
'LBL_EC_KEY'=>'Clave:',
'LBL_EC_CHECKERROR'=>'Por favor, seleccione un módulo.',
'LBL_EC_CUSTOMFIELD'=>'campos personalizados',
'LBL_EC_CUSTOMLAYOUT'=>'diseño personalizado',
'LBL_EC_NOCUSTOM'=>'No se ha personalizado ningún módulo.',
'LBL_EC_EMPTYCUSTOM'=>'tiene vacías las personalizaciones.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El módulo ha sido implantado.',
'LBL_UNDEFINED' => 'no definido',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Error al recuperar datos',
'LBL_AJAX_TIME_DEPENDENT' => 'Hay en progreso una acción dependiente del tiempo. Por favor, espere e inténtelo de nuevo en unos instantes.',
'LBL_AJAX_LOADING' => 'Cargando...',
'LBL_AJAX_DELETING' => 'Eliminando...',
'LBL_AJAX_BUILDPROGRESS' => 'Construcción en progreso...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Implantación en progreso...',
'LBL_AJAX_FIELD_EXISTS' =>'El nombre del campo que ha introducido ya existe. Por favor, introduzca un nuevo nombre para el campo.',
//JS
'LBL_JS_REMOVE_PACKAGE' => '¿Está seguro de quitar este paquete? Esto eliminará permanentemente todos los archivos asociados con este paquete.',
'LBL_JS_REMOVE_MODULE' => '¿Está seguro de quitar este módulo? Esto eliminará permanentemente todos los archivos asociados con este módulo.',

'LBL_DEPLOY_IN_PROGRESS' => 'Implantando paquete',
'LBL_JS_DEPLOY_PACKAGE' => 'Las personalizaciones realizadas mediante el Estudio serán reemplazadas cuando este módulo sea reimplantado. ¿Está seguro de proceder?',
'LBL_JS_VALIDATE_NAME'=>'Nombre - Debe ser alfanumérico, comenzar con letra y no contener espacios',
'LBL_JS_VALIDATE_KEY'=>'Clave - Debe ser alfanumérica, comenzar con letra y no contener espacios',
'LBL_JS_VALIDATE_LABEL'=>'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
'LBL_JS_VALIDATE_TYPE'=>'Por favor, seleccione de la lista anterior el tipo de módulo que quiere construir',
'LBL_JS_VALIDATE_REL_NAME'=>'Nombre - Debe ser alfanumérico y sin espacios',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Al eliminar un campo personalizado, eliminará también los datos relacionados de la base de datos. Además, el campo no será parte de ningún diseño y no podrá ser usado en reportes.'
		. "\\n\\nEl cambio en los reportes se verá la próxima vez que ingrese a Sugar. Los reportes que contengan este campo necesitan ser actualizados antes de ser ejecutados." 
		. "\\n\\n¿Desea continuar?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'¿Está seguro de eliminar esta relación?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Esto hará la relación permantente. ¿Está seguro de implantar esta relación?',
'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados. ¿Desea guardarlos ahora?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '¿Guardar Cambios?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Seleccione el tipo de datos acorde con los valores de datos que serán introducidos en el campo.',
'LBL_POPHELP_SEARCHABLE'=>'Seleccione el nivel de empuje para este campo. <br />A los campos con mayor incremento se les dará mayor peso cuando se realice la búsqueda. <br />Cuando se hagan búsquedas, los registros coincidentes que contengan campos con mayor peso aparecerán en los primeros lugares de la lista de resultados.<br /> Si cambia el nivel de empuje de un campo, ejecute una indización del sistema para aplicar el cambio. <br/> Asegúrese de seleccionar la eliminación de datos existentes cuando realice la indización del sistema.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sí</b>: El campo será incluido en una operación de importación.<br><b>No</b>: El campo no será incluido en una importación.<br><b>Obligatorio</b>: Debe suministrarse un valor para el campo en toda importación.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Habilitado</b>: El campo aparecerá en Combinar Duplicados, pero no estará disponible para ser utilizado en las condiciones de filtrado de la Búsqueda de Duplicados.<br><b>Deshabilitado</b>: El campo no aparecerá en Combinar Duplicados y tampoco estará disponible para ser utilizado como condición de filtrado en la Búsqueda de Duplicados.'

. '<br><b>En Filtro</b>: El campo aparecerá en Combinar Duplicados y también estará disponible para la Búsqueda de Duplicados.<br><b>Solo en Filtro</b>: El campo no aparecerá en Combinar Duplicados, pero estará disponible para la Búsqueda de Duplicados.<br><b>Filtro Seleccionado por Omisión</b>: El campo será utilizado en la condición de filtrado por defecto de la página de Búsqueda de Duplicados y también aparecerá en Combinar Duplicados.',

 'LBL_CONFIRM_FIELD_DELETE'=>'Al eliminar este campo personalizado serán eliminados todos los datos almacenados en la base de datos para el mismo. El campo no aparecerá en ningún diseño de módulo. ¿Desea continuar?',
 'LBL_CONFIRM_LOWER_LENGTH' => 'Los valores podrían ser truncados y esta acción no puede deshacerse. ¿Está seguro de continuar?',
 'LBL_POPHELP_IMAGE_WIDTH'=>'Escriba un número para el ancho, medido en pixeles.<br> La imagen cargada será ajustada a este ancho.',
 'LBL_POPHELP_IMAGE_HEIGHT'=>'Escriba un número para la altura, medida en pixeles.<br> La imagen cargada será ajustada a esta altura.',
'LBL_POPHELP_GLOBAL_SEARCH'=>'Seleccione para poder usar este campo en la Búsqueda Global de este módulo.',

 //Revert Module labels
 'LBL_RESET' => 'Restaurar',
 'LBL_RESET_MODULE' => 'Restaurar módulo',
 'LBL_REMOVE_CUSTOM' => 'Eliminar personalizaciones',
 'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar relaciones',
 'LBL_RESET_LABELS' => 'Restaurar etiquetas',
 'LBL_RESET_LAYOUTS' => 'Restaurar diseños"',
 'LBL_REMOVE_FIELDS' => 'Eliminar campos personalizados',
 'LBL_CLEAR_EXTENSIONS' => 'Limpiar extensiones',
 'LBL_HISTORY_TIMESTAMP' => 'Sello de hora',
 'LBL_HISTORY_TITLE' => ' Historia',

'fieldTypes' => array(
		'varchar'=>'Campo de Texto', 
		'int'=>'Entero', 
		'float'=>'Flotante',
		'decimal'=>'Decimal',
		'bool'=>'Casilla de Verificación',
		'enum'=>'Desplegable',
		'multienum' => 'Selección Múltiple',
                'date'=>'Fecha', 
                'datetimecombo'=>'FechaHora', 
                'phone' => 'Teléfono', 
                'currency' => 'Moneda', 
                'html' => 'HTML', 
                'radioenum' => 'Opción',
                'relate' => 'Relacionado', 
                'address' => 'Dirección', 
                'text' => 'Área de Texto', 
                'url' => 'Enlace', 
                'iframe' => 'IFrame', 
),
'labelTypes' => array(
    "" => "Etiquetas usadas frecuentemente",
	"all" => "Todas las etiquetas",
),
	    'parent' => 'Posiblemente relacionado con',
 	    'popupHelp' =>'Los diseños <b>Emergentes</b> que pueden ser personalizados aparecen aqui.<br>',
 	    'PopupListViewBtn' =>'Las <b>Listas Emergentes</b> muestran registros basados en las Búsquedas emergentes.',
 	    'PopupSearchViewBtn' =>'La <b>Búsqueda Emergente</b> muestra registros de las Listas Emergentes.',
 		'editDropDownBtn' => 'Editar una Lista Desplegable global',
 		'convertLeadHelp' => "Aqui puede agregar módulos para el diseño de la pantalla de conversión y modificar el diseño de módulos existentes.<br/>
 		Puede reordenar los módulos arrastrando sus filas hasta la tabla.<br/><br/>
 		
 		<b>Módulo:</b> El nombre del módulo.<br/><br/>
 		<b>Obligatorio:</b> Los módulos obligatorios deben ser creados o seleccionados antes de que el interesado pueda ser convertido.<br/><br/>
 		<b>Copiar datos:</b> Si se selecciona, los campos del interesado serán copiados a los campos con el mismo nombre en los registros creados.<br/><br/>
 		<b>Permitir selección:</b> Los módulos con campos relacionados en Contactos pueden ser seleccionados en lugar de crearlos durante el proceso de conversión de Interesado.<br/><br/>
 		<b>Editar:</b> Modificar el diseño de conversión para este módulo.<br/><br/>
 		<b>Borrar:</b> Quitar este módulo del diseño de conversión.<br/><br/>
 		",
 'LBL_DEPLOYE_COMPLETE'=>'Implantación completada',
 'LBL_DEPLOY_FAILED'   =>'Ocurrió un error durante el proceso de implantación, podría no haberse instalado correctamente el paquete.',
 'LBL_POPUP'=>'Emergente',
 'LBL_POPUPLISTVIEW'=>'Lista emergente',
 'LBL_POPUPSEARCH'=>'Búsqueda emergente',
 'LBL_TAB_PANELS' => 'Habilitar pestañas',
 'LBL_TAB_PANELS_HELP' => 'Cuando las pestañas están habilitadas, se puede usar el desplegable "Mostrar como"<br/>en cada sección para indicar si se mostrará como pestaña o panel.',
'LBL_TABDEF_TYPE' => 'Mostrar como',
'LBL_TABDEF_TYPE_HELP' => 'Seleccionar la manera en que se mostrará este panel. Esta opción solamente tiene efecto si se habilitaron las pestañas para esta vista.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestaña',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccione Panel para que se muestre este bloque como un panel en el diseño de la vista. Seleccione Pestaña para que este panel se muestre dentro de una pestaña en el diseño. Cuando se especifica Pestaña, los subsiguientes bloques para los que se defina mostrar como Panel, se mostrarán dentro de esa pestaña. <br/>Se creará una pestaña nueva para cada panel para el cual se seleccione Pestaña. Si se selecciona Pestaña para un panel bajo el primero, el primer panel será necesariamente una Pestaña.',
'LBL_TABDEF_COLLAPSE' => 'Plegar',
'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccione para que el estado por omisión del panel sea plegado.',
 'LBL_QUESTION_POPUP' => 'Seleccionar un diseño emergente para editarlo.',
 'LBL_ILLEGAL_FIELD_VALUE' =>"La clave de un desplegable no puede incuir comillas.",
 'LBL_CONFIRM_SAVE_DROPDOWN' =>"Ha seleccionado este elemento para quitarlo de la lista desplegable. Cualquier campo que actualmente contenga este valor ya no lo mostrará en el futuro y el valor no estará disponible en la lista desplegable. ¿Está seguro de continuar?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Seleccionar para validar este campo como si fuera un número de teléfono <br>" .
					             "de 10 dígitos, con el código de país igual a 1 y<br>" .
                                 "para aplicar un formato de teléfono de EE.UU. cuando se guarde el registro.<br>" .
                                 "Se aplicará el siguiente formato: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'Todos los módulos',


);

