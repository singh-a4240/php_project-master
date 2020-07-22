
<?php


class VisitDAO  {

    //Static DB member to store the database    
    private static $db;
    //Initialize the VisitDAO
    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    static function addVisit(Visit $newVisit) {

      // QUERY BIND EXECUTE RETURN
      $sqlInsert = "INSERT INTO Visit (VisitID,PatientID, DoctorID,DiseaseID,Date)
      VALUES (:VisitId,:patientID, :doctorID,:diseaseID,:date)";

      self::$db->query($sqlInsert);
      self::$db->bind(':VisitId',$newVisit->getVisitID());
      self::$db->bind(':patientID',$newVisit->getPatientID());
      self::$db->bind(':doctorID',$newVisit->getDoctorID());
      self::$db->bind(':diseaseID',$newVisit->getDiseaseID());
      self::$db->bind(':date',$newVisit->getDate());

      self::$db->execute();
      return self::$db->lastInsertId();
    
  }
    
    static function getVisit(int $VisitID)  {
        $getQuery = "SELECT * FROM Visit WHERE VisitID = :Visitid";
       
        //QUERY, BIND, EXECUTE, RETURN
        self::$db->query($getQuery);
        self::$db->bind(':Visitid', $VisitID);
        print_r( self::$db->singleResult()     );

        return self::$db->singleResult();
    }

    // GET = READ = SELECT ALLL
    // This is to get all reservations 
    static function getVisits() {

        // I don't need any parameter here, do I need to bind?
        $getQuery = "SELECT * FROM Visit;";
        //Prepare the Query
        self::$db->query($getQuery);
        //execute the query
        self::$db->execute();
        //Return results
        print_r( self::$db->resultSet()     );
        return self::$db->resultSet();
    }
    
    // UPDATE means update
    static function updateVisit (Visit $VisitToUpdate) {

      //QUERY, BIND, EXECUTE
      $updateQuery = "UPDATE Visit SET DoctorID=:doctorID , DiseaseID=:diseaseID,PatientID=:patientID,Date=:date WHERE VisitID=:VisitId";
      // Return the rowCount
      self::$db->query($updateQuery);
      self::$db->bind(':VisitId',$VisitToUpdate->getVisitID());
      self::$db->bind(':patientID',$VisitToUpdate->getPatientID());
      self::$db->bind(':doctorID',$VisitToUpdate->getDoctorID());
      self::$db->bind(':diseaseID',$VisitToUpdate->getDiseaseID());
      self::$db->bind(':date',$VisitToUpdate->getDate());

      self::$db->execute();

      return self::$db->rowCount();
  }
  
  // DELETE
  static function deleteVisit(int $VisitID) {

      $deleteQuery = "DELETE FROM Visit WHERE VisitID = :id;";
      try{
          self::$db->query($deleteQuery);
          self::$db->bind(':id', $VisitID);
          self::$db->execute();

          if(self::$db->rowCount() != 1){
              throw new Exception("Problem in deleting Visit $VisitID");
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