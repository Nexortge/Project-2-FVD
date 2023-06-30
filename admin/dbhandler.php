<?php
class dbHandler{

    private $datasource = "mysql:host=localhost;dbname=fvd-data";
    private $username = "root";
    private $password = "";

    function getAllUsers(){
        $pdo = new PDO($this->datasource, $this->username, $this->password);
        $statment = $pdo->prepare("SELECT * FROM users");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    function editUser($id, $firstName, $lastName, $email, $password, $phoneNumber){
        $pdo = new PDO($this->datasource, $this->username, $this->password);
        $statment = $pdo->prepare("UPDATE users SET firstName = :firstName, lastName = :lastName, email = :email, password = :password, phoneNumber = :phoneNumber WHERE id = :id");
        $statment->bindParam(":id", $id, PDO::PARAM_INT);
        $statment->bindParam(":firstName", $firstName, PDO::PARAM_STR);
        $statment->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $statment->bindParam(":email", $email, PDO::PARAM_STR);
        $statment->bindParam(":password", $password, PDO::PARAM_STR);
        $statment->bindParam(":phoneNumber", $phoneNumber, PDO::PARAM_STR);
        $statment->execute();
    }

    function deleteUser($id){
        $pdo = new PDO($this->datasource, $this->username, $this->password);
        $statment = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $statment->bindParam(":id", $id, PDO::PARAM_INT);
        $statment->execute();
    }

    function createUser($firstName, $lastName, $email, $password, $phoneNumber){
        $pdo = new PDO($this->datasource, $this->username, $this->password);
        $statment = $pdo->prepare("INSERT INTO users (firstName, lastName, email, password, phoneNumber) VALUES (:firstName, :lastName, :email, :password, :phoneNumber)");
        $statment->bindParam(":firstName", $firstName, PDO::PARAM_STR);
        $statment->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $statment->bindParam(":email", $email, PDO::PARAM_STR);
        $statment->bindParam(":password", $password, PDO::PARAM_STR);
        $statment->bindParam(":phoneNumber", $phoneNumber, PDO::PARAM_STR);
        $statment->execute();
    }

    public function getPasswordByEmail($email) {
        $pdo = new PDO($this->datasource, $this->username, $this->password);
        $statement = $pdo->prepare("SELECT password FROM users WHERE email = :email");
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        var_dump($result);
        return $result['password'];
    }

}