<?php return array(   
         'prospectos'=> 
          array( 
              '0'=>array( 
                  'tipo'=>'14_dias_despues',
                  'dias'=>14,       
                  'plantilla'=>'14_dias_despues', 
                  'Subject'=>'Envio de 14 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '1'=>array( 
                  'tipo'=>'28_dias_despues',
                  'dias'=>28,       
                  'plantilla'=>'28_dias_despues', 
                  'Subject'=>'Envio de 28 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '2'=>array( 
                  'tipo'=>'42_dias_despues',
                  'dias'=>42,       
                  'plantilla'=>'42_dias_despues', 
                  'Subject'=>'Envio de 42 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '3'=>array( 
                  'tipo'=>'not_attended',
                  'dias'=>0,       
                  'plantilla'=>'not_attended', 
                  'Subject'=>'Interview—not attended', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
              '4'=>array( 
                  'tipo'=>'attended',
                  'dias'=>0,       
                  'plantilla'=>'attended', 
                  'Subject'=>'Interview attended', 
                  ),
              ), 
    
    'aplicacion'=>
        array( 
            '0'=>array( 
                  'tipo'=>'14_dias_incomplete',
                  'dias'=>14,       
                  'plantilla'=>'14_dias_incomplete', 
                  'Subject'=>'Aplication Incomplete', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                  ),
            '1'=>array(    
                'tipo'=>'35_dias_incomplete',
                  'dias'=>35,       
                  'plantilla'=>'35_dias_incomplete', 
                  'Subject'=>'Aplication Incomplete', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '2'=>array( 
                'tipo'=>'55_dias_incomplete',
                  'dias'=>55,       
                  'plantilla'=>'55_dias_incomplete', 
                  'Subject'=>'Aplication Incomplete', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '3'=>array( 
                'tipo'=>'conditional_offer',
                  'dias'=>0,       
                  'plantilla'=>'conditional_offer', 
                  'Subject'=>'Conditional Offer', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '4'=>array( 
                'tipo'=>'unconditional_offer',
                  'dias'=>0,       
                  'plantilla'=>'unconditional_offer', 
                  'Subject'=>'Unconditional Offer', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '5'=>array( 
                'tipo'=>'acceptance_sent',
                  'dias'=>0,       
                  'plantilla'=>'acceptance_sent', 
                  'Subject'=>'Acceptance Sent', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '6'=>array( 
                'tipo'=>'coe_received',
                  'dias'=>0,       
                  'plantilla'=>'coe_received', 
                  'Subject'=>'Coe Received', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '7'=>array( 
                'tipo'=>'visa_sent',
                  'dias'=>0,       
                  'plantilla'=>'visa_sent', 
                  'Subject'=>'Visa Sent', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            '8'=>array( 
                'tipo'=>'visa_received',
                  'dias'=>0,       
                  'plantilla'=>'visa_received', 
                  'Subject'=>'Visa Received', 
                  'default'=>'andres.garcia@greenfieldcrm.com'
                ), 
            ),
    
    );
?>