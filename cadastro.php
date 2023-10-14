<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href=css/Bootstrap.min.css>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="cadastro.css">
	<title>Cadastro Aluno</title>
</head>
<body>

	<div class="container">
		<div class="row">
				<div class="col-sm-12 titulo-cadastroA">
					<a href="principal.php">VOLTAR</a>
					<h1>CADASTRO PARA ALUNOS</h1>				
							</div>

				<div class="col-sm-12 area-cadastroA">				
					<form action="../controls/validar.php" method="POST">
					<div class="form-row">
						<div class="form-group1 col-md-9">
							<label for="exampleInputText">Nome Completo</label>
							<input type="text" name="nome" class="form-control" placeholder="">
						</div>

						<div class="form-group1 s-segundo col-md-2">
							<label for="exampleInputText">Sexo</label>
							<select id="inputState" class="form-control" name="sexo">
							 	<option selected></option>
							 	 <option value="masculino">Masculino</option>
							 	 <option value="feminono">Feminino</option>
							 </select> 
						</div>

						<div class="form-group2 col-md-3">
							<label for="exampleInputText">Data de Nascimento</label>
							<input type="date" name="data" class="form-control" placeholder="">
						</div>

							<div class="form-group2 cpf-segundo col-md-3">
							<label for="exampleInputText">Nº CPF</label>
							<input type="cpf" name="cpf" class="form-control" placeholder="">
						</div>

						<div class="form-group2 col-md-3">
							<label for="exampleInputText">Nº RG</label>
							<input type="rg" name="rg" class="form-control" placeholder="">
						</div>

						<div class="form-group5 col-md-6">
							<label for="exampleInputText">Nome da sua Cidade</label>
							<input type="text" name="cidade" class="form-control" placeholder="">
						</div>

						<div class="form-group5 col-md-3">
							<label for="exampleInputText">Estado</label>
							 <select id="inputState" class="form-control" name="estado">
							 	<option selected></option>
							 	 <option>MG</option>
							 	 <option>RJ</option>
							 	 <option>SP</option>
							 	 <option>AC</option>
							 	 <option>AL</option>
							 	 <option>AL</option>
							 	 <option>AM</option>
							 	 <option>BA</option>
							 	 <option>CE</option>
							 	 <option>DF</option>
							 	 <option>ES</option>
							 	 <option>GO</option>
							 	 <option>MA</option>
							 	 <option>MT</option>
							 	 <option>MS</option>
							 	 <option>PA</option>
							 	 <option>PB</option>
							 	 <option>PR</option>
							 	 <option>PE</option>
							 	 <option>PI</option>
							 	 <option>RN</option>
							 	 <option>RS</option>
							 	 <option>RO</option>
							 	 <option>RR</option>
							 	 <option>SC</option>
							 	 <option>SE</option>
							 	 <option>TO</option>
							 </select>  
						</div>

						<div class="form-group5 col-md-3">
							<label for="exampleInputText">Nº CEP</label>
							<input type="text" name="cep" class="form-control" placeholder="">
						</div>

						<div class="form-group4 col-md-9">
							<label for="exampleInputText">Endereço</label>
							<input type="text" name="endereco" class="form-control" placeholder="">
						</div>

						<div class="form-group4 col-md-2">
							<label for="exampleInputText">Nº da Residência</label>
							<input type="number" name="ncasa" class="form-control" placeholder="">
						</div>

							<div class="form-group4 col-md-9">
							<label for="exampleInputText">Completemnto</label>
							<input type="text" name="complemento" class="form-control" placeholder="">
						</div>

							<div class="form-group3 col-md-6">
								<label for="exampleInputText">E-mail</label>
							<input type="email" name="email" class="form-control" placeholder="">
						</div>

						<div class="form-group3 col-md-6">
							<label for="exampleInputText">Senha</label>
							<input type="password" name="senha" class="form-control" placeholder="Digite sua Senha:">
						</div>


					</div><br>
					<div class="form-group6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Sign in</button>
				</form></div>
		</div>
	</div>
		
			


<script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>