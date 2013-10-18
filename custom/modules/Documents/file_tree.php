<script src="custom/include/clases/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<link href="custom/include/clases/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />

<script>
function actionurl(archivo){
    var data={
        archivolink:archivo
    }
    var urllista = "index.php?&module=Accounts&action=mostrararchivo";
    $("#mostrarpdf_div").text("generando...");
    $("#mostrarpdf_div").load(urllista,data, function(){ if("") {
            (nombre_ciudad);
        } });
}
</script>
<link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/sistema.css" />
<script type='text/javascript' src='custom/include/scripts/genericas/varios/jquery.dataTables.js'></script>
<script type="text/javascript" charset="utf-8" src="custom/include/scripts/genericas/tabletools/media/js/ZeroClipboard.js"></script>
<script type='text/javascript' src='custom/include/scripts/genericas/tabletools/media/js/TableTools.js'></script>
<link rel='stylesheet' href='custom/include/css/demo_page.css' type='text/css' />
<link rel='stylesheet' href='custom/include/css/demo_table.css' type='text/css' />
<link rel='stylesheet' href='custom/include/scripts/genericas/tabletools/media/css/TableTools.css' type='text/css' />
<?php $path='index.php?module=Documents'; ?>
<h4>Visor de documentos</h4>
<div class="comandos">
<h4>Comandos</h4>
    <ul>
        <li>
            <a href="<?php echo $path  ?>&action=administrar">Administrar documentos</a>
        </li>
    </ul>
</div>
<?php
include_once 'custom/include/clases/phpFileTree/php_file_tree.php';

echo php_file_tree("archivos/", "javascript:actionurl('[link]');");
//echo php_file_tree("archivos/", "http://localhost/latinosfinal/[link]");
?>
<div id="mostrarpdf_div"></div>