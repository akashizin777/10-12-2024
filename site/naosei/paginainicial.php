<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <style>         
    div input{
        padding-right: 400px;
        margin-left: 25%;
    }
    .topnav{
        padding-right: 400px;
        margin-top: 10%;
        display: flex;
        margin-left: 2%;
    }
    </style>
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
            .produto{
    display: flex;
    border-top: none;
    padding-top: 0;
}

.prod{
   flex: 1; /*distribui as 3 divs dentro do conteiner com larguras iguais*/
   margin: 5px; /*coloca uma margem entre elas*/
   text-align: center;
}

.prod img{
   max-width: 100%;
}
div a{
    background-color: black;
            cursor: pointer;
            background-color: black;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
}

element.style {
    width: 75%;
}


        </style>
    </head>
    <body>
        
        <header>
            <img src="carrinho.png" alt="Logo">
            <center>MERCADORIAS</center>
            <nav>
                <a href="login.php">desconectar-se</a>
            </nav>
        </header>
</head>
<body>
    <center><div class="topnav">
      </div></center>
      <div class="produto">
        <span class="prod">
            <br><br>
             <h3>geladeira</h3>
            <img src="geladeira.png" alt="" title="estagio 1" style="width: 35%;"
            > 
            <p>
                geladeira com freezer
        </p>
            <br><br>
            <a href="comprado.php">Comprar</a>
        </span>
        <span class="prod">
            <br><br>
             <h3>celular</h3>
            <img src="celular.png" alt="" title="celular"
            style="width: 35%;">
            <br><br>
            <p>
            O que você precisa saber sobre este produto
Memória RAM: 4 GB
Tela de 6.6".
Bateria de 5000mAh.
Memória interna de 128GB.
<br><br>
            <a href="comprado.php">Comprar</a>
            <br><br>
        </span>
        <span class="prod">
            <br><br>
             <h3>computador</h3>
             <br><br>
            <img src="computador.png" alt="" title="Estagio supervisionado" style="width: 35%;"
            >
            <br><br>
            <p>
            PC gamer bom para jogos.
            </p>
            <br><br>
            <a href="comprado.php">Comprar</a>
        </span>
    </div>
    <br><br>
</body>
</html>