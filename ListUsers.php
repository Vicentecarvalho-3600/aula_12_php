<?php 

class ListUsers extends Conn {
    
    public object $conn;

    public function list():array {
        $this->conn = $this->conectar();
        $queryUsers = "SELECT id, name, email FROM user  order by id desc limit 40";
        $resultUsers = $this->conn->prepare($queryUsers);
        $resultUsers->execute();
        $retorno =$resultUsers->fetchAll();
        return $retorno;

    }
}