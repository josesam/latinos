/*
 * @author Jose Sambrano
 */


jQuery(document).ready(function() {
    jQuery("#aplicaciones_div").hide();
    jQuery("#todos_div").hide();
});

tipoBusqueda=function(){
    if(jQuery("#tipo_busqueda").val()==='aplicaciones'){
        jQuery("#aplicaciones_div").show();
        jQuery("#todos_div").hide();
    }
        
    if(jQuery("#tipo_busqueda").val()==='todos'){
        jQuery("#todos_div").show();
        jQuery("#aplicaciones_div").hide();
    }
        
    if(jQuery("#tipo_busqueda").val()===''){
        jQuery("#aplicaciones_div").hide();
        jQuery("#todos_div").hide();
    }

}
