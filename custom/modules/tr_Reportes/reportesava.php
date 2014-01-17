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
<form name="reportes" action="index.php?module=tr_Reportes&action=parametrosava" method="POST">

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
    <tr>
       <td>
            <input type="radio" name="reportes" value="1">
        </td>
        <td>Reporte de Estado de cuenta cliente</td>
        <td></td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="2">
        </td>
            <td>Reporte de Ventas</td>
        <td></td>
    </tr>

   <tr>
        <td>
            <input type="radio" name="reportes" value="3">
        </td>
        <td>Reporte de Cartera por proyecto</td>
        <td></td>
    </tr>

   <tr>
        <td>
            <input type="radio" name="reportes" value="4">
        </td>
        <td>Reporte de cartera corriente y vencida</td>
        <td></td>
    </tr>

    <tr>
        <td>
            <input type="radio" name="reportes" value="5">
        </td>
            <td>Reporte Legal- Acumulado</td>
            <td></td>
    </tr>


    <tr>
        <td>
            <input type="radio" name="reportes" value="6">
        </td>
        <td>Reporte Legal por Proyecto</td>
        <td></td>
    </tr>

    <tr>
        <td>
            <input type="radio" name="reportes" value="7">
        </td>
        <td>Reporte de Credito</td>
        <td></td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="8">
        </td>
        <td>Reporte de administracion de ventas</td>
        <td></td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="9">
        </td>
        <td>Reporte de Motivos de Reciliación / Desistimiento</td>
        <td></td>
    </tr>


    </tbody>

</table>
</form>





