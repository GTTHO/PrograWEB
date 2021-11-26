<?php
Class dbConn{
    /* Database connection start */
    var $dbhost = "localhost";
    var $username = "root";
    var $password = "12345678";
    var $dbname = "unad43";
    var $table = "tabla43";
    var $conn;
//Funcion de conexion MySQL
function getConexion() {
    $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
    
    /* Revisamos la conexion */
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    } else {
    $this->conn = $con;
    }
    return $this->conn;
    }
    }
    ?>
