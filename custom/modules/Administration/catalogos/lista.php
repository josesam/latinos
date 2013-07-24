<?php 
if ( $GLOBALS['current_user']->isAdmin() ) {
    echo "Opcion solo para administradores.";
} else {
    echo "Opcion solo para administradores";
    exit();
    die();
}
include_once 'custom/include/clases/varios/Catalogos/CatalogoInterface.php';
include_once 'custom/include/clases/varios/Catalogos/InstitucionInteres.php';

$data= InstitucionInteres::buscar("",0);
?>

<?php $path='index.php?module=Administration'; ?>
<link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/sistema.css" />
<script type='text/javascript' src='custom/include/scripts/genericas/varios/jquery.dataTables.js'></script>
<script type="text/javascript" charset="utf-8" src="custom/include/scripts/genericas/tabletools/media/js/ZeroClipboard.js"></script>
<script type='text/javascript' src='custom/include/scripts/genericas/tabletools/media/js/TableTools.js'></script>
<link rel='stylesheet' href='custom/include/css/demo_page.css' type='text/css' />
<link rel='stylesheet' href='custom/include/css/demo_table.css' type='text/css' />
<link rel='stylesheet' href='custom/include/scripts/genericas/tabletools/media/css/TableTools.css' type='text/css' />

<h4>Instituciones</h4>
<div class="comandos">
<h4>Comandos</h4>
    <ul>
        <li>
            <a href="<?php echo $path  ?>&action=catalogo&option=pais">Crear Pais</a>
           
           

        </li>
        <li> <a href="<?php echo $path  ?>&action=catalogo&option=ciudad">Crear Ciudad</a></li>
        <li> <a href="<?php echo $path  ?>&action=catalogo&option=institucion">Crear Institución</a></li>
    </ul>
</div>
<div style="clear: both;"></div>
<br>
<?php if (is_array($data)) : ?>
<table width="100%" class='display' id='example'>
<thead>
<tr>
            <th class="header">Institucion</th>
            <th class="header">Ciudad</th>
            <th class="header">Pais</th>
            <th class="header"></th>
        </tr>
    </thead>

    <tbody>
<?php foreach ($data as $row):?>
        <tr>
            <td>
                <?php echo $row['institucion']; ?>
            </td>
            <td>
                <?php echo $row['ciudad']; ?>
            </td>
            <td>
                <?php echo $row['pais']; ?>
            </td>
             <td>
                <!--<a href='index.php?module=Administration&action=editarcatalogo&id=<?php //echo $row['codigo'] ?>'>Editar</a>-->
            </td>
        </tr>
<?php endforeach;?>
    </tbody>
</table>
<?php endif; ?>
<script>
     $("#example").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
		"oTableTools": {
                        "sSwfPath": "custom/include/scripts/genericas/tabletools/media/swf/copy_cvs_xls_pdf.swf",
			"aButtons": [
				"copy",
				"csv",
				"xls",

				{
					"sExtends": "pdf",
					"sPdfOrientation": "landscape",
					"sPdfMessage": ""
				},
				"print"
			]
		}
	} );

</script>    
    