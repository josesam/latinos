/* 
 * @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {
        

});
function check_custom_data(){

    openVerificacion();
    return false;
}
jQuery.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    jQuery.each(a, function() {
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
guardar=function(){
    jQuery('input[name=action]').val('Save')
    jQuery("#save_personalizado").attr("disabled",true);
//if(check_form('EditView')){
  
  
  jQuery('#EditView').submit();
 //}else
   //alert('Existio un problema ... Comuniquese con el administrador');
return false;

}

openVerificacion=function(){
jQuery('input[name=action]').val('verificainfo')
var a=JSON.stringify(jQuery("#EditView").serializeObject());

var data=jQuery.parseJSON(a);

var flag=false;



flag=check_form('EditView');

if(flag==false){

 return false;
}else{

           jQuery("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 600
                            });


if(flag==false){
 jQuery.each(errores, function(i, val) {
          if(typeof(val)!="undefined")
            jQuery("#verficainfo").append(val + "<br/>");
            jQuery("#verficainfo").attr("style","color:red");
        });
        Limpiar();
}else{
                var urllista = "index.php?module=Contacts&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });
  }
}
 return false;

}



