<?php 
include_once("indexD.php");

$email = $_POST["Email"];
$senha = $_POST["Senha"];
 
$inserir = "DELETE FROM pessoa WHERE senha='$senha'";
$conectando = mysqli_query($conn,$inserir);


if(mysqli_insert_id($conn)){
	header("Location: ../ExcluirConta.html");
}else{
	header("Location: ../ExcluirConta.html");
 
}
 ?>