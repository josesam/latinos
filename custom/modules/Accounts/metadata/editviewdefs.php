<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input accesskey="a" title="Guardar"  id="SAVE_HEADER" class="button primary"
onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; return check_custom_data();" 
type="submit" name="button" value="Guardar">',
          ),
          1 => 'CANCEL',
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
          'file' => 'custom/include/scripts/genericas/varios/jquery.maskedinput.js',
        ),
        2 => 
        array (
          'file' => 'custom/include/scripts/sistema/Accounts/SpAccountsEdit.js',
        ),
        3 => 
        array (
          'file' => 'custom/include/scripts/sistema/Accounts/SpCatalogos.js',
        ),
        4 => 
        array (
          'file' => 'custom/include/scripts/sistema/Accounts/SpMascaras.js',
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
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'estado_estudiante',
            'comment' => 'Es un cliente o Prospecto',
            'label' => 'LBL_ESTADOCLIENTE',
            'customCode'=>'{$fields.estado_estudiante.value}',  
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'medioingreso',
            'comment' => 'Medio ingreso',
            'label' => 'LBL_MEDIOINGRESO',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => 'Estado Estudiante',
            'label' => 'LBL_STATUS',
            'customCode' => '{$fields.status.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dateofbirth',
            'comment' => 'Fecha de Nacimiento del Estudiante',
            'label' => 'LBL_DATEOFBIRTH',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
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
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'groupassociation',
            'comment' => 'Grupo de Asociacion',
            'label' => 'LBL_GROUPASSOCIATION',
          ),
          1 => 
          array (
            'name' => 'lae',
            'comment' => 'Donde escuchaste sobre LAE?',
            'label' => 'LBL_LAE',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'levelinterest',
            'comment' => 'Nivel de interes',
            'label' => 'LBL_LEVELINTEREST',
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
            'name' => 'paisinterest',
            'comment' => 'Pais de interes',
            'label' => 'LBL_PAISINTEREST',
            'customCode' => '<input name="paisinterest" type="text" readonly="true" id="paisinterest"  value="{$fields.paisinterest.value}"><a id="lb_paisinteres" href="javascript:void(0);">&nbspBuscar Pais</a>',
          ),
          1 => 
          array (
            'name' => 'description',
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
            'customCode' => '{$fields.registrationdate.value}',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
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
