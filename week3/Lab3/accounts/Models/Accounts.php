<?php

class Accounts extends DB {

    public function __construct() {

        $dbConfig = array(
            "DB_DNS" => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            "DB_USER" => 'root',
            "DB_PASSWORD" => ''
        );
        parent::__construct($dbConfig);
    }

    public function signup($email, $password) {
        $db = $this->getDB();
        $prepstat = $db->prepare("insert into Users set email = :email,password = :password, created = NOW()");

        $binds = array(
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        );
        if ($prepstat->execute($binds) && $prepstat->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function login($email, $password) {
        $db = $this->getDB();

        $prepstat = $db->prepare("Select * from users where email = :email");
        $binds = array(":email" => $email);

        if ($prepstat->execute($binds) && $prepstat->rowCount() > 0) {
            $results = $prepstat->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $results['password'])) {
                return $results['user_id'];
            }
        }
        return 0;
    }

}
