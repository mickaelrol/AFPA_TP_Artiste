<?php

    require 'models/model.php';

    class Exposition extends Model {
        public function getLastExpositions(){
            $sql = "SELECT * FROM exposition ORDER BY id DESC LIMIT 2";
            $getLastExpo = $this->goQuery($sql);
            return $getLastExpo ;
        }
        public function getAllExpositions(){
            $sql = "SELECT * FROM exposition";
            $getAllExpo =$this->goQuery($sql);
            return $getAllExpo;
        }
    }