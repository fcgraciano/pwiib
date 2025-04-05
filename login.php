<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
    <style>

.btn-color {
    background-color: #0e1c36;
    color: #fff;
}

.profile-image-pic {
    height: 200px;
    width: 200px;
    object-fit: cover;
}
body {
    background-color: #F0F0F0;
}


.cardbody-color {
    /*background-color: #ebf2fa;*/
    background-color: #17458F;
}

a {
    text-decoration: none;
}
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
     <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24" />
      Projeto PW 2 Turma B
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

<div class="container">

<div class="row">
    <div class="col-md-6 offset-md-3">

        <div class="card mt-3 ">

            <form class="card-body cardbody-color rounded-3 p-lg-5" method="post" action="/Login/Entrar/">

                <div class="text-center">
                    <img src="/pwiib/imagens/login.png" class="img-fluid my-4 bg-white p-3 rounded-3" alt="profile">
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" name="Login" id="Login" required aria-describedby="Login" placeholder="Digite seu login">
                </div>
                <div class="mb-3 mt-3">
                    <input type="password" class="form-control" id="Senha" name="Senha" required placeholder="Digite sua senha">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" style="background-color:#F7A81B">Entrar</button></div>
                <input type="hidden" name="ReturnUrl" value="/" />
                <div id="mensagem" class="form-text text-center mb-5 text-dark">
                    
                </div>
            </form>
        </div>

    </div>
</div>
</div>


<script src="bootstrap.bundle.min.js"></script>
</body>
</html>