<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input type="submit" class="button" value="Ver Proceso" id="proceso" name="proceso"/>',
          ),
          4 => 
          array (
            'customCode' => '{if $fields.status.value eq "interview-not-attended"}<input type="submit" class="button" value="Reagendar" id="reagendar" name="reagendar"/>{/if}',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 => 
        array (
          'file' => 'custom/include/scripts/sistema/Accounts/SpAccountsDetail.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'estado_estudiante',
            'comment' => 'Estado del Estudiante',
            'label' => 'LBL_ESTADOESTUDIANTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombrecorto',
            'comment' => 'Nombre corto',
            'label' => 'LBL_NOMBRECORTO',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => 'Estado Estudiante',
            'label' => 'LBL_STATUS',
            'customCode' => '{$fields.status.value} <input type="hidden" id="parent_id" name="parent_id" value="{$fields.id.value}">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'medioingreso',
            'comment' => 'Medio ingreso',
            'label' => 'LBL_MEDIOINGRESO',
          ),
          1 => 
          array (
            'name' => 'dateofbirth',
            'comment' => 'Fecha de Nacimiento del Estudiante',
            'label' => 'LBL_DATEOFBIRTH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'groupassociation',
            'comment' => 'Grupo de Asociacion',
            'label' => 'LBL_GROUPASSOCIATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'lae',
            'comment' => 'Donde escuchaste sobre LAE?',
            'label' => 'LBL_LAE',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'paisinterest',
            'comment' => 'Pais de interes',
            'label' => 'LBL_PAISINTEREST',
          ),
          1 => 
          array (
            'name' => 'areainterest',
            'comment' => 'Area de interes',
            'label' => 'LBL_AREAINTEREST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'levelinterest',
            'comment' => 'Nivel de interes',
            'label' => 'LBL_LEVELINTEREST',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'potential',
            'comment' => 'Potencial',
            'label' => 'LBL_POTENTIAL',
          ),
          1 => 
          array (
            'name' => 'registrationdate',
            'comment' => 'Fecha de registro del estudiante',
            'label' => 'LBL_REGISTRATIONDATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
