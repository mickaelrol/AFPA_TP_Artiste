<?php

    // require_once 'models/oeuvre.php';
    require_once 'models/modelExposition.php';
    require_once 'views/view.php';

    class ControlerExposition{

        private $exposition;

        public function __construct(){
            $this->exposition = new Exposition();
        }

        public function expositions(){
            $expos = $this->exposition->getAllExpositions();
            
            $view = new Vue('Expositions');
            $view->render(array('AllExpo'=> $expos));
        }
    }