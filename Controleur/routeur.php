<?php
    require 'models/model.php';
    require_once 'Controleur/controlerIndex.php';
    require_once 'Controleur/controlerExposition.php';
    require_once 'Controleur/controlerOeuvres.php';
    require_once 'Controleur/controlerOeuvre.php';
    


    class Router {

        private $ctrlIndex;
        private $ctrlExposition;
        private $ctrlOeuvres;
        private $ctrlOeuvre;

        public function __construct(){
            $this->ctrlExposition = new ControlerExposition();
            $this->ctrlOeuvres = new ControlerOeuvres();
            $this->ctrlOeuvre = new ControlerOeuvre();
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
                    case 'oeuvres':
                        $this->ctrlOeuvres->oeuvres();
                    break;
                    case 'oeuvre':
                        $this->ctrlOeuvre->oeuvre();
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