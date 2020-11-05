<?php

    require_once 'Controleur/controlerIndex.php';
    require_once 'Controleur/controlerExposition.php';

    class Router {

        private $ctrlIndex;
        private $ctrlExposition;

        public function __construct(){
            $this->ctrlExposition = new ControlerExposition();
            $this->ctrlIndex  = new ControlerIndex();
        }

        public function routeQuery(){
            try{
                switch ($_GET['action']) {
                    case 'expositions':
                        $this->ctrlExposition->expositions();
                    break;
                    case 'index':
                        $this->ctrlIndex->index();
                    break;
                    
                    default:
                        $this->ctrlIndex->index();
                    break;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }