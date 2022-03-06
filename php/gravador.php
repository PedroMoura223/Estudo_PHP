<?php 
include_once("indexD.php");

$email = $_POST["Email"];
$senha = $_POST["Senha"];
 echo $email.$senha;

$inserir = "INSERT INTO pessoa (Email,Senha) VALUES ('$email','$senha')";
$conectando = mysqli_query($conn,$inserir);


if(mysqli_insert_id($conn)){
	header("Location: ../Cadastro.php");
}else{
	header("Location: ../Cadastro.php");
 
}
 ?>