<?php
    // require_once 'models/oeuvre.php';
    require_once 'models/modelOeuvres.php';
    require_once 'views/view.php';

    class ControlerOeuvres{

        private $oeuvres;

        public function __construct(){
            $this->oeuvres = new Oeuvres();
        }

        public function oeuvres(){
            $oeuvres = $this->oeuvres->getAllOeuvres();
            
            $view = new Vue('Oeuvres');
            $view->render(array('AllOeuvres'=> $oeuvres));
        }
    }