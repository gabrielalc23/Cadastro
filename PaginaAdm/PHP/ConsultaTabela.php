<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de alunos</title>
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark container">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">NASCIMENTO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EDITAR</th>
                <th scope="col">DELETAR</th>
            </tr>
        </thead>
        <tbody>    
<?php
require_once('LayoutPadrao.php');
include('../../Connection/connection.php');

class User {
    private $id;
    private $nome;
    private $nascimento;
    private $email;
    private $telefone;
    private $senha;

    public function __construct($id, $nome, $nascimento, $email, $telefone, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }

    public function getFormEditar() {
        $html = '<form action="Editar.php" method="post">';
        $html.= '<input type="hidden" name="id" value="'. $this->id. '">';
        $html.= '<input type="hidden" name="nome" value="'. $this->nome. '">';
        $html.= '<input type="hidden" name="nascimento" value="'. $this->nascimento. '">';
        $html.= '<input type="hidden" name="email" value="'. $this->email. '">';
        $html.= '<input type="hidden" name="telefone" value="'. $this->telefone. '">';
        $html.= '<button type="submit" class="bg-warning rounded" name="editar" style="border: none; background-color: transparent;">';
        $html.= '<img style="cursor: pointer; border: none;" id="img-lapis" class="img-thumbnail bg-warning" src="../img/pencil.png" width="40">';
        $html.= '</button>';
        $html.= '</form>';
        return $html;
    }

    public function getFormExcluir() {
        $html = '<form action="Excluir.php" method="post">';
        $html.= '<button class="bg-danger rounded" name="excluir" style="border: none; background-color: transparent;">';
        $html.= '<img style="cursor: pointer; border: none;" id="img-lapis" class="bg-danger img-thumbnail" src="../img/trash.png" width="40">';
        $html.= '</button>';
        $html.= '<input type="hidden" name="id" value="'. $this->id. '">';
        $html.= '</form>';
        return $html;
    }
}



$sql = "SELECT id, nome, nascimento, email, telefone, senha FROM usuario WHERE usuario.nome <> 'administrador'";

$stmt = $conn->prepare($sql);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($users as $user):
    $userObject = new User($user["id"], $user["nome"], $user["nascimento"], $user["email"], $user["telefone"], $user["senha"]);
    echo '
            <tr>
                <td>'. $user["id"]. '</td>
                <td>'. $user["nome"]. '</td>
                <td>'. $user["nascimento"]. '</td>
                <td>'. $user["email"]. '</td>
                <td>'. $user["telefone"]. '</td>
                <td>'. $userObject->getFormEditar(). '</td>
                <td>'. $userObject->getFormExcluir(). '</td>
            </tr>';
endforeach;
echo '
        </tbody>
    </table>
</div>';

$conn = null;

?>
</body>
</html>