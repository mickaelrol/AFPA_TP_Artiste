<?php
    require_once 'models/modelOeuvre.php';
    require_once 'views/view.php';

    class ControlerOeuvre{

        private $oeuvre;

        public function __construct(){
            $this->oeuvre = new Oeuvre();
        }

        public function oeuvre($id){
            $oeuvre = $this->oeuvre->getOeuvre($id);
            
            $view = new Vue('Oeuvre');
            $view->render(array('oeuvre'=> $oeuvre));
        }
    }