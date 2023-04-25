<?php 
 include("/database/conexao.php");

     
       

        $nome = $_POST['name'];
        $email = $_POST['c-email'];
        $data_nasc = $_POST['data_nascimento'];
        $senha = $_POST['c-password'];

        print_r($nome);
        print_r($email);
        print_r($data_nasc);
        print_r($senha);



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <a href="/pages/index.php">SafeStock</a>

        <div class="slogan">
          <span class="troca-palavra"></span>
        </div>
    </header>
    <main>
        <div class="box-entrar">
            <h2>Já possui conta?</h2>

            <form action="index.php" method="POST">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="ex: seunome@gmail.com" required>

                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Sua melhor senha" required>

                <button type="submit" name="submit" id="submit">Entrar</button>
            </form>
        </div>



        <div class="box-criar">
            <h2>Não possui conta?</h2>

            <form action="/backend/cadastro.php" method="POST">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email</label>
                <input type="email" name="c-email" id="c-email" required>

                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>

                <label for="password">Senha</label>
                <input type="password" name="c-password" id="c-password" required>

                <button type="submit" name="submit2" id="submit2">Criar conta</button>


            </form>


        </div>
    </main>
</body>

</html>