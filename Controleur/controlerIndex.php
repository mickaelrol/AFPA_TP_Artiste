<?php
    // require_once 'models/oeuvre.php';
    require_once 'models/modelExposition.php';
    require_once 'views/view.php';

    class ControlerIndex{

        private $lastExposition;

        public function __construct(){
            $this->lastExposition = new Expositions();
        }

        public function index(){
            $expos = $this->lastExposition->getLastExpositions();
            
            $view = new Vue('Index');
            $view->render(array('lastExpo'=> $expos));
        }
    }