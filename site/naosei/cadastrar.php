<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Topo com Logo</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }
            header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #333;
                padding: 10px 20px;
                color: white;
            }
            header img {
                height: 50px;
            }
            nav a {
                color: white;
                text-decoration: none;
                margin: 0 10px;
            }
</style>
<body>
<header>
            <img src="carrinho.png" alt="Logo">
            <center>MERCADORIAS</center>
            <nav>
           
            </nav>
        </header>
    <h1>Cadastrar</h1><br>
    <form action="cadastro_script.php" method="POST"></form>
    <form method="post" action="cadastro.php">

    Nome: <input type="text" name="name" required><br>

    E-mail: <input type="email" name="email" required><br>

    Senha: <input type="password" name="password" required><br>
    
    <a href="paginainicial.php">entrar</a>

    </form>
    <br>
    <a href="login.php">Faça Login</a>

</body>
</html>