<?php return array(   
         'prospectos'=> 
          array(      
//              '0'=>array( 
//                  'tipo'=>'14_dias_antes',
//                  'dias'=>2,       
//                  'plantilla'=>'after_14_days', 
//                  'Subject'=>'PRUEBA Inicio de Curso', 
//                  'default'=>'mjaramillo@usfq.edu.ec',  
//                  'bcc'=>array(         
//                      'Karla Diaz'=>'kdiaz@usfq.edu.ec',
//                      'Daniela Jurado'=>'enasistencia@usfq.edu.ec',
//                      'Giannina Yepez'=>'gyepez@usfq.edu.ec',    
//                      'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec', 
//                      'Maria Antonienta Jaramillo'=>'mjaramillo@usfq.edu.ec',
//                      'David Maldonado'=>'ensistemas@usfq.edu.ec'      
//                    ) 
//                  ),
//              '1'=>array( 
//                  'tipo'=>'dias_antes',
//                  'dias'=>14, 
//                  'plantilla'=>'profesor21',
//                  'Subject'=>'PRUEBA Inicio de Curso',
//                  'default'=>'mjaramillo@usfq.edu.ec', 
//                  'bcc'=>array( 
//                      'Karla Diaz'=>'kdiaz@usfq.edu.ec',
//                      'Daniela Jurado'=>'enasistencia@usfq.edu.ec',
//                      'Giannina Yepez'=>'gyepez@usfq.edu.ec', 
//                      'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec',
//                      'Maria Antonienta Jaramillo'=>'mjaramillo@usfq.edu.ec',
//                      'David Maldonado'=>'ensistemas@usfq.edu.ec'
//                      )
//                  ), 
              '0'=>array( 
                  'tipo'=>'14_dias_despues',
                  'dias'=>14,       
                  'plantilla'=>'14_dias_despues', 
                  'Subject'=>'Envio de 14 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com',  
                  'bcc'=>array(         
                      'Andres Garcia'=>'andres@ittegik.com'    
                    ) 
                  ),
              '1'=>array( 
                  'tipo'=>'28_dias_despues',
                  'dias'=>28,       
                  'plantilla'=>'28_dias_despues', 
                  'Subject'=>'Envio de 28 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com',  
                  'bcc'=>array(         
                      'Andres Garcia'=>'andres@ittegik.com'    
                    ) 
                  ),
              '2'=>array( 
                  'tipo'=>'42_dias_despues',
                  'dias'=>42,       
                  'plantilla'=>'42_dias_despues', 
                  'Subject'=>'Envio de 42 días', 
                  'default'=>'andres.garcia@greenfieldcrm.com',  
                  'bcc'=>array(         
                      'Andres Garcia'=>'andres@ittegik.com'    
                    ) 
                  ),
              ), 
    
    'programas'=>
        array( 
            '0'=>array( 
                'tipo'=>'dias_antes',
                'dias'=>1,
                'plantilla'=>'programa_finalizar',
                'Subject'=>'PRUEBAS Finalizó Programa',
                'default'=>'mjaramillo@usfq.edu.ec', 
                'emails'=>array(
                    'josesambrano@hotmail.com',
                    'mjaramillo@usfq.edu.ec',
                    ),
                ),
            '1'=>array(    
                'tipo'=>'dias_despues',
                'dias'=>1, 
                'plantilla'=>'programa_creado',
                'Subject'=>'PRUEBAS Creación de Programa',
                'default'=>'josesambrano@hotmail.com',
                'emails'=>array(  
                    'josesambrano@hotmail.com',
                    'mjaramillo@usfq.edu.ec', 
                    ),
                ), 
            '2'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>15,
                'plantilla'=>'programa_recordatorio',
                'Subject'=>'PRUEBAS Recordatorio de Inicio de Programa',
                'default'=>'josesambrano@hotmail.com',
                'emails'=>array( 
                    'josesambrano@hotmail.com','mjaramillo@usfq.edu.ec',
                    ),
                ),
            ),
    'participante'=>
        array( 
            '0'=>array( 
                'tipo'=>'dias_antes',
                'dias'=>7,
                'plantilla'=>'aviso_usuario',
                'Subject'=>'PRUEBAS Estatus Programa',  
                'default'=>'mjaramillo@usfq.edu.ec',
                ),
            '1'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>5, 
                'plantilla'=>'recordatorio_participante',
                'Subject'=>'PRUEBAS con Fechas correctas desde servidor Recordatorio para el participante del Inicio de Programa', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                    ),
                 'bcc'=>array(
                     'Daniela Jurado'=>'enasistencia@usfq.edu.ec',
                     'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec',
                     ),
                ),
              '2'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>1, 
                'plantilla'=>'recordatorio_participante',
                'Subject'=>'PRUEBAS con Fechas correctas desde servidor Recordatorio para el participante del Inicio de Programa', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                    ),
                 'bcc'=>array(
                     'Daniela Jurado'=>'enasistencia@usfq.edu.ec',
                     'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec',
                     ),
                ),
             '3'=>array( 
                'tipo'=>'recordatorio_d2l',
                'descripcion'=>'Envio por modulo de los programas', 
                 
                'dias'=>2, 
                'plantilla'=>'recordatorio_participante_d2l',
                'Subject'=>'PRUEBAS Recordatorio uso Herramienta Virtual D2L y Evaluación de Participantes', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                 ),
                 'bcc'=>array(
                     'Gaby Palma'=>'enasistencia@usfq.edu.ec',
                    //'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec',
                     ),
                ),
            ),
    );
?>