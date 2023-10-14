<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="navegacao.css">
	<title>Navegação</title>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0, 0.2); ">
  <a class="navbar-brand" href="#">
  	 <!-- <img src="logo-vip" width="300" height="50" class="d-inline-block align-top" alt=""> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(Página atual)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="area-depoimentos">Sobre-Nos <span class="sr-only">(Página atual)</span></a>
      </li>

           <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Aluno
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">LOGIN ALUNO</a>
          <a class="dropdown-item" href="cadastro.php">ABRIR MATRICULA</a>
          <a class="dropdown-item" href="#">VALIDAR CERTIFICADO</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

           <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Professor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">LOGIN PROFESSOR</a>
          <a class="dropdown-item" href="cadastroProfessor.php">TRABALHE CONOSCO</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Contato <span class="sr-only">(Página atual)</span></a>
      </li>   
      </li>
    </ul>
  </div>
</nav>

			</div>
		</div>
	</div>




	

<!--================ Script Bootstrap Inicio =================-->
	<script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<!--================ Script Bootstrap Fim =================-->    
</body>
</html>