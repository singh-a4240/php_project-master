<?php


Class Patient    {

    

    //Attributes
     private $PatientID;
     private $Password;
     private $Name;
     private $Email;
     private $PhoneNumber;
     private $Address;


     function getPatientID() {
        return $this->PatientID;
    }

    function getPassword() {
        return $this->Password;
    }

    function getName() {
        return $this->Name;
    }

    function getEmail() {
        return $this->Email;
    }
    function getPhoneNumber() {
        return $this->PhoneNumber;
    }

    function getAddress() {
        return $this->Address;
    }
    //Getters
    
    function setPatientID($PatientID) {
         $this->PatientID =$PatientID;
    }

    function setPassword($Password) {
         $this->Password=$Password;
    }

    function setName($Name) {
         $this->Name = $Name;
    }

    function setEmail($Email) {
         $this->Email=$Email;
    }
    function setPhoneNumber($PhoneNumber) {
         $this->PhoneNumber=$PhoneNumber;
    }

    function setAddress($Address) {
         $this->Address=$Address;
    }
    //Setters
    
}

?>