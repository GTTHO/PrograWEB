<?php
$servername = localhost;
$username = root;
$password = 12345678;
$db = unad43;
$table = tabla43;
$id = $_POST['id2'];
$name = $_POST['name2'];
$marca = $_POST['marca2'];
$precio = $_POST['preciodb2'];
$cantidad = $_POST['cantcomp2'];

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