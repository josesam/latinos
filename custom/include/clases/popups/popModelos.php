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
	width:60%;
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
<div id="modelo_dlg" style="display:none;">
<div class="seccion" >
    <div class="seccion_head">
            Datos
    </div>
<label>Modelo</label>
<input type="text" name="modelo" id="modelo" value="">
<br>
<label>Kilometraje</label>
<input type="text"  name="kilometraje" id="kilometraje" value="">
<br>
<br>
<input type="button" name="anadir" id="anadir" value="Buscar" onclick="javascript:buscar();"></button>
</div>
<hr>
<div id="modelo_div"></div>
</div>