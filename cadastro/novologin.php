<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Novo Login</title>
</head>
<body>
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-
third " style="">
<div class="w3-center">
<br>
<img src="img/foto.png" alt="Gabi" style="width:40%" class="w3-circle w3-margin-top">
</div>
        <form class="w3-container " action="processamento.php" method="post">
                <div class="w3-section">
                <label style="font-weight: bold;">Usuário</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o e-mail" name="email" required>
                <label style="font-weight: bold;">Senha</label>
                <input class="w3-input w3-border" type="text" placeholder="Digite a Senha" name="senha" required>
                <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Entrar</button>
                </div>
        </form>
<br>
</div>
</body>
</html>
