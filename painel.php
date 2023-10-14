<?php

session_start(); 

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="painel.css">
    <title>Inicio</title>
</head>
<body>

<header>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner-pricipal">
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-2 area-menu">
                <div class="menu-lateral">
                 <li class="item-menu ">
                     <a href="#">       
                         <span class="texto-icon">Seja Bem-Vindo(a)<br><?php  echo $_SESSION['nome'];?></span>
                     </a>
                 </li>
                </div>

                <div class="menu-lateral">
                 <li class="item-menu ">
                     <a href="#">
                         <span class="icon">
                             <i class="bi bi-house-up"></i>
                         </span>
                         <span class="texto-icon">Inicio</span>
                     </a>
                 </li>
                </div>

                <div class="menu-lateral ">
                    <li class="item-menu ">
                        <a href="#">
                            <span class="icon">
                                <i class="bi bi-journals"></i>
                            </span>
                            <span class="texto-icon">Acadêmico</span>
                        </a>
                    </li>
                </div>


                <div class="menu-lateral ">
                    <li class="item-menu ">
                        <a href="#">
                            <span class="icon">
                                <i class="bi bi-currency-dollar"></i>
                            </span>
                            <span class="texto-icon">Finaceiro</span>
                        </a>
                    </li>
                </div>

                <div class="menu-lateral ">
                     <li class="item-menu ">
                         <a href="#">
                        <span class="icon">
                        <i class="bi bi-wallet"></i>                          
                        </span>
                        <span class="texto-icon">Curriculo</span>
                    </a>
                     </li>
                </div>
                <div class="menu-lateral ">
                    <li class="item-menu ">
                        <a href="#">
                            <span class="icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </span>
                            <span class="texto-icon">Master Academy</span>
                        </a>
                    </li>
                </div> 

                <div class="menu-lateral ">
                    <li class="item-menu ">
                        <a href="#">
                            <span class="icon"><i class="bi bi-person-circle"></i></span>
                            <span class="texto-icon">Minha Conta</span>
                        </a>
                    </li>
                </div>

               <div class="menu-lateral ">
                    <li class="item-menu ">
                        <a href="../Controls/sair.php">
                            <span class="icon">
                                <i class="bi bi-box-arrow-left"></i>
                            </span>
                            <span class="texto-icon">Sair</span>
                        </a>
                    </li>
                </div>
            </nav>

            <div class="col-sm-10 conteudo-principal">
               <span class="titlle-conteudo-principal">
                     <h1>Meus Cursos</h1>  
                </span>
            </div>

                      
              
        </div>
    </div>
            
        
               
        

        

</main>
<footer></footer>
 

 <!--================ Script Bootstrap Inicio =================-->
    <script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>   
</body>
</html>