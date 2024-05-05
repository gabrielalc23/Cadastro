<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <?php

    include('../Connection/connection.php');
    $sql = "SELECT * FROM usuario WHERE nome <> 'administrador'";
    $stm = $conn->prepare($sql);
    ?>
    <div class="container">
        <fieldset class="form-group">
            <legend class="pt-5 text-center text-white">
                <h1>Sistema de presença</h1>
            </legend>
            <table class="table table-hover table-dark">
                <tr>
                    <th>
                        <h4>NOME</h4>
                    </th>
                    <th>
                        <h4>TURMA</h4>
                    </th>
                    <th>
                        <h4 class="text-center">PRESENÇA</h4>
                    </th>
                </tr>

                <?php
                $stm->execute();
                $alunos = $stm->fetchall(PDO::FETCH_ASSOC);
                foreach ($alunos as $aluno) { ?>
                  
                        <tr>
                            <td>
                                <h5> <?= $aluno['nome'] ?></h5>
                            </td>
                            <td> </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <input type="checkbox" class="form-check-input p-2" />
                                    <div class="p-2 "></div>
                                    <label class="form-check-label text-end" name="check_falta">
                                        <h5>Faltou</h5>
                                    </label>
                            </td>
                    </div>
                    </tr>
    </div>
<?php } ?>
?>
</body>

</html>