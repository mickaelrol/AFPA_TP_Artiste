<?php


    class Oeuvre extends Model {
        private $id = $_GET['id'];
        
        public function getOeuvre($id){
            $sql = "SELECT * FROM oeuvre WHERE id  = ?";
            $getOeuvre =$this->goQuery($sql,array($id));
            return $getOeuvre;
        }
    }