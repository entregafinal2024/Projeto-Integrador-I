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
 $host = "localhost";
 $usuario = "root";
 $senha = "usbw";
 $bd = "geral_bd";
 /*$bd = "testefig";*/
 try{
 $conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; chars
et=utf8", $usuario, $senha);
 $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
 echo "falha ao conectar: ". $e->getMessage();
 }
 
/* $sql = "INSERT INTO primeira (nome, gas, bicicleta, cachorro, gato)     ----'".$_POST['']."',-----
 VALUES ('".$_POST['proprietario']."', '".$_POST['gas']."', '".$_POST['bicicleta']."', '".$_POST['cachorro']."', '".$_POST['gato']."')";
*/
$sql = "INSERT INTO morador (bloco, apartamento, condomino, cpf, rg, data_nascimento, tel_pessoal,
tel_comercial, email, pnome_1, pnascimento_1, pparentesco_1, pnome_2, pnascimento_2, pparentesco_2,
pnome_3, pnascimento_3, pparentesco_3, pnome_4, pnascimento_4, pparentesco_4, gas, bicicleta, cachorro, gato,
placa_carro, modelo_carro, cor_carro, placa_moto, modelo_moto, cor_moto, vaga_provisoria )
 VALUES ('".$_POST['bloco']."', '".$_POST['apartamento']."', '".$_POST['condomino']."',
  '".$_POST['cpf']."', '".$_POST['rg']."', '".$_POST['data_nascimento']."',
  '".$_POST['tel_pessoal']."', '".$_POST['tel_comercial']."', '".$_POST['email']."',
  '".$_POST['pnome_1']."', '".$_POST['pnascimento_1']."', '".$_POST['pparentesco_1']."', '".$_POST['pnome_2']."',
  '".$_POST['pnascimento_2']."', '".$_POST['pparentesco_2']."', '".$_POST['pnome_3']."',
  '".$_POST['pnascimento_3']."', '".$_POST['pparentesco_3']."', '".$_POST['pnome_4']."',
  '".$_POST['pnascimento_4']."', '".$_POST['pparentesco_4']."', '".$_POST['gas']."', 
  '".$_POST['bicicleta']."', '".$_POST['cachorro']."', '".$_POST['gato']."',
  '".$_POST['placa_carro']."', '".$_POST['modelo_carro']."', '".$_POST['cor_carro']."',
  '".$_POST['placa_moto']."', '".$_POST['modelo_moto']."', '".$_POST['cor_moto']."',
  '".$_POST['vaga_provisoria']."')";

try{
    $resultado = $conecta->query($sql);
    echo '
    <a href="principal.php">
    <h1 class="w3-button w3-blue">Cadastro Salvo com sucesso! </h1>
    </a>
    ';
    }catch(PDOException $e){
    echo '
    <a href="principal.php">
    <h1 class="w3-button w3-blue">ERRO! </h1>
    </a>
    ';
    }
    ?>
   </div>
      
    
</body>
</html>