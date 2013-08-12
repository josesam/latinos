/* 
 * busqueda para todas las busqueda de catalgos
 *  @author Jose Sambrano
 */
// abrir pais de interes
abrir_paisinteres=function(){
    
    jQuery("#paisinteres_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Paises de Interes',
                            width: 400
            });
    buscarPaisInteres();        
};
// buscar 
buscarPaisInteres =function (){
    var data={
        nombre: jQuery("#paisinteres_filter").val()  
    };
    var urllista = "index.php?&module=Accounts&action=paisinteres";
                jQuery("#paisinteres_div").text("buscando pais...");
                jQuery("#paisinteres_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#paisinteres_div").html(response);
                        
                    }else
                        return false;
                });
    
};

copiarPais=function (valor){
    
    jQuery("#paisinterest").val(valor);
    jQuery("#paisinteres_dlg").dialog("close");
};