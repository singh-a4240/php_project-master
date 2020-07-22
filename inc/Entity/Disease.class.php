<?php


class Disease {

    private $DiseaseID;
    private $Type;
    private $Description;
  

      //Getters
    function getDiseaseID() {
        return $this->DiseaseID;
    }
    function getDescription()  {
        return $this->Description;
    }
    function getType() {
        return $this->Type;
    }

    //Setters
    function setDiseaseID( $DiseaseID){
        $this->DiseaseID = $DiseaseID;
    }
    function setDescription( $Description){
        $this->Description = $Description;
    }
    function setType($Type){
        $this->Type = $Type;
    }
}