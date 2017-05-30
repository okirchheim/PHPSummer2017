<?php
/**
 * Lets implement the REST CRUD model for our API
 */
class CorpsResource extends DBSpring implements IRestModel {
    
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM corps");
        $results = array();      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    
    public function get($id) {
       
        $stmt = $this->getDb()->prepare("SELECT * FROM corps WHERE id = :id");
        $binds = array(":id" => $id);
        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }        
        return $results;                
    }
    
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, location = :location,"
                . " owner = :owner, phone = :phone WHERE id = :id");
       
        $binds = array(
            ":id" =>$id,
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone']
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    public function put($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, email = :email, incorp_dt = :incorp_dt, location = :location,"
                . " owner = :owner, phone = :phone WHERE id=:");
        $binds = array(
            ":corp" => $serverData['corp'],
            ":email" => $serverData['email'],
            ":incorp_dt" => $serverData['incorp_dt'],
            ":location" => $serverData['location'],
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone']
            
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    public function delete ($id) {
       
        $stmt = $this->getDb()->prepare("Delete From corps where id = :id");        

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
}