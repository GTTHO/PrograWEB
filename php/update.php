<?php
$servername = localhost;
$username = root;
$password = 12345678;
$db = unad43;
$table = tabla43;
$id = $_POST['id'];
$name = $_POST['name'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername;dbname=$db;",
      $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE $table SET nombre='$name', marca='$marca', precio='$precio', cantidad='$cantidad' WHERE id=$id";
            $conn->exec($sql);
            echo "Record updated successfully ";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>