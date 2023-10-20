<?php 

$pdo = new PDO('mysql:host=localhost;dbname=users','root','');

if(isset($_POST['login'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("INSERT INTO usuarios2 VALUES (null,?,?,?)");
    $sql->execute(array($nome,$email,$senha));
    
    if($nome === '' || $email === '' || $senha === ''){
        header("Location: index.php");
    }else{
        header("Location: sucess.php");
    }
}

if(isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $pdo->exec("DELETE FROM usuarios2 WHERE id = $id");
}

$sql = $pdo->prepare("SELECT * FROM usuarios2");
$sql->execute();
$infor = $sql->fetchAll();
