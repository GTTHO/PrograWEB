<?php
$servername = 'localhost';
$username = 'root';
$password = '12345678';
$db = 'unad43';
$table = 'tabla43';
$id = $_POST['id3'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername;dbname=$db;",
      $username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM $table WHERE id=$id";
            $conn->exec($sql);
            echo "Record deleted successfully ";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>