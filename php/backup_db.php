<?php

$servername = $_POST['servidor'];
$username = $_POST['user'];
$password = $_POST['passwd'];
$db = $_POST['dbname'];
$dumpbk = $db . date("_Y-m-d-H-i-s") . '.sql';

$command='C:\AppServ\MySQL\bin\mysqldump.exe -h ' .$servername .' -u ' .$username .' --password='.$password .' ' .$db .' > ' .$dumpbk;
system($command,$output);

echo 'La Base de Datos <b>' .$db .'</b> fue exitosamente almacenada en: '.getcwd().'/' .$dumpbk .'</b>';

?>