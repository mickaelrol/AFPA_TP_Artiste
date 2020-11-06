<?php

    // require_once 'models/oeuvre.php';
    require_once 'models/modelExpositions.php';
    require_once 'views/view.php';

    class ControlerExpositions{

        private $expositions;

        public function __construct(){
            $this->expositions = new Expositions();
        }

        public function expositions(){
            $expos = $this->expositions->getAllExpositions();
            
            $view = new Vue('Expositions');
            $view->render(array('AllExpo'=> $expos));
        }
    }