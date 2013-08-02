<?php
if (!defined('sugarEntry'))define('sugarEntry', true);
require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
?>

<?php 
global $app_list_strings, $db;
$etapaVenta=$app_list_strings['sales_stage_dom'];

$nivelCurso=$app_list_strings['levelinteres_dom'];

$areaInteres=$app_list_strings['areainteres_dom'];

$sql = "SELECT id, CONCAT(first_name,' ',last_name) nombre FROM users WHERE deleted=0 AND status='Active' ORDER BY last_name";
$result=$db->query($sql);

//$sql1 = "SELECT DISTINCT(valor) FROM catalogo WHERE clase='institucion' ORDER BY valor";
//$resultDestino=$db->query($sql1);
//
//$sql2 = "SELECT DISTINCT(valor) FROM catalogo WHERE clase='ciudadinteres' ORDER BY valor";
//$resultCiudad=$db->query($sql2);

?>

<style>
    label{
        width:150px;
        float:left;
        font-weight: bold;
    }
    input.datos{
        
        margin: 0 5px;
    }
.seccion{
	border: 1px solid black;
	padding: 5px;
	margin:5px;
	width:40%;
	float:left;
}
.seccion_head{
	font-weight: bold;
	padding:2px;
	text-align: center;
	background-image: url("./custom/include/images/bg_top.jpg");
	color:#CCC;
}
</style>

<link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />

<script type="text/javascript" src="custom/include/scripts/genericas/varios/jquery.dataTables.js"></script>
<script type="text/javascript" src="custom/include/scripts/sistema/SpOportunidad.js"></script>
<script type="text/javascript" src="custom/include/scripts/sistema/SpReporte.js"></script>


<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />

