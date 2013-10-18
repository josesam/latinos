<script src="custom/include/clases/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<link href="custom/include/clases/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/sistema.css" />
<script type='text/javascript' src='custom/include/scripts/genericas/varios/jquery.dataTables.js'></script>
<script type="text/javascript" charset="utf-8" src="custom/include/scripts/genericas/tabletools/media/js/ZeroClipboard.js"></script>
<script type='text/javascript' src='custom/include/scripts/genericas/tabletools/media/js/TableTools.js'></script>
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />
<link rel='stylesheet' href='custom/include/scripts/genericas/tabletools/media/css/TableTools.css' type='text/css' />

<script>
$(document).ready(function(){
    $("#example").dataTable( {
        "sPaginationType": "full_numbers"
    } );
});
function toggleChecked(status) {
    $(".checkbox").each( function() {
    $(this).attr("checked",status);
    });
}
function eliminarArchivos() {
    if(confirm("Está seguro que desea eliminar los documentos seleccionados?")){
        $("#eliminardocumentos").submit();
    }
}
</script>

<?php
$mensaje='';
if($_POST['bandera']=='eliminar'){
    $archivos = $_POST['archivo'];
    $errorMensaje='';
    if(count($archivos)>0){
        for($i=0;$i<count($archivos);$i++){
            $eliminar = unlink('archivos/'.$archivos[$i]);
            if(!$eliminar){
                $errorMensaje = "Error al eliminar el archivo: " . $archivos[$i] . "<br/>";
            }
        }
    }
    if($errorMensaje!='')
        $mensaje = $errorMensaje;
    else
        $mensaje = 'Documentos eliminados exitosamente';
}

if($_POST['bandera']=='cargar'){
    if ($_FILES['archivo']["error"] > 0){
        $mensaje = "Error: No se ha podido subir el archivo (" . $_FILES['archivo']['error'] . ")";
    }else{
        $mensaje = "<p><strong>Detalle del archivo subido:</strong><br>";
        $mensaje .= "Nombre: " . $_FILES['archivo']['name'] . "<br>";
        $mensaje .= "Tipo: " . $_FILES['archivo']['type'] . "<br>";
        $mensaje .= "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB</p>";
        
        move_uploaded_file($_FILES['archivo']['tmp_name'],"archivos/" . $_FILES['archivo']['name']);
    }
}
?>

<?php $path='index.php?module=Documents'; ?>

<div class="comandos">
<h4>Comandos</h4>
    <ul>
        <li>
            <a href="<?php echo $path  ?>&action=file_tree">Visor documentos</a>
        </li>
    </ul>
</div>
<h4>Cargar Documentos</h4>
<form id="administrardocumentos" name="administrardocumentos" method="post" enctype="multipart/form-data">
    <input type="hidden"  name="module" id="module" value="Documents">
    <input type="hidden"  name="action" id="action" value="administrar">
    <input type="hidden"  name="return_action" id="return_action" value="administrar">
    <input type="hidden"  name="bandera" id="bandera" value="cargar">
    <input type="file" name="archivo" id="archivo"></input>
    <input type="submit" value="Subir archivo"></input>
</form>
<br/><br/><br/><br/><br/>


<h4>Eliminar Documentos</h4>
<form id="eliminardocumentos" name="eliminardocumentos" method="post" enctype="multipart/form-data">
<input type="hidden"  name="module" id="module" value="Documents">
<input type="hidden"  name="action" id="action" value="administrar">
<input type="hidden"  name="return_action" id="return_action" value="administrar">
<input type="hidden"  name="bandera" id="bandera" value="eliminar">
<table width='80%' border='1' class='display' id='example'>
    <thead>
        <tr>
            <th><input type='checkbox' onclick='toggleChecked(this.checked)'></th>
            <th align='center'><strong>Archivo</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $directorio = opendir("archivos");
        while ($archivo = readdir($directorio)){
            if(strlen($archivo)>4){
                echo '<tr>';
                    echo '<td><input type="checkbox" class="checkbox" name="archivo[]" value="'.$archivo.'" /></td>';
                    echo '<td>'.$archivo.'</td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>
<div style="text-align:center;">
    <input type="button" value="Eliminar Archivos" onclick='eliminarArchivos("si");' />
</div>
</form>




<?php

echo "<p><strong>".$mensaje."</strong></p>"; 
?>

