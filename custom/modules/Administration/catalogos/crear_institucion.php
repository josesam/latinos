<?php
if ( $GLOBALS['current_user']->isAdmin() ) {
    echo "Opcion solo para administradores.";
} else {
    echo "Opcion solo para administradores";
    exit();
    die();
}
include_once 'custom/include/clases/varios/Catalogos/CatalogoInterface.php';



if (isset($_REQUEST['guardar'])){
    include_once 'custom/include/clases/varios/Catalogos/InstitucionInteres.php';
    $respuesta=  InstitucionInteres::crear($_REQUEST['institucion_campo'],$_REQUEST['padre_id']);
}




?>
<?php $path='index.php?module=Administration'; ?>

<script src="custom/include/scripts/genericas/varios/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="custom/include/css/sistema.css" />
<h1>Crear Ciudad</h1>
<div class="comandos">
<h4>Comandos</h4>
    <ul>
        <li>
            <a href="<?php echo $path  ?>&action=catalogo">Regresar</a>
        </li>
        
    </ul>
</div>
<?php if (isset($respuesta)):?>
<div id="resultado">
    <p>

        <?php echo ($respuesta['message']); ?>
    
    </p>    
</div>
<?php endif;?>
<form class="catalogo-form" id="catalogo-form" method="POST">
    <input type="hidden" name="option" id="option" value="institucion">
    <input type="hidden" name="module" id="module" value="Administration">
    <input type="hidden" name="action" id="module" value="catalogo">
    <legend>Por favor ingrese el nombre del pais</legend>
    <fieldset>
    <p>    
    <label>País</label>
    <input type="text" name="pais" id="pais" value="" readonly="true">
    
    </p>
    <p>    
    <label>Ciudad</label>
    <input type="text"  name="ciudad" id="ciudad" value="" readonly="true">
    <input type="hidden"  name="padre_id" id="padre_id" value="">
    <a href="javascript:void(0);" id="l_ciudad">Buscar Ciudad</a>
    
    </p>
    <p>    
    <label>Institucion</label>
    <input type="text"  name="institucion_campo" id="institucion_campo" value="">
    </p>
    <br>
    <input type="submit" value="Guardar" id="guardar" name="guardar">
    </fieldset>
</form>

<div id="ciudades_dlg" style="display: none;">
    <label>Ciudad o Pais</label>
    <input type="text" name="filtro" id="filtro" value="">
    <button id="b_buscar">Buscar</button>
    <div id="ciudad_div"></div>
</div>

<script>
$().ready(function() {
	// validate the comment form when it is submitted
	
        $("#l_ciudad").bind("click",function(event){
            event.preventDefault();
            open();
        });
        $("#b_buscar").bind("click",function(event){
            event.preventDefault();
            buscar();
        });
	// validate signup form on keyup and submit
	$("#catalogo-form").validate({
		rules: {
			pais: "required",
                        ciudad: "required",
                        institucion_campo: "required"
			
		},
		messages: {
			pais: "Por favor ingrese el pais",
			ciudad: "Seleccione la ciudad",
                        institucion_campo: "Ingresar el nombre de la institucion"
		}
	});

	// propose username by combining first- and lastname
	
});

 open=function(){
    
    $("#ciudades_dlg").dialog({
        closeOnEscape:true,
        heigth:500,
        hide:'slide',
        model:true,
        title: 'Busqueda',
        width: 600
    });
};
buscar=function(){
   
  var data={
      filtro:$("#filtro").val()
  };  
  var url="index.php?module=Administration&action=ciudad";
  $("#ciudad_div").text("Buscando .....");
  $("#ciudad_div").load(url,data,function(response, status, xhr){
        $("#ciudad_div").html(response);    
  });
  
};
copiarCiudad=function(padre_id,ciudad,pais){
    $("#padre_id").val(padre_id);
    $("#ciudad").val(ciudad);
    $("#pais").val(pais);
    $("#ciudades_dlg").dialog('close');
}
</script>
