<?php

class Visit {

    private $DoctorID;
    private $PatientID;
    private $VisitID;
    private $DiseaseID;
    private $Date;

      //Getters
    function getDoctorID() {
        return $this->DoctorID;
    }
    function getVisitID()  {
        return $this->VisitID;
    }
    function getDiseaseID()  {
        return $this->DiseaseID;
    }
    function getPatientID() {
        return $this->PatientID;
    }
    function getDate()  {
        return $this->Date;
    }

    //Setters
    function setDoctorID( $DoctorID){
        $this->DoctorID = $DoctorID;
    }
    function setVisitID( $VisitID){
        $this->VisitID = $VisitID;
    }
    function setDiseaseID($DiseaseID){
        $this->DiseaseID = $DiseaseID;
    }
    function setDate($Date){
        $this->Date = $Date;
    }
    function setPatientID($PatientID){
        $this->PatientID = $PatientID;
    }
    

}