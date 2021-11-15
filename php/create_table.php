<?php
$servername = $_POST['servidortb'];
$username = $_POST['usertb'];
$password = $_POST['passwdtb'];
$db = $_POST['dbnametb'];
$table = $_POST['table'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername;dbname=$db;",
      $username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: "
      . $e->getMessage();
}

// Crear database

$sql = "CREATE TABLE $table (id int(20) not null, nombre varchar(100) not null, marca varchar(100) not null, precio int(20) not null, cantidad int(20) not null )";

if ($conn->query($sql) == TRUE) {
  echo " Table created successfully ";
} else {
  echo " Error creating table: " . $conn->error;
}
?>