<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Código</th><th>Nombre</th><th>Marca</th><th>Precio de Compra</th><th>Cantidad Comprada</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = 'localhost';
$username = 'root';
$password = '12345678';
$db = 'unad43';
$table = 'tabla43';
$id = $_POST['id4'];

// Crear conexión
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db;",$username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("SELECT * FROM $table WHERE id='$id'");
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll())) as $k=>$v) {
              echo $v;
            }
    } catch(PDOException $e) 
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
echo "</table>";
?>