<?php 
 //WARNING: The contents of this file are auto-generated



/*
 * @package custom.extensions.modules.vardefs
 * @josesam
 */
$dictionary['Account']['fields']['lae']=array(
            'name' => 'lae',
            'vname' => 'LBL_LAE',
	    'type' => 'multienum',
	    'required' => false,
	    'options' => 'lae_dom',
	    'comment' => 'Donde escuchaste sobre LAE?',
			'help' => 'Donde escuchaste sobre LAE?',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'isMultiSelect'=>true
            
);

$dictionary['Account']['fields']['levelinterest']=array(
            'name' => 'levelinterest',
		    'vname' => 'LBL_LEVELINTEREST',
		    'type' => 'multienum',
		    'required' => false,
			'options' => 'levelinteres_dom',
		    'comment' => 'Area de interes',
			'help' => 'Area de interes',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'isMultiSelect'=>true
			
            
);




$dictionary['Account']['fields']['areainterest']=array(
            'name' => 'areainterest',
		    'vname' => 'LBL_AREAINTEREST',
		    'type' => 'multienum',
		    'required' => false,
			'options' => 'areainteres_dom',
	
		    'comment' => 'Area de interes',
			'help' => 'Area de interes',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'isMultiSelect'=>true
			
            
);
$dictionary['Account']['fields']['paisinterest']=array(
            'name' => 'paisinterest',
		    'vname' => 'LBL_PAISINTEREST',
		    'type' => 'varchar',
		    'required' => false,
			'len' => '255',
    
		    'comment' => 'Pais de interes',
			'help' => 'Pais de interes',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			
			
            
);

$dictionary['Account']['fields']['nombrecorto']=array(
            'name' => 'nombrecorto',
		    'vname' => 'LBL_NOMBRECORTO',
		    'type' => 'varchar',
		    'required' => false,
			'len' => '255',
    
		    'comment' => 'Nombre corto',
			'help' => 'nombre corto',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			
			
            
);

$dictionary['Account']['fields']['groupassociation']=array(
                    'name' => 'groupassociation',
		    'vname' => 'LBL_GROUPASSOCIATION',
		    'type' => 'enum',
		    'required' => false,
                    'len' => '100',
                    'options' => 'groupassociation_dom',
		    'comment' => 'Grupo de Asociacion',
                    'help' => 'Grupo de Asociacion',
                    'importable' => 'true',
		   'duplicate_merge' => 'disabled',
);


$dictionary['Account']['fields']['potential']=array(
            'name' => 'potential',
		    'vname' => 'LBL_POTENTIAL',
		    'type' => 'enum',
		    'required' => false,
			'options' => 'potential_dom',
		    'len' => '35',
		    'comment' => 'Potencial',
			'help' => 'Potencial',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'audited' => true,
);



$dictionary['Account']['fields']['status']=array(
            'name' => 'status',
		    'vname' => 'LBL_STATUS',
		    'type' => 'enum',
		    'required' => false,
			'options' => 'estatus_dom',
		    'len' => '35',
			'default'=>'',
		    'comment' => 'Estado Estudiante',
			'help' => 'Estado Estudiante',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'audited' => true,
);


$dictionary['Account']['fields']['dateofbirth']=array(
            'name' => 'dateofbirth',
		    'vname' => 'LBL_DATEOFBIRTH',
		    'type' => 'date',
		    'required' => false,
			'comment' => 'Fecha de Nacimiento del Estudiante',
			'help' => 'Fecha de Nacimiento del Estudiante',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'audited' => false,
);

$dictionary['Account']['fields']['registrationdate']=array(
            'name' => 'registrationdate',
            'vname' => 'LBL_REGISTRATIONDATE',
	    'type' => 'date',
		    'required' => false,
			'comment' => 'Fecha de registro del estudiante',
			'help' => 'Fecha de registro del estudiante',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'audited' => true,
                        'enable_range_search'=>true,
                        'options' => 'date_range_search_dom',
);




$dictionary['Account']['fields']['medioingreso']=array(
            'name' => 'medioingreso',
            'vname' => 'LBL_MEDIOINGRESO',
            'type' => 'enum',
	    'required' => true,
            'options' => 'medioingreso_dom',
            'len' => '100',
            'comment' => 'Medio ingreso',
            'help' => 'Medio Ingreso',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
);

$dictionary['Account']['fields']['lead_source']=array(
    'name' => 'lead_source',
    'vname' => 'LBL_LEAD_SOURCE',
    'type' => 'text',
    'required' => false,
    'len' => '255',
    'comment' => 'Lead Source',
    'help' => 'nombre corto',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Account']['fields']['estado_estudiante']=array(
            'name' => 'estado_estudiante',
            'vname' => 'LBL_ESTADOESTUDIANTE',
	    'type' => 'enum',
	    'required' => false,
	    'options' => 'estado_cliente_dom',
	    'comment' => 'Estado del Estudiante',
	    'help' => 'Estado del estudiante',
	    'importable' => 'true',
	    'duplicate_merge' => 'disabled',
            'default'=>'Prospecto'
);

$dictionary['Account']['fields']['historico']=array(
    'name'=>'historico',
    'vname'=>'LBL_HISTORICO',
    'type' => 'varchar',
    'function' =>
    array (
        'name' => 'getHistoricoWidget',
        'returns' => 'html',
        'include' => 'custom/include/SugarHistorico/SugarHistorico.php',
      ),
'source' => 'non-db',
'group' => 'historico',
'merge_filter' => 'enabled',

    
    
);

$dictionary['Account']['fields']['email1']['required']=true;



 // created: 2013-04-27 06:20:31
$dictionary['Account']['fields']['registrationdate']['display_default']='now';
$dictionary['Account']['fields']['registrationdate']['options']='date_range_search_dom';
$dictionary['Account']['fields']['registrationdate']['comments']='Fecha de registro del estudiante';
$dictionary['Account']['fields']['registrationdate']['merge_filter']='disabled';

 
?>