<?php
    require_once 'models/modelExposition.php';
    require_once 'views/view.php';

    class ControlerExposition{

        private $exposition;

        public function __construct(){
            $this->exposition = new Exposition();
        }

        public function exposition($id){
            $exposition = $this->exposition->getExposition($id);
            
            $view = new Vue('Exposition');
            $view->render(array('exposition'=> $exposition));
        }
    }