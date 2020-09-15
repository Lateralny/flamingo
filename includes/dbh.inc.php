<?php
class Database{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username="postgres";
        $this->password="JC2GTA4a";
        $this->host="localhost";
        $this->database="postgres";
    }
    public function connect()
    {
        $connectionString = "pgsql:host=$this->host".";
        port=5432;dbname=$this->database;"."user=$this->username;"."password=$this->password";
        try
        {
            $conn= new PDO
            (
                $connectionString,
                //$this->username,
                //$this->password
            );
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); //sciaga kolejne pozycje w postaci tablicy array
            return $conn;
        }
        catch(PDOException $e) {
            die("Connectionfailed:".$e->getMessage());
        }
    }
}

//$conn = null;
