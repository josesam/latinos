<?php

include_once 'custom/include/workflows/Finite/StatefulInterface.php';
class Documento implements StatefulInterface
{
        private $state;
        public function setFiniteState($state)
        {
                $this->state = $state;
        }

        public function getFiniteState()
        {
            return $this->state;
        }
}
//$document = new Document;
//
//$sm = new StateMachine();
//
//// Define states
//$sm->addState('new-enquiry','initial');
//$sm->addState('event-registration');
//$sm->addState('contact-out');
//$sm->addState('contact-in');
//$sm->addState('interview-not-attended');
//$sm->addState('interview-attended');
//$sm->addState('interview-walked-in');
//$sm->addState('interview-post-contact');
//
//// Define transitions
//$sm->addTransition('primer-contacto', 'new-enquiry', 'contact-out');
//$sm->addTransition('envio-mail', 'contact-out', 'contact-in');
//$sm->addTransition('entrevista', 'contact-in', 'interview-attended');
//$sm->addTransition('sin-entrevista', 'contact-in', 'interview-not-attended');
//$sm->addTransition('registro-evento-mail', 'event-registration', 'contact-out');
//$sm->addTransition('cerrar-proceso', 'interview-attended', 'interview-post-contact');
//$sm->addTransition('cerrar-proceso-walk-in', 'interview-walked-in', 'interview-post-contact');
//
//// Initialize
//$sm->setObject($document);
//$sm->initialize();
//
//// Retrieve current state
//$sm->getCurrentState();
//
//// Can we process a transition ?
////$sm->can('t34');
//
//
//echo $sm->getCurrentState();
//// => "draft"
//
//var_dump($sm->can('accept'));
//// => bool(false)
//
//var_dump($sm->can('primer-contacto'));
//// => bool(true)
//
//$sm->apply('primer-contacto');
//echo $sm->getCurrentState();

?>

