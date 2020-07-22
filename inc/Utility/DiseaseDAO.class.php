<?php


class DiseaseDAO  {

    //Static DB member to store the database    
    private static $db;
    //Initialize the DiseaseDAO
    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    
    static function addDisease(Disease $newDisease) {

        // QUERY BIND EXECUTE RETURN
        $sqlInsert = "INSERT INTO Disease (DiseaseID,Type, Description)
        VALUES (:DiseaseId,:type, :description)";

        self::$db->query($sqlInsert);
        self::$db->bind(':DiseaseId',$newDisease->getDiseaseID());
        self::$db->bind(':type',$newDisease->getType());
        self::$db->bind(':description',$newDisease->getDescription());

        self::$db->execute();
        return self::$db->lastInsertId();
      
    }
    
    
    // GET = READ = SELECT
    static function getDisease(int $DiseaseID)  {
        $getQuery = "SELECT * FROM Disease WHERE DiseaseID = :Diseaseid";
       
        //QUERY, BIND, EXECUTE, RETURN
        self::$db->query($getQuery);
        self::$db->bind(':Diseaseid', $DiseaseID);


        return self::$db->singleResult();
    }
 
    static function getDiseases() {

        $getQuery = "SELECT * FROM Disease;";
        //Prepare the Query
        self::$db->query($getQuery);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->resultSet();
    }
    
    
    // UPDATE means update
    static function updateDisease (Disease $DiseaseToUpdate) {

        //QUERY, BIND, EXECUTE
        $updateQuery = "UPDATE Disease SET Type=:type , Description=:description WHERE DiseaseID=:DiseaseId";
        // Return the rowCount
        self::$db->query($updateQuery);
        self::$db->bind(':DiseaseId',$DiseaseToUpdate->getDiseaseID());
        self::$db->bind(':type',$DiseaseToUpdate->getType());
        self::$db->bind(':description',$DiseaseToUpdate->getDescription());
        self::$db->execute();

        return self::$db->rowCount();
    }
    
    // DELETE
    static function deleteDisease(int $DiseaseID) {

        $deleteQuery = "DELETE FROM Disease WHERE DiseaseID = :id;";
        try{
            self::$db->query($deleteQuery);
            self::$db->bind(':id', $DiseaseID);
            self::$db->execute();

            if(self::$db->rowCount() != 1){
                throw new Exception("Problem in deleting Disease $DiseaseID");
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