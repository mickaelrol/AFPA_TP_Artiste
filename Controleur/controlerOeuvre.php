<?php
    // require_once 'models/oeuvre.php';
    require_once 'models/modelOeuvre.php';
    require_once 'views/view.php';

    class ControlerOeuvre{

        private $oeuvre;

        public function __construct(){
            $this->oeuvre = new Oeuvre();
        }

        public function oeuvre(){
            $oeuvre = $this->oeuvre->getOeuvre();
            
            $view = new Vue('Oeuvre');
            $view->render(array('Oeuvre'=> $oeuvre));
        }
    }