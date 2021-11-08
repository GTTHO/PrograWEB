<?php
$servername = $_POST['servidor'];
$username = $_POST['user'];
$password = $_POST['passwd'];
$db = $_POST['dbname'];
$table = $_POST['tablename'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername;dbname=$db;",
      $username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
 
    echo "Connected successfully ";
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