<script type="text/javascript">
Calendar.setup ({
inputField : "fecha_inicio1",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger1",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_inicio2",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger2",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_fin1",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger3",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_fin2",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger4",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);




Calendar.setup ({
inputField : "fecha_registro1",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger5",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_registro2",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger6",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_ultimo_contacto1",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger7",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
Calendar.setup ({
inputField : "fecha_ultimo_contacto2",
ifFormat : "%m/%d/%Y %I:%M%P",
daFormat : "%m/%d/%Y %I:%M%P",
button : "active_date_trigger8",
singleClick : true,
dateStr : "07/30/2013",
startWeekday: 0,
step : 1,
weekNumbers:false
}
);
</script>

<h1>Funcionalidad generar reportes rapidos y lista de publico objetivos para genración de campanas</h1>
<table>
    <tr>
        <td>Tipo de búsqueda:</td>
        <td>
            <select id="tipo_busqueda" name="tipo_busqueda" onchange="tipoBusqueda()">
                <option value="">Seleccione...</option>
                <option value="todos">Todos</option>
                <option value="aplicaciones">Aplicaciones</option>
            </select>
        </td>
        
    </tr>
</table>
<div id="aplicaciones_div">
<table>
    <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="nombre" /> </td>
        <td>Email:</td>
        <td><input type="text" name="email" id="email" /> </td>
    </tr>
    <tr>
        <td>Fecha inicio de curso:</td>
        <td>
            Entre 
            <input class="date_input" autocomplete="off" type="text" name="fecha_inicio1" id="fecha_inicio1" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger1" alt="" />
            y 
            <input class="date_input" autocomplete="off" type="text" name="fecha_inicio2" id="fecha_inicio2" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger2" alt="" />
        </td>
    </tr>
    <tr>
        <td>Fecha fin de curso:</td>
        <td>
            Entre 
            <input class="date_input" autocomplete="off" type="text" name="fecha_fin1" id="fecha_fin1" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger3" alt="" />
            y 
            <input class="date_input" autocomplete="off" type="text" name="fecha_fin2" id="fecha_fin2" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger4" alt="" />
        </td>
    </tr>
    <tr>
        <td>Estado de aplicación:</td>
        <td>
            <select name="estado_aplicacion" id="estado_aplicacion" size="4">
                 <?php foreach ($etapaVenta as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Asesor comercial:</td>
        <td>
            <select name="asesor" id="asesor" size="4">
                 <?php while ($row = $db->fetchByAssoc($result)){  ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] ?> </option>
                 <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nivel del Curso:</td>
        <td>
            <select name="nivel_curso" id="nivel_curso" size="4">
                 <?php foreach ($nivelCurso as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Nombre del curso:</td>
        <td><input type="text" name="nombre_curso" id="nombre_curso" /> </td>
    </tr>
    <tr>
        <td>Institución:</td>
        <td>
            <input type="text" name="institution" id="institution" />
            <a href="javascript:void(0)" onclick="javascript:openInstitucion('reporte')">Seleccionar</a>
        </td>
        <td>Ciudad de destino:</td>
        <td>
            <input type="text" name="city" id="city" />
            <a href="javascript:void(0)" onclick="javascript:openInstitucion('reporte')">Seleccionar</a>
        </td>
    </tr>
    <tr>
        <td>Destino del estudiante:</td>
        <td>
            <input type="text" name="destination" id="destination" />
            <a href="javascript:void(0)" onclick="javascript:openInstitucion('reporte')">Seleccionar</a>
        </td>
    </tr>
    <tr>
        <td>Área de interés:</td>
        <td>
            <select name="area_interes" id="area_interes" size="4">
                 <?php foreach ($areaInteres as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Medio de contacto:</td>
        <td><input type="text" name="medio_contacto" id="medio_contacto" /> </td>
    </tr>
</table>
<div id="institucion_dlg" style="display:none;">
<div id="institucion_div"></div>
</div>
<div style="text-align:center;">
    <input type="submit" value="Buscar" onclick="actionurl()" />
</div>
</div>
<div id="todos_div">
<table>
    <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="nombre" /> </td>
        <td>Email:</td>
        <td><input type="text" name="email" id="email" /> </td>
    </tr>
    <tr>
        <td>Fecha de registro:</td>
        <td>
            Entre 
            <input class="date_input" autocomplete="off" type="text" name="fecha_registro1" id="fecha_registro1" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger5" alt="" />
            y 
            <input class="date_input" autocomplete="off" type="text" name="fecha_registro2" id="fecha_registro2" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger6" alt="" />
        </td>
    </tr>
    <tr>
        <td>Fecha de último contacto:</td>
        <td>
            Entre 
            <input class="date_input" autocomplete="off" type="text" name="fecha_ultimo_contacto1" id="fecha_ultimo_contacto1" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger7" alt="" />
            y 
            <input class="date_input" autocomplete="off" type="text" name="fecha_ultimo_contacto2" id="fecha_ultimo_contacto2" value="" title='' tabindex='0' size="11" maxlength="10" >
            <img src="themes/Sugar5/images/jscalendar.gif?v=37yKrf76ffV_T5Xe2LERbg" alt="Escriba Fecha" style="position:relative; top:6px" border="0" id="active_date_trigger8" alt="" />
        </td>
    </tr>
    <tr>
        <td>Estado del estudiante:</td>
        <td>
            <select name="estado_estudiante" id="estado_estudiante" size="4">
                 <option value="new-enquiry">new-enquiry</option>
                 <option value="event-registration">event-registration</option>
                 <option value="contact-out">contact-out</option>
                 <option value="contact-in">contact-in</option>
                 <option value="interview-not-attended">interview-not-attended</option>
                 <option value="interview-attended">interview-attended</option>
                 <option value="interview-walked-in">interview-walked-in</option>
                 <option value="interview-post-contact">interview-post-contact</option>
            </select>
        </td>
        <td>Asesor comercial:</td>
        <td>
            <select name="asesor" id="asesor" size="4">
                 <?php 
                 $sql = "SELECT id, CONCAT(first_name,' ',last_name) nombre FROM users WHERE deleted=0 AND status='Active' ORDER BY last_name";
                 $result=$db->query($sql);
                 while ($row = $db->fetchByAssoc($result)){  
                 ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] ?> </option>
                 <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nivel de interés:</td>
        <td>
            <select name="nivel_interes" id="nivel_interes" size="4">
                 <?php foreach ($nivelCurso as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Área de interés:</td>
        <td>
            <select name="area_interes" id="area_interes" size="4">
                 <?php foreach ($areaInteres as $key =>$value): ?>
                    <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                 <?php endforeach; ?>
            </select>
        </td>
        <td>Medio de contacto:</td>
        <td><input type="text" name="medio_contacto" id="medio_contacto" /> </td>
    </tr>
</table>
<div id="institucion_dlg" style="display:none;">
<div id="institucion_div"></div>
</div>
<div style="text-align:center;">
    <input type="submit" value="Buscar" onclick="actionurlTodos()" />
</div>
</div>
<div id="resultadobusqueda"></div>
<script>
    function actionurl(){
        var data={
            tipo_busqueda:$("#tipo_busqueda").val(),
            nombre:$("#nombre").val(),
            email:$("#email").val(),
            fecha_inicio1:$("#fecha_inicio1").val(),
            fecha_inicio2:$("#fecha_inicio2").val(),
            fecha_fin1:$("#fecha_fin1").val(),
            fecha_fin2:$("#fecha_fin2").val(),
            estado_aplicacion:$("#estado_aplicacion").val(),
            asesor:$("#asesor").val(),
            nivel_curso:$("#nivel_curso").val(),
            nombre_curso:$("#nombre_curso").val(),
            institution:$("#institution").val(),
            city:$("#city").val(),
            destination:$("#destination").val(),
            area_interes:$("#area_interes").val(),
            medio_contacto:$("#medio_contacto").val()
        }
        var urllista = "index.php?&module=Accounts&action=buscar";
        $("#resultadobusqueda").text("generando...");
        $("#resultadobusqueda").load(urllista,data, function(){ if("") {
                (nombre_ciudad);
            } });
    }
    
    function actionurlTodos(){
        var data={
            tipo_busqueda:$("#tipo_busqueda").val(),
            nombre:$("#nombre").val(),
            email:$("#email").val(),
            fecha_registro1:$("#fecha_registro1").val(),
            fecha_registro2:$("#fecha_registro2").val(),
            fecha_ultimo_contacto1:$("#fecha_ultimo_contacto1").val(),
            fecha_ultimo_contacto2:$("#fecha_ultimo_contacto2").val(),
            estado_estudiante:$("#estado_estudiante").val(),
            asesor:$("#asesor").val(),
            nivel_interes:$("#nivel_interes").val(),
            area_interes:$("#area_interes").val(),
            medio_contacto:$("#medio_contacto").val()
        }
        var urllista = "index.php?&module=Accounts&action=buscar";
        $("#resultadobusqueda").text("generando...");
        $("#resultadobusqueda").load(urllista,data, function(){ if("") {
                (nombre_ciudad);
            } });
    }

</script>
