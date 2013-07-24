<?php 
 //WARNING: The contents of this file are auto-generated



/*
 * Campos nuevos necesario para crear una 
 * oportunidad
 * @author josesambrano
 */
$dictionary['Opportunity']['fields']['destination']=array(
    'name' => 'destination',
    'vname' => 'LBL_DESTINATION',
    'type' => 'varchar',
    'required' => true,
    'len' => '255',
    'comment' => 'Destino',
    'help' => 'Destino',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Opportunity']['fields']['city']=array(
    'name' => 'city',
    'vname' => 'LBL_CITY',
    'type' => 'varchar',
    'required' => true,
    'len' => '255',
    'comment' => 'Ciudad',
    'help' => 'Ciudad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Opportunity']['fields']['institution']=array(
    'name' => 'institution',
    'vname' => 'LBL_INSTITUTION',
    'type' => 'varchar',
    'required' => true,
    'len' => '255',
    'comment' => 'Institución',
    'help' => 'Institución',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Opportunity']['fields']['coursename']=array(
    'name' => 'coursename',
    'vname' => 'LBL_COURSENAME',
    'type' => 'varchar',
    'required' => true,
    'len' => '500',
    'comment' => 'Nombre de Curso',
    'help' => 'Nombre de Curso',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Opportunity']['fields']['courselevel']=array(
    'name' => 'courselevel',
    'vname' => 'LBL_COURSELEVEL',
    'type' => 'enum',
    'required' => false,
    'options' => 'levelinteres_dom',
    'len' => '100',
    'comment' => 'Nivel del curso',
    'help' => 'Nivel del curso',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);
$dictionary['Opportunity']['fields']['weeks']=array(
    'name' => 'weeks',
    'vname' => 'LBL_WEEKS',
    'type' => 'int',
    'required' => false,
    'len' => '10',
    'comment' => 'Semanas del curso',
    'help' => 'Semanas del curso',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);

$dictionary['Opportunity']['fields']['studentid']=array(
    'name' => 'studentid',
    'vname' => 'LBL_STUDENTID',
    'type' => 'int',
    'required' => false,
    'len' => '10',
    'comment' => 'Código del Estudiante',
    'help' => 'Código del Estudiante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
);

$dictionary['Opportunity']['fields']['files'] = array (
'name' => 'files',
'vname' => 'LBL_FILES',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getFilesWidget',
        'returns' => 'html',
        'include' => 'custom/include/SugarFiles/SugarFiles.php',
      ),
'source' => 'non-db',
'group' => 'files',
'merge_filter' => 'enabled',
);


?>