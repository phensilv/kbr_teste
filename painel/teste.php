<?php 
include('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="data:image/jpeg;base64,<?php echo base64_encode($imagem_dados); ?>" alt="Imagem">;
</body>
</html>


