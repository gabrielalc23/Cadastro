<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="font-family: cursive;">
    <!--Main Navigation-->
<header style="font-family: cursive">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
        <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
        >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Home</span>
        </a>
        <a href="notasAlunos.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Notas dos alunos</span>
        </a>
        <a href="consultaTabela.php" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-lock fa-fw me-3"></i><span>Tabela Alunos:</span></a>

        </div>
    </div>
    </nav>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-collapse-init
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
        <img
            src="../img/Veja_limpeza.png"
            height="50"
            alt="MDB Logo"
            loading="lazy"
        />
        </a>
    </div>
</nav>
</header>
<h4 style="margin-top: 90px;display: flex; justify-content: center; align-items: center; font-family: cursive;">Veja</h4>
<main style="margin-top: 20px; display: flex; justify-content: center; align-items: center;">
    
</main>
</body>