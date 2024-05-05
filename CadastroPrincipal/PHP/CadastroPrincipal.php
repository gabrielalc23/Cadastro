<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../../Connection/connection.php');

    $name     = $_POST['name'];
    $birth    = $_POST['birth'];
    $email    = $_POST['email'];
    $tel      = $_POST['tel'];
    $password = $_POST['password'];

    $sql = "SELECT email FROM usuario WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) { ?>
        <div class="container align-middle">
            <div class="card container bg-danger">
                <div class="card-body">
                    <div class="alert alert-danger">
                        <h5 class="">Erro ao inserir dados:<br>
                            <ul>
                                <li>Email já existente.
                                </li>
                            </ul>
                        </h5>
                    </div>
                </div>
            <?php } else {
            $sql = "INSERT INTO usuario (nome, nascimento, email, telefone, senha)
    VALUES (:nome, :nascimento, :email, :telefone, :senha)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":nome",       $name);
            $stmt->bindParam(":nascimento", $birth);
            $stmt->bindParam(":email",      $email);
            $stmt->bindParam(":telefone",   $tel);
            $stmt->bindParam(":senha",      $password);

            $stmt->execute();
        }

        if ($stmt->rowCount() > 0) { ?>
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-body container">
                            <div class="alert alert-primary mt-4 container">
                                <h5>Dados inseridos com sucesso!</h5>
                                <? include('../Upload_IMG/upload_img.html'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else {
            echo "Erro ao inserir dados: " . $stmt->errorInfo() ?>
            </div>
        </div>
        </div>
<?php  }
    } else {
        die();
    }
?>