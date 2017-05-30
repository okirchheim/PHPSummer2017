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
       
        $stmt = $this->getDb()->prepare("SELECT * FROM corps where id = :id");
        $binds = array("id"=>$id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
    
    public function post($serverData) {
        /* note you should validate before adding to the data base */
            
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, "
                . " owner = :owner, phone = :phone, location = :location");
        
       $binds = array(            
            ":corp" => $serverData['corp'],            
            ":incorp_dt" => $serverData['incorp_dt'],
            ":email" => $serverData['email'],            
            ":owner" => $serverData['owner'],
            ":phone" => $serverData['phone'],
            ":location" => $serverData['location']);
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0)
            {
                return true;
            } 
        return false;
    }
    public function put($id) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, "
                . " owner = :owner, phone = :phone, location = :location WHERE id =:id");
        
        $binds = array(            
            ":corp" => $id['corp'],            
            ":incorp_dt" => $id['incorp_dt'],
            ":email" => $id['email'],            
            ":owner" => $id['owner'],
            ":phone" => $id['phone'],
            ":location" => $id['location']
            
        );
            $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    public function delete ($id) {
       
        $stmt = $this->getDb()->prepare("Delete From corps where id=:id");
         $binds = array(
            ":id"=>$id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
}