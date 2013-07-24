/* 
 * Define las mascaras de los telefonos
 * 
 */
jQuery(document).ready(function() {
 var phone_format="(99) 999-9999";
 var cel_format="(99) 9 999-9999";
 jQuery("#phone_office").mask(phone_format);
 jQuery("#phone_fax").mask(phone_format);
 jQuery("#phone_alternate").mask(cel_format);
});

