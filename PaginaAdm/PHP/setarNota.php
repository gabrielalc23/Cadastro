<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container">
        <table class="table table-bordered mt-5 table-dark">
        <tr>
            <th class="col text-center">NOME</th>
            <th class="col text-center">NASCIMENTO</th>
            <th class="col text-center">EMAIL</th>
            <th class="col text-center">PRIMEIRO BIMESTRE</th>
            <th class="col text-center">SEGUNDO BIMESTRE</th>
            <th class="col text-center">TERCEIRO BIMESTRE</th>
            <th class="col text-center">QUARTO BIMESTRE</th>
            <th class="col text-center">CONFIRMAR</th>
        </tr>
<?php
include('../../Connection/connection.php');

$sql = "SELECT * FROM usuario WHERE id = ".$_POST["idAluno"];

$stmt = $conn->prepare($sql);
$stmt->execute();


$result = $stmt->fetchAll();

foreach ($result as $row) {
    echo '<tr>'.
    '<td><input class="col form-control" value="' . $row['nome']. '"></td>'.
    '<td><input class="col form-control" value="'.  $row['nascimento']. '"></td>'.
    '<td><input class="col form-control" value="'.  $row['email']. '"></td>'.
    '<td><input class="col form-control" type="number" placeholder="Primeira nota..." id="primeira_nota" name="primeira_nota" required></td>'.
    '<td><input class="col form-control" type="number" placeholder="Segunda nota..."  id="segunda_nota"  name="segunda_nota" ></td>'.
    '<td><input class="col form-control" type="number" placeholder="Terceira nota..." id="terceira_nota" name="terceira_nota"></td>'.
    '<td><input class="col form-control" type="number" placeholder="Quarta nota..."   id="quarta_nota"   name="quarta_nota"  ></td>'. 
    '<td><input type="submit" class="btn btn-outline-info" alue="Enviar" /></td>'.
'</tr>';
}
?>

</body>
</html>
