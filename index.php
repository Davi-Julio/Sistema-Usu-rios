<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/medis.css">
</head>
</head>

<body>

    <header class="header">
        <h1>Faça Seu Login</h1>
        <nav>
            <a href="lista-usuarios.php">Usuários Cadastrados</a>
        </nav>
    </header><!--header-->

    <main class="main">

        <figure class="figure-main">
            <img src="./Imgs-Icons/astronauta.avif" alt="">
        </figure><!--figure-main-->

        <form action="" method="post">
            <div class="form" class="row g-3">
                <div class="col">
                    <input id="nome" name="nome" required type="text" class="form-control" placeholder="Name:" aria-label="Name">
                </div>
                <div class="col">
                    <input id="email" name="email" required type="email" class="form-control" placeholder="Email:" aria-label="Email">
                </div>
                <div class="col">
                    <input id="senha" name="senha" required type="password" class="form-control" placeholder="Senha:" aria-label="Senha">
                </div>
                <button id="btn" name="login" type="submit" class="btn btn-success">Success</button>
            </div>
        </form>

    </main><!--main-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>