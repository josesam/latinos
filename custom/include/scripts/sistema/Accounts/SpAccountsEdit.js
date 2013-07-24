/*
 * @author Jose Sambrano
 */

jQuery("#paisinteres_div").on('click', 'a', function(e) {
                e.preventDefault();
                
            });
jQuery("#lb_paisinteres").on('click', 'a', function(e) {
                e.preventDefault();
                
            });            
           
jQuery(document).ready(function() {
    jQuery("#lb_paisinteres").bind('click',function(e){
        e.preventDefault();
        abrir_paisinteres();
    });  
            
});
var errores=new Array(40);



openVerificacion=function(){
    var flag=true;
    flag=check_form('EditView');
    
        if(flag===false){
            jQuery("#verifica_dlg").dialog("close");
            return false;
        }else{
              jQuery('input[name=action]').val('verificainfo')
              var a=JSON.stringify(jQuery("#EditView").serializeObject());
              var data=jQuery.parseJSON(a);

              jQuery("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 600
                            });

                var urllista = "index.php?module=Accounts&action=verificainfo";
                
                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });
        return false;
 }
 return false;

};
Limpiar=function(){
    errores=new Array(20);
};
check_custom_data=function(){

    openVerificacion();

    return false;
};

guardar=function(){

jQuery("#save_personalizado").attr("disabled",true);

//if(check_form('EditView')){
  jQuery('input[name=action]').val('Save')
  jQuery('#EditView').submit();
  return false;
 //}else
  // alert('Existio un problema ... Comuniquese con el administrador');
return false;

};


function esFechaValida(fecha){

   if (fecha != undefined && fecha != "" ){

        if (!/^\d{2}\/\d{2}\/\d{4}$/.test(fecha)){

           return false;
        }
       var dia  =  parseInt(fecha.substring(0,2),10);
       var mes  =  parseInt(fecha.substring(3,5),10);
       var anio =  parseInt(fecha.substring(6),10);

    switch(mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            numDias=31;
            break;
        case 4: case 6: case 9: case 11:
            numDias=30;
            break;
        case 2:
            if (comprobarSiBisisesto(anio)){numDias=29}else{numDias=28};
            break;
        default:

            return false;
    }



        if (dia>numDias || dia==0){

            return false;
        }
        return true;
    }
    return false;

}

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};




