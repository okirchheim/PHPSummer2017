<?php

class AddressResoruce extends DBSpring implements IRestModel {
    
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM address");
        $results = array();      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    
    public function get($id) {
       
        $stmt = $this->getDb()->prepare("SELECT * FROM address where address_id = :address_id");
        $binds = array(":address_id" => $id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
    
    public function post($serverData) {
        /* note you should validate before adding to the data base */
        $stmt = $this->getDb()->prepare("INSERT INTO address SET email = :email, password = password");
        $binds = array(
            
            ":email" => $serverData['email'],
            ":password" => $serverData['password'],
            
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }
    
}