/* 
 @author Jose Sambrano
 */


openEtapas=function(etapa){
      var data={
            etapa:etapa
        }

             jQuery("#etapas_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Etapas',
                            width: 400
                });



 var urllista = "index.php?&module=Opportunities&action=controletapas";
                jQuery("#etapas_div").text("Buscando etapas de ventas...");
                jQuery("#etapas_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#etapas_div").html(response);
                    }else
                        return false;
                });
}

openInstitucion=function(opcion){
      var data={
            opcion:opcion
        }

             jQuery("#institucion_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Etapas',
                            width: 500
                });



 var urllista = "index.php?&module=Opportunities&action=buscarinstitucion";
                jQuery("#institucion_div").text("Buscando instituciones...");
                jQuery("#institucion_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#institucion_div").html(response);
                    }else
                        return false;
                });
}

buscarInstitucion=function(){
    var data={
            filtro:jQuery("#filtro").val(),
            opcion:jQuery("#opcion").val()
        }
    var urllista = "index.php?&module=Opportunities&action=resultadobuscarinstitucion";
    jQuery("#resultado_institucion_div").text("Buscando instituciones.....");
    jQuery("#resultado_institucion_div").load(urllista,data, function(response, status, xhr){
        if(status=="success"){
            jQuery("#resultado_institucion_div").html(response);
        }else
            return false;
    });
} 

cargarInstitucion=function(pais,ciudad,institucion){
    jQuery("#destination").val(pais);
    jQuery("#city").val(ciudad);
    jQuery("#institution").val(institucion);
    jQuery("#institucion_dlg").dialog("close");
} 

cargarCiudad=function(pais,ciudad){
    jQuery("#destination").val(pais);
    jQuery("#city").val(ciudad);
    jQuery("#institution").val("");
    jQuery("#institucion_dlg").dialog("close");
} 

cargarPais=function(pais){
    jQuery("#destination").val(pais);
    jQuery("#city").val("");
    jQuery("#institution").val("");
    jQuery("#institucion_dlg").dialog("close");
} 

copiarEtapa=function(valor,probabilidad){
    jQuery("#probability").val(probabilidad);
    jQuery("#sales_stage").val(valor);


   if(valor=='Perdido'){

        jQuery("#l_motivoperdida_c").show();
        jQuery("#l_adicional_c").show();
        jQuery("#motivoperdida_c").show();
        jQuery("#adicional_c").show();

    }else{
        jQuery("#l_motivoperdida_c").hide();
        jQuery("#l_adicional_c").hide();
        jQuery("#motivoperdida_c").hide();
        jQuery("#adicional_c").hide();
        jQuery("#motivoperdida_c").val('');
    }

  


    

    jQuery("#etapas_dlg").dialog("close");
}

openModelos=function(){

             jQuery("#modelo_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Modelos y Kilometrajes',
                            width: 800
                });

}


openZona=function(){
     
 jQuery("#zona_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Lugar Atención',
                            width: 800
                            });



 
}

buscar=function (){

var data={
            modelo:jQuery("#modelo").val(),
            kilometro:jQuery("#kilometraje").val()

        }

             var urllista = "index.php?&module=Opportunities&action=modelo";
                jQuery("#modelo_div").text("buscando modelos...");
                jQuery("#modelo_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#modelo_div").html(response);
                    }else
                        return false;
                });
}






openRepuesto=function(){

 jQuery("#repuesto_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Repuesto',
                            width: 800
                            });




}

buscarRepuesto=function (){

var data={
            name:jQuery("#repuesto_filtro").val()
            

        }

             var urllista = "index.php?&module=Opportunities&action=repuesto";
                jQuery("#repuesto_div").text("buscando repuesto...");
                jQuery("#repuesto_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#repuesto_div").html(response);
                    }else
                        return false;
                });
}



buscarZona=function (){

        var data={
            filtro:jQuery("#zona").val()

        }

                var urllista = "index.php?&module=Opportunities&action=zona";
                jQuery("#zona_div").text("buscando concesionario...");
                jQuery("#zona_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#zona_div").html(response);
                    }else
                        return false;
                });
}
buscarActividades=function (){

        var data={
            modelo:jQuery("#modeloop").val(),
            kilometraje:jQuery("#kilometrajeop").val(),
            dealer:jQuery("#iddealer").val()


        }

                var urllista = "index.php?&module=Opportunities&action=actividad";
                jQuery("#detalle_actividades").text("buscando actividades...");
                jQuery("#detalle_actividades").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#detalle_actividades").html(response);
                    }else
                        return false;
                });
}


precio=function (){

        var data={
            modelo:jQuery("#modeloop").val(),
            kilometraje:jQuery("#kilometrajeop").val(),
            dealer:jQuery("#iddealer").val()


        }

                var urllista = "index.php?&module=Opportunities&action=precio";
                jQuery("#preciofinal").text("buscando valor cotización...");
                jQuery("#preciofinal").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#preciofinal").html(response);
                        jQuery('#amount').val(response);
                    }else
                        return false;
                });
}


copiarModelos=function(modelo,kilometro){
    jQuery("#modeloop").val(modelo);
    jQuery("#kilometrajeop").val(kilometro);
    jQuery("#amount").val();
    jQuery("#preciofinal").text('');
    jQuery("#detalle_actividades").text('');
    jQuery("#modelo_dlg").dialog("close");
}



copiarZonas=function(zona,matriz,id){    
    jQuery("#planop").val(zona);
    jQuery("#iddealer").val(id);
    jQuery("#matriz").val(matriz);
    jQuery("#zona_dlg").dialog("close");
}


copiarRepuesto=function(repuesto){
    jQuery("#repuesto").val(repuesto);

    jQuery("#repuesto_dlg").dialog("close");
}

procesosAbiertos=function(idAplicacion){
    var data={
            idAplicacion:idAplicacion
        }

             jQuery("#procesos_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Procesos Abiertos',
                            width: 700
                });



 var urllista = "index.php?&module=Opportunities&action=procesosabiertos";
                jQuery("#procesos_div").text("Buscando procesos abiertos...");
                jQuery("#procesos_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#procesos_div").html(response);
                    }else
                        return false;
                });
}

cerrarAplicacion=function(idAplicacion){
    var data={
        idAplicacion:idAplicacion
    }
    
    var urllista = "index.php?&module=Opportunities&action=cerraraplicacion";
    jQuery("#cerrar_aplicacion_div").text("Cerrando aplicación...");
    jQuery("#cerrar_aplicacion_div").load(urllista,data, function(response, status, xhr){
        if(status=="success"){
            jQuery("#cerrar_aplicacion_div").html(response);
        }else
            return false;
    });
}


