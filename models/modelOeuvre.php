<?php

    class Oeuvre extends Model {
        public function getOeuvre($id){
            $sql = "SELECT * FROM oeuvre WHERE id  = ?";
            $getOeuvre =$this->goQuery($sql,array($id));
            $retour = $getOeuvre->fetch();
            $getOeuvre->closeCursor();
            return $retour;
        }
    }