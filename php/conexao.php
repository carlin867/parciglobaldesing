<?php

class Database{
    private $host;
    private $username;
    private $password;
    private $database;
    private $drive;

    private $connect;

    function __construct( $host, $username, $password, $database,$drive ){

    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'db1';
        $this->drive = 'mysql';
    }

}
    function getConexao(){
        try{
            $this->connect= new PDO(
                "$this->drive: host=$this.>host; database=$this->database",
                $this->username,$this->password
            );

            $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

            return $this-> connect;
        }catch(
            Exception $e
        ){
            echo $e-> getMessage();
        }
    }
}

