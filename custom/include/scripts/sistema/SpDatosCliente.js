/* 
 @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {
   jQuery("#datos_cliente").bind("click",function(event){
        event.preventDefault();
        openDatosCliente();
        var data={
            id_cliente:jQuery("#cliente_id").val()
        }
         var url="index.php?module=Opportunities&action=datos";
    
       jQuery("#datos_cliente_div").text("buscando informacion ...");
       jQuery("#datos_cliente_div").load(url, data, function(response, status, xhr){
            jQuery("#datos_cliente_div").html(response);    
        });
    });

});

openDatosCliente=function(){

             jQuery("#datoscliente_dlg").dialog({
                            closeOnEscape: true,
                            height: 200 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos Cliente',
                            width: 600
                });
}