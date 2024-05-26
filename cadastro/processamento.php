<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Conecta_bd</title>
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
   <?php


$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

$email = "sindico@gmail.com";
         $senha = "123";

/*echo $recebe_email;
echo $recebe_senha;  
echo '
   <a href="listar.php"><h1 class="w3-button w3-blue">Sucesso! </h1></a>
   ';
*/
if($email == $recebe_email && $senha == $recebe_senha)
{
   header('Location: listarRemover.php'); 
}else
{
   echo '
   <a href="novologin.php">
   <h1 class="w3-button w3-blue">ERRO! </h1>
   </a>
   '; 
}     
      ?>
   </div>
        
</body>
</html>