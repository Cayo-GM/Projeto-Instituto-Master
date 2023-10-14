<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href=css/Bootstrap.min.css>
	<link rel="stylesheet" type="text/css" href="styler-registro.css">
</head>
<body>

	<header>
		<?php 
	include "nav.php"
	 ?>
	</header>

	<main>
		<div class="container">


			<div class="row justify-content-md-center">
				<div class="col-sm-7 form">
					<br>
     <h2>Formulário de Matrícula</h2>
      <br> <br>
      <form action="../controls/validar.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
      <label for="inputNOME">NOME:</label>
      <input type="text" class="form-control" id="inputNOME">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSNOME">SOBRE NOME:</label>
      <input type="text" class="form-control" id="inputSNOME">
    </div>
    <div class="form-group col-md-2">
      <label for="inputDATA">DATA:</label>
      <input type="text" class="form-control" id="inputDATA">
    </div>
     <div class="form-group col-md-2">
      <label for="inputSEXO">SEXO</label>
      <select id="inputSEXO" class="form-control">
        <option selected>Escolher...</option>
        <option>MASCULINO</option>
        <option>FEMININO</option>
        <option>NAO BINARIO</option>
      </select>
    </div>  

    <div class="form-group col-md-2">
      <label for="inputCPF">CPF:</label>
      <input type="text" class="form-control" id="inputCPF">
    </div>

    <div class="form-group col-md-2">
      <label for="inputRG">RG:</label>
      <input type="text" class="form-control" id="inputRG">
    </div>

    <div class="form-group col-md-2">
      <label for="inputCNH">CNH:</label>
      <input type="text" class="form-control" id="inputCNH">
    </div>
        </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Concordo com os termos 
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SALVAR</button>
</form>


					
				</div>
			</div>
			
		</div>

	</main>

	<footer>
		<?php
   include "footer.php" 
    ?>
	</footer>



<script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>