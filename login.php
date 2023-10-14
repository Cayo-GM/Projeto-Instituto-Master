<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href=css/Bootstrap.min.css>
	<link rel="stylesheet" type="text/css" href="styler-login.css">
</head>
<body>

	<header>

	</header>

		<div class="container">
      <div class="row">
        <div class="col-sm-12 titulo-login">
          <h1>LOGIN DE ENTRADA</h1>
          <a href="principal.php">VOLTAR</a>
        </div>

        <div class="col-sm-12 area-login">
                    <form action="../controls/validarLogin_A.php" method="POST">
      <div class="form-row">
    <div class="form-group1 col-md-6">
        <label for="exampleInputText">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="">
    </div>

    <div class="form-group2 col-md-6">
      <label for="exampleInputText">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha:">
    </div>

        </div>
            <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       Concordo com os termos
      </label>
    </div><br><br>

      <button type="submit" class="btn btn-primary">ENTRA</button> <br> <br>
                <?php 

$mostrar = isset($_GET["mensagem"])?$_GET["mensagem"]:"";

echo '<div class="alert alert-success" role="alert">'.$mostrar.'</div>';

     ?>
          </form>
        </div>
      </div>
    </div>



<script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>