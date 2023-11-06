<?php
include('conexao.php');

if (isset($_GET['id_animais'])) {
    $id_animais = $_GET['id_animais'];
    
    
    $sqlDelete = "DELETE FROM animais WHERE id_animais='$id_animais'";
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