<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$estadocivil = $_POST["estadocivil"];
$sexo = $_POST["sexo"];

include_once "conexao.php";
$comando = "INSERT INTO `clientes`(`nome`, `email`, `estadocivil`, `sexo`) VALUES ('$nome','$email','$estadocivil','$sexo')";

mysqli_query($con,$comando);
echo "<br>".$nome;
echo "<br>".$email;
echo "<br>".$estadocivil;
echo "<br>".$sexo;
echo "<br>";
?>
<!DOCTYPE html>
<html>

<body>

</body>
</html>