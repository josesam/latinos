<style>
    .footer{
       display: block;
       text-align: center;
       margin: 10px 0;
    }
    h1.sp_h1{
        text-align: center;
        margin: 10px;
    }
    td.head{
        background-color: #009CFF;
        border:1px solid #000;
        font-family: sans-serif;
        font-size: 14px;
        color: #fff;


}
table.reportes{

    border:1px solid #000;
}

</style>
<link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
<h1 class="sp_h1">Gestión de Reportes</h1>
<form name="reportes" action="index.php?module=tr_Reportes&action=parametros" method="POST">

<input type="submit" name="ejecutar" value="Ver Reportes">
<table width="100%"  id="rounded-corner">
    <thead>
    <tr>
        <th scope="col" class="rounded-company">

        </th>
        <th scope="col" class="rounded-q1">
            Reporte
        </th>
        <th scope="col" class="rounded-q4">
            Descripcion
        </th>
    </tr>
    </thead>
    <tfoot>
        <tr>
        	<td colspan="3" class="rounded-foot-left"><em>© 2010 <a href="http://www.sugarcrmplugins.com" targer="_blank">Sugarcrm Plugins</a>. Todos los derechos Reservados </em></td>        	
        </tr>
    
    </tfoot>
    <tbody>
<!--        <tr>
            <td colspan="3"><h3> Indicadores Comerciales</h3> </td>
        </tr>-->
        <tr>


        <td>
            <input type="radio" name="reportes" value="1">
        </td>
        <td>Application Sent</td>
        <td>
        <!--Listado que proporciona la siguiente información:<br>-->
<!--        <ul>
	<li>Número de clientes creados y porcentaje en relación a la empresa</li>
	<li>Número de cotizaciones creadas y porcentaje en relación a la empresa</li>
	<li>Número de ventas realizadas y porcentaje en relación a la empresa</li>
	<li>Número de clientes creados por empresa</li>
	<li>Número de cotizaciones creadas por empresa</li>
	<li>Número de ventas realizadas por empresa</li>
        </ul>
        Filtros: entre fechas de creación y por asesor (uno, varios o todos)-->

        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="2">
        </td>
            <td>Students without Applications</td>
<!--        <td>Listado que muestra el número de clientes cotizados vs el número de clientes vendidos.
            <br>
            Filtros: por clientes y por asesor, y por asesor (uno, varios, todos)
        </td>-->
    </tr>
    
    <tr>
        <td>
            <input type="radio" name="reportes" value="3">
        </td>
            <td>Students with Applications</td>
<!--        <td>Listado que muestra el número de clientes cotizados vs el número de clientes vendidos.
            <br>
            Filtros: por clientes y por asesor, y por asesor (uno, varios, todos)
        </td>-->
    </tr>

    

<!--     <tr>
        <td>
            <input type="radio" name="reportes" value="6">
        </td>
        <td>Actividad de gestión del asesor</td>
        <td>
            Listado que proporciona la siguiente información:
            <ul>
                <li>Número de llamadas realizadas y porcentaje en relación al total empresa</li>
<li>	Número de llamadas no realizadas y porcentaje en relación al total empresa</li>
<li>	Número de reuniones realizadas y porcentaje en relación al total empresa</li>
<li>	Número de reuniones no realizadas y porcentaje en relación al total empresa</li>
<li>	Número de llamadas realizadas por empresa</li>
<li>	Número de llamadas no realizadas por empresa</li>
<li>	Número de reuniones realizadas por empresa</li>
<li>	Número de reuniones no realizadas por empresa</li>
            </ul>
Filtros: entre fechas de actualización y por asesor (uno, varios, todos)
 </td>
    </tr>

<tr>
        <td>
            <input type="radio" name="reportes" value="8">
        </td>
        <td>Reporte de clientes asignados versus clientes atendidos por usuario</td>
        <td>
            Reporte que muestra tres subreportes: el primero los clientes asignados, el segundo los clientes que representan actividad (llamadas o reuniones), y el tercero que presenta los clientes sin actividad (llamadas o reuniones).
            <br>
            Filtros: por ejecutivo, y entre fechas

	  </td>
    </tr>
        <tr>
            <td colspan="3"><h3>Ventas</h3> </td>
        </tr>
   <tr>
        <td>
            <input type="radio" name="reportes" value="3">
        </td>
            <td>Efectividad  de medios</td>
        <td>
        Listado que toma los datos de los medios ingresados en inmueble de interés, y muestra la siguiente información:
        <br>
        <ul>
            <li>Medios y su detalle vs % de ventas alcanzado con ese medio.</li>
        </ul>
        Filtros: entre fechas de creación, por tipo de negocio, y por medio

        </td>
    </tr>


    <tr>
        <td>
            <input type="radio" name="reportes" value="5">
        </td>
        <td>Reporte detallado de ventas por proyecto, entre fechas, por tipo de inmueble y por asesor</td>
        <td> Listado que muestra las ventas realizadas por proyecto, mostrando: inmueble, precio, fecha operación, asesor.
            <br>
                Filtros: entre fechas, por etapa y por asesor
   </td>
    </tr>

   <tr>
        <td>
            <input type="radio" name="reportes" value="4">
        </td>
        <td>Medición de tiempos de estados de venta</td>
        <td>Listado tipo crosstab que muestra las fechas de modificación de las etapas de venta. Muestra adicionalmente los proyectos y los inmuebles de interés. Sacar promedios por etapa y por proyecto. (Tres niveles: compañía, proyecto e inmueble).
            <br/>
            Filtros: entre fechas, por proyecto y por asesor
 </td>
    </tr>

        <tr>
            <td colspan="3"><h3>Inventarios</h3> </td>
        </tr>


     <tr>
        <td>
            <input type="radio" name="reportes" value="7">
        </td>
            <td>Reporte de inventario</td>
            <td>
                Listado que muestre el detalle de estado del inventario por proyecto y por inmueble de interés (número de disponibles, número de vendidos, número de reservados, número de canjes, precio)
                <br/>
Filtros: por proyecto (uno, varios, todos), por tipo de inmueble, por tipo de venta (proyectos/mandato), entre fechas de ingreso al inventario

            </td>
    </tr>-->


    
    </tbody>

</table>
</form>



