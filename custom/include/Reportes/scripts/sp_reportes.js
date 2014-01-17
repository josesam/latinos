/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
  $("#example").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
//                "sDom": 'T<"clear">lfrtip',
//		"oTableTools": {
//                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
//			"aButtons": [
//				"copy",
//				"csv",
//				"xls",
//
//				{
//					"sExtends": "pdf",
//					"sPdfOrientation": "landscape",
//					"sPdfMessage": ""
//				},
//				"print"
//			]
//		}
	} );

  $("#example1").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
		"oTableTools": {
                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
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
  $("#example2").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
		"oTableTools": {
                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
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


$("#example3").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
		"oTableTools": {
                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
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

        $("tfoot input").keyup( function () {
					/* Filter on the column (the index) of this element */
					oTable.fnFilter( this.value, $("tfoot input").index(this) );
				} );



				/*
				 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
				 * the footer
				 */
				$("tfoot input").each( function (i) {
					asInitVals[i] = this.value;
				} );

				$("tfoot input").focus( function () {
					if ( this.className == "search_init" )
					{
						this.className = "";
						this.value = "";
					}
				} );

				$("tfoot input").blur( function (i) {
					if ( this.value == "" )
					{
						this.className = "search_init";
						this.value = asInitVals[$("tfoot input").index(this)];
					}
				} );


                            } );



function seleccionarTodo(obj,objSeleccionador){

if ($('#'+objSeleccionador.id).is(':checked')) {
    $("#"+obj).each(function(){
            $("#"+obj+" option").attr("selected","selected");
        });
}else{
$("#"+obj).each(function(){
            $("#"+obj+" option").removeAttr("selected")
        });
}
}

function cargarInmueblePago(){

	$('#inmueble').html('<option selected>Cargando...</option>');

 	var clientes= $('#clientes').val();
         var toLoad = "index.php?&module=Accounts&action=cargainmueble&cliente="+ clientes ;



	$.post(toLoad,function (responseText){

	$('#inmueble').html(responseText);

							});

}



function cargarProyectoMandato(){
 $('#proyectoMandato').html('<option selected>Cargando...</option>');

  var tipo= $('#tipo').val();
         var toLoad = "index.php?&module=Accounts&action=cargaproyectomandato&tipo="+ tipo ;



 $.post(toLoad,function (responseText){

 $('#proyectoMandato').html(responseText);

       });

}



function clientePopup(){
        $("#clientes_dlg").dialog({
                            closeOnEscape: true,
                            height: 250 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Clientes',
                            width: 500
                            });


}