<?php
$servername = localhost;
$username = root;
$password = 12345678;
$db = unad43;
$table = tabla43;
$id = $_POST['idcod'];
$name = $_POST['name'];
$marca = $_POST['marca'];
$precio = $_POST['preciodb'];
$cantidad = $_POST['cantcomp'];

// Crear conexión
try {
    $conn = new PDO(
      "mysql:host=$servername;dbname=$db;",
      $username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO $table (id, nombre, marca, precio, cantidad) VALUES ('$id', '$name', '$marca', '$precio', '$cantidad')";
            $conn->exec($sql);
            echo "Record created successfully ";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>