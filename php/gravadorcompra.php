<?php 
include_once("indexD.php");

$email = $_POST["Email"];
$cartao = $_POST["Cartao"];
$nome = $_POST["Nome"];
$sobrenome = $_POST["Sobrenome"];
$produto= $_POST["Produto"];




$inserir = "INSERT INTO produto (Email,Cartao,Nome,Sobrenome,Produto) VALUES ('$email','$cartao','$nome','$sobrenome','$produto')";
$conectando = mysqli_query($conn,$inserir);


if(mysqli_insert_id($conn)){
	header("Location: ../Tela De Compras.html");
}else{
	header("Location: ../Tela De Compras.html");
 
}


 ?>