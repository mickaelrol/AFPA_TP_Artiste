<?php
    require 'models/model.php';
    require_once 'Controleur/controlerIndex.php';
    require_once 'Controleur/controlerExposition.php';
    require_once 'Controleur/controlerExpositions.php';
    require_once 'Controleur/controlerOeuvres.php';
    require_once 'Controleur/controlerOeuvre.php';
    


    class Router {

        private $ctrlIndex;
        private $ctrlExpositions;
        private $ctrlExposition;
        private $ctrlOeuvres;
        private $ctrlOeuvre;

        public function __construct(){
            $this->ctrlExpositions = new ControlerExpositions();
            $this->ctrlExposition = new ControlerExposition();
            $this->ctrlOeuvres = new ControlerOeuvres();
            $this->ctrlOeuvre = new ControlerOeuvre();
            $this->ctrlIndex  = new ControlerIndex();
        }

        public function routeQuery(){
            try{
                switch ($_GET['action']) {
                    case 'expositions':
                        $this->ctrlExpositions->expositions();
                    break;
                    case 'index':
                        $this->ctrlIndex->index();
                    break;
                    case 'oeuvres':
                        $this->ctrlOeuvres->oeuvres();
                    break;
                    case 'oeuvre':
                        $this->ctrlOeuvre->oeuvre($_GET['id']);
                    break;
                    case 'exposition':
                        $this->ctrlExposition->exposition($_GET['id']);
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