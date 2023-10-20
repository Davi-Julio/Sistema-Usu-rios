<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    @media screen and (max-width:560px) {
        #table{
            width: 50vw; height: 60vh;
            font-size: 10px;
        }

        .btns{
            display: flex;
            flex-direction: row;
        }
    }
    .excluir {
        padding: 5px 10px;
        background-color: red;
        color: #fff;
        border: none;
        text-decoration: none;
        border-radius: 4px;
    }

    .editar {
        padding: 5px 10px;
        background-color: green;
        color: #fff;
        border: none;
        text-decoration: none;
        border-radius: 4px;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lista de Usuários</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: green;" class="nav-link" href="index.php">Voltar a Página Principal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table id="table" class='table table-hover table-striped table-bordered'>

        <tr>
            <td>#</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>

        <?php
        foreach ($infor as $keu => $value) {
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['nome'] ?></td>
                <td><?= $value['email'] ?></td>
                <td class="btns">
                    <a class="excluir" href="?delete=<?= $value['id'] ?>">Excluir</a>
                    <a class="editar" href="editar-usuario.php?id=<?= $value['id'] ?>">Editar</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>