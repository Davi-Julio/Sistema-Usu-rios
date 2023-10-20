<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 50px 0px;
    }

    .form input {
        width: 40vw;
        height: 6vh;
        margin-bottom: 10px;
    }

    h1 {
        margin: 20px 50px;
    }
</style>

<body>

    <h1>Atulizaçaõ de Usuário</h1>
    <?php include 'config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = $pdo->prepare("SELECT * FROM usuarios2 WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if ($user) {

    ?>
            <form action="" method="post">
                <div class="form" class="form" class="row g-3">
                    <div class="col">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <label>Nome:</label>
                        <input name="nome" required type="text" value="<?php echo $user['nome']; ?>" class="form-control" placeholder="Name:" aria-label="Name">
                    </div>
                    <div class="col">
                        <label>Email:</label>
                        <input name="email" required type="email" value="<?php echo $user['email']; ?>" class="form-control" placeholder="Email:" aria-label="Email">
                    </div>
                    <div class="col">
                        <label>Senha:</label>
                        <input name="senha" required type="password" class="form-control" placeholder="Senha:" aria-label="Senha">
                    </div>
                    <button value="" type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>

    <?php
        } else {
            echo "usuario não encontrado";
        }
    } else {
        echo "Nenhum usuario Selecionado";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>

<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = $pdo->prepare("UPDATE usuarios2 SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":id", $id);

    try {
        $sql->execute();
        echo 'usuario Atualizado!';
        header("Location: lista-usuarios.php");
    } catch (PDOException $e) {
        echo "Erro ao atulizar o usuário";
    }
}

?>