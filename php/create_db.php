<?php
$servername = $_POST['servidor'];
$username = $_POST['user'];
$password = $_POST['passwd'];
$db = $_POST['dbname'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername",
      $username, $password);
 
    // Set the PDO error mode
    // to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: "
      . $e->getMessage();
}

// Crear database
$sql = "CREATE DATABASE $db";
if ($conn->query($sql) == TRUE) {
  echo " Database created successfully \n";
} else {
  echo " Error creating database: " . $conn->error;
}

?>