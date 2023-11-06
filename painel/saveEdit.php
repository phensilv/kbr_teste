<?php 
include('conexao.php');

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);;

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email', senha='$senha'
    WHERE id='$id'";

    $result = $mysqli->query($sqlUpdate);
}
header('Location: painel.php');


?>