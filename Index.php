


<?php 



// require the config
require_once("inc/config.inc.php");

// require all the entities
require_once("inc/Entity/Patient.class.php");
require_once("inc/Entity/Doctor.class.php");
require_once("inc/Entity/Disease.class.php");
require_once("inc/Entity/Visit.class.php");
require_once("inc/Entity/Page.class.php");

// require all the utilities: PDO and DAO(s)
require_once("inc/Utility/PatientDAO.class.php");
require_once("inc/Utility/DoctorDAO.class.php");
require_once("inc/Utility/DiseaseDAO.class.php");
require_once("inc/Utility/VisitDAO.class.php");

require_once("inc/Utility/PDOService.class.php");
//Initialize the DAO(s)
PatientDAO::initialize("Patient");
DoctorDAO::initialize("Doctor");
DiseaseDAO::initialize("Disease");
VisitDAO::initialize("Visit");

Page::header();
Page::body();
Page::footer();
Page::signupform();
Page::loginform();


if (!empty($_POST)) {
    if(PatientDAO::getPatient($_POST['UID'])==null){

      $newPatient = new Patient;
      $newPatient->setPatientID($_POST['UID']);
      $newPatient->setPassword($_POST['Password']);
      $newPatient->setName($_POST['name']);
      $newPatient->setEmail($_POST['email']);
      $newPatient->setAddress($_POST['address']);
      $newPatient->setPhoneNumber($_POST['phoneNumber']);


      PatientDAO::signup($newPatient);
      }
      else{
        echo "Patient Id exists.";
      }
    }
    
    if (!empty($_GET)) {

      if(PatientDAO::patientLogin($_GET['LUID'],$_GET['LPassword'])){
        echo "Login Success";
      }
      else{
        echo "Login Failure";
      }
    }



