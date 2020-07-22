<?php

class Doctor {

    private $DoctorID;
    private $Password;
    private $Name;
    private $Email;
    private $PhoneNumber;
    private $Address;
    private $Speciality;

      //Getters
    function getDoctorID() {
        return $this->DoctorID;
    }
    function getName()  {
        return $this->Name;
    }
    function getEmail()  {
        return $this->Email;
    }
    function getPassword() {
        return $this->Password;
    }
    function getPhoneNumber()  {
        return $this->PhoneNumber;
    }
    function getAddress()  {
        return $this->Address;
    }
    function getSpeciality()  {
        return $this->Speciality;
    }

    //Setters
    function setDoctorID( $DoctorID){
        $this->DoctorID = $DoctorID;
    }
    function setName( $Name){
        $this->Name = $Name;
    }
    function setEmail($Email){
        $this->Email = $Email;
    }
    function setAddress($Address){
        $this->Address = $Address;
    }
    function setPhoneNumber($PhoneNumber){
        $this->PhoneNumber = $PhoneNumber;
    }
    function setPassword($Password){
        $this->Password = $Password;
    }
    function setSpeciality($Speciality)
    {
        $this->Speciality = $Speciality;
    }

}