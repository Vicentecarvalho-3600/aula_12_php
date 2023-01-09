<?php

abstract class Conn {
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "vicente";
    public int $port = 3306;
    public object $connect;

    public function conectar () {
        try  {
            // $this->connect = new PDO($this->db. ':host=' . $this->host . ';port=' . $this->port . ';dbname='.
            // $this->dbname, $this->user, $this->pass);

            $this->connect = new PDO($this->db. ':host=' . $this->host .';dbname='.
            $this->dbname, $this->user, $this->pass);

            // echo "Conexão realizada com sucesso<br>"; 

            return $this->connect;

        }catch (Exception $err) {
            
            die("Erro: por favor tente novamente. Caso o problema persista, entre
            em contato o administrador vicentecarvalho.cooknet@gmail.com");
            
        }
    }

}

?>