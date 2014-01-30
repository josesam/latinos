<?php 
$layout_defs['Accounts']['subpanel_setup']['historicos'] =
        array('order' => 49,
            'module' => 'Historicos',
            'subpanel_name' => 'ForHistoricos',
            'get_subpanel_data' => 'function:getHistorico',
            'generate_select' => true,
            'title_key' => 'LBL_HISTORICO_APLICACION',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Accounts/subpanels_queries.php',
                'account_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);
