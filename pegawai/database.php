<?php

class Koneksi{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "dbpegawai";
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username,$this->password);
        mysqli_select_db($this->conn, $this->dbName);
    }

    function tampilData()
    {
        $data = mysqli_query($this->conn, "SELECT * FROM tbpegawai");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

}




?>