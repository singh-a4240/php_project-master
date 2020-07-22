<?php


class DoctorDAO  {

    //Static DB member to store the database
    private static $db;

    //Initialize the DoctorDAO
    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    //Get all the Doctor
    static function getDoctors() {
        
        // SELECT        
        $selectAll = "SELECT * FROM Doctor;";
        //Prepare the Query
        //Return the results      
        //Return the resultSet
        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultSet();
        
        
    }

static function getDoctor(int $DoctorID)  {
    $getQuery = "SELECT * FROM Doctor WHERE DoctorID = :Doctorid";
   
    //QUERY, BIND, EXECUTE, RETURN
    self::$db->query($getQuery);
    self::$db->bind(':Doctorid', $DoctorID);
    return self::$db->singleResult();
}

static function signup(Doctor $newDoctor) {

    // QUERY BIND EXECUTE RETURN
    $sqlInsert = "INSERT INTO Doctor (DoctorID,Name, Email, Address, PhoneNumber, Password,Speciality)
    VALUES (:DoctorId,:name, :email, :address, :phoneNumber, :password,:speciality)";

    self::$db->query($sqlInsert);
    self::$db->bind(':DoctorId',$newDoctor->getDoctorID());
    self::$db->bind(':name',$newDoctor->getName());
    self::$db->bind(':email',$newDoctor->getEmail());
    self::$db->bind(':address',$newDoctor->getAddress());
    self::$db->bind(':phoneNumber',  $newDoctor->getPhoneNumber());
    self::$db->bind(':password',$newDoctor->getPassword());
    self::$db->bind(':speciality',$newDoctor->getSpeciality());

    self::$db->execute();
    return self::$db->lastInsertId();
  
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
 static function DoctorLogin($DoctorId,$password) {

        // I don't need any parameter here, do I need to bind?
        $getQuery = "SELECT * FROM Doctor WHERE DoctorID=:DoctorId AND Password=:password;";
        //Prepare the Query
        self::$db->query($getQuery);

        self::$db->bind(':DoctorId',$DoctorId);
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

    static function updateDoctor (Doctor $DoctorToUpdate) {

        //QUERY, BIND, EXECUTE
        $updateQuery = "UPDATE Doctor SET Name=:name , Email=:email , Address=:address,
         PhoneNumber=:phoneNumber ,Password=:password,Speciality=:speciality  WHERE DoctorID=:DoctorId";
        // Return the rowCount
        self::$db->query($updateQuery);
        self::$db->bind(':DoctorId',$DoctorToUpdate->getDoctorID());
        self::$db->bind(':name',$DoctorToUpdate->getName());
        self::$db->bind(':email',$DoctorToUpdate->getEmail());
        self::$db->bind(':address',$DoctorToUpdate->getAddress());
        self::$db->bind(':phoneNumber',  $DoctorToUpdate->getPhoneNumber());
        self::$db->bind(':password',$DoctorToUpdate->getPassword());
        self::$db->bind(':speciality',$DoctorToUpdate->getSpeciality());

        self::$db->execute();

        return self::$db->rowCount();
    }

    static function deleteDoctor(int $DoctorID) {

        $deleteQuery = "DELETE FROM Doctor WHERE DoctorID = :id;";
        try{
            self::$db->query($deleteQuery);
            self::$db->bind(':id', $DoctorID);
            self::$db->execute();

            if(self::$db->rowCount() != 1){
                throw new Exception("Problem in deleting Doctor $DoctorID");
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            self::$db->debugDumpParams();
            return false;
        }

        return true;
    }
}


?>