<?php

    class Exposition extends Model {
        public function getExposition($id){
            $sql = "SELECT * FROM oeuvre O INNER JOIN oeuvre_exposee E ON O.id = E.id_oeuvre WHERE E.id_exposition = ?";
            $getExposition =$this->goQuery($sql,array($id));
            $retour = $getExposition->fetchAll();
            $getExposition->closeCursor();
            return $retour;
        }
    }