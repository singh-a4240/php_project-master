<?php


class PatientDAO  {

    //Static DB member to store the database    
    private static $db;
    //Initialize the PatientDAO
    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    
    static function signup(Patient $newPatient) {

        // QUERY BIND EXECUTE RETURN
        $sqlInsert = "INSERT INTO Patient (PatientID,Name, Email, Address, PhoneNumber, Password)
        VALUES (:patientId,:name, :email, :address, :phoneNumber, :password)";

        self::$db->query($sqlInsert);
        self::$db->bind(':patientId',$newPatient->getPatientID());
        self::$db->bind(':name',$newPatient->getName());
        self::$db->bind(':email',$newPatient->getEmail());
        self::$db->bind(':address',$newPatient->getAddress());
        self::$db->bind(':phoneNumber',  $newPatient->getPhoneNumber());
        self::$db->bind(':password',$newPatient->getPassword());

        self::$db->execute();
        return self::$db->lastInsertId();
      
    }
    
    
    // GET = READ = SELECT
    // This is for a single result.... when do I need it huh?
    static function getPatient(int $PatientID)  {
        $getQuery = "SELECT * FROM Patient WHERE PatientID = :Patientid";
       
        //QUERY, BIND, EXECUTE, RETURN
        self::$db->query($getQuery);
        self::$db->bind(':Patientid', $PatientID);

        return self::$db->singleResult();
    }

    // GET = READ = SELECT ALLL
    // This is to get all reservations 
    static function getPatients() {

        // I don't need any parameter here, do I need to bind?
        $getQuery = "SELECT * FROM patient;";
        //Prepare the Query
        self::$db->query($getQuery);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->resultSet();
    }
    
    static function patientLogin($patientId,$password) {

        // I don't need any parameter here, do I need to bind?
        $getQuery = "SELECT * FROM patient WHERE PatientID=:patientId AND Password=:password;";
        //Prepare the Query
        self::$db->query($getQuery);

        self::$db->bind(':patientId',$patientId);
        self::$db->bind(':password',$password);

        //execute the query
        self::$db->execute();
        //Return results
        if(self::$db->singleResult()!=null){
        return true;
        }else{
            return false;
        }
    }
    // UPDATE means update
    static function updatePatient (Patient $PatientToUpdate) {

        //QUERY, BIND, EXECUTE
        $updateQuery = "UPDATE Patient SET Name=:name , Email=:email , Address=:address,
         PhoneNumber=:phoneNumber ,Password=:password  WHERE PatientID=:patientId";
        // Return the rowCount
        self::$db->query($updateQuery);
        self::$db->bind(':patientId',$PatientToUpdate->getPatientID());
        self::$db->bind(':name',$PatientToUpdate->getName());
        self::$db->bind(':email',$PatientToUpdate->getEmail());
        self::$db->bind(':address',$PatientToUpdate->getAddress());
        self::$db->bind(':phoneNumber',  $PatientToUpdate->getPhoneNumber());
        self::$db->bind(':password',$PatientToUpdate->getPassword());
        self::$db->execute();

        return self::$db->rowCount();
    }
    
    // DELETE
    static function deletePatient(int $PatientID) {

        // Yea...yea... it is a drill like the one before        
        $deleteQuery = "DELETE FROM Patient WHERE PatientID = :id;";
        try{
            self::$db->query($deleteQuery);
            self::$db->bind(':id', $PatientID);
            self::$db->execute();

            if(self::$db->rowCount() != 1){
                throw new Exception("Problem in deleting Patient $PatientID");
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            self::$db->debugDumpParams();
            return false;
        }

        return true;
    }

    // WE NEED TO JOIN HERE
    // Make sure to select from both tables joined at the correct column
    static function getReservationList() {
        
        //Prepare the Query
        $selectAll = "SELECT reservation.ReservationID, reservation.Name, reservation.Email, reservation.FacilityID, reservation.ReservationDate, reservation.Length, facility.FacilityName FROM reservation INNER JOIN facility ON reservation.FacilityID = facility.FacilityID;";
        self::$db->query($selectAll);
        //execute the query
        self::$db->execute();
        //Return row results
        return self::$db->resultSet();
    }

}


?>