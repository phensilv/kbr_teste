<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
    $result = $mysqli->query($sqlDelete);

    if ($result) {
        
        header('Location: painel.php');
    } else {
        
        echo "Erro ao excluir o registro.";
    }
} else {
    echo "ID não especificado.";
}
?>