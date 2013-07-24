<?php
if ( $GLOBALS['current_user']->isAdmin() ) {
    echo "Opcion solo para administradores.";
} else {
    echo "Opcion solo para administradores";
    exit();
    die();
}
include_once 'custom/include/clases/varios/Catalogos/CatalogoInterface.php';
include_once 'custom/include/clases/varios/Catalogos/PaisInteres.php';
$data=  PaisInteres::buscar("",0);

if (isset($_REQUEST['guardar'])){
    include_once 'custom/include/clases/varios/Catalogos/CiudadInteres.php';
    $respuesta=CiudadInteres::crear($_REQUEST['ciudad'],$_REQUEST['pais']);
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
    <input type="hidden" name="option" id="option" value="ciudad">
    <input type="hidden" name="module" id="module" value="Administration">
    <input type="hidden" name="action" id="module" value="catalogo">
    <legend>Por favor ingrese el nombre del pais</legend>
    <fieldset>
    <p>    
    <label>País</label>
    
    <select name="pais" id="pais">
        <option value="">Seleccione el Pais </option>
        <?php if (count($data)>0):?>
            <?php foreach ($data as $value): ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['valor'] ?></option>  
            <?php endforeach;?>
        <?php endif; ?>
    </select>
    </p>
    <p>    
    <label>Ciudad</label>
    <input name="ciudad" id="ciudad" value="">
    </p>
    <br>
    <input type="submit" value="Guardar" id="guardar" name="guardar">
    </fieldset>
</form>


<script>
$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#catalogo-form").validate({
		rules: {
			pais: "required",
                        ciudad: "required"
			
		},
		messages: {
			pais: "Por favor ingrese el pais",
			ciudad: "Seleccione la ciudad"
		}
	});

	// propose username by combining first- and lastname
	
});
</script>
