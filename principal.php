<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href=css/Bootstrap.min.css>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="principal.css">
	<link rel="stylesheet" type="text/css" href="principal_responsivo.css">
	<title>Instituto Master EAD - Aprenda programação do básico ao avançado sem sair de casa</title>
</head>
<body>

<head>

	<div class="container-fluid">
	 <div class="row">


<!-- Banner inicio -->


		<div class=" col principal">


<!-- PHP Navegação inicio  -->


			<?php 
			include "navegacao.php"
	 		?>


<!-- PHP Navegação fim -->


<!-- Elementos do Banner inicio -->


	<article>

		 <section class="elements_banner">
			<img src="Untitled_design-removebg-preview">
			<h1>A sua carreira começa aqui!</h1>
			<h6>O Instituto Master Trainning de Educação Profissional tem como objetivo capacitar<br>e qualificar profissionais na área de tecnologia e saúde, a fim de torna-los aptos a<br>obter sucesso no concorrido mercado de trabalho contemporâneo.</h6>		
		</section>
		<br> <br> 

		<section class="link">
		   <a href="#gradeDcurso">clique aqui e conhecer nossos cursos</a>	
		</section>

    </article>


<!-- Elementos do Banner fim -->

		
		</div>
	 </div>	
	</div>


<!-- Banner fim -->


</head>
<main>

	<!-- Cards inicio --> 
	<div class="container-fluid">
		<div class="row">
			<div class="col q-cards">

				<div class="card" style="height:18rem; width: 19rem;">
                    <div class="card-body">
                        <img src="house-gear"><br><br>
                        <h5 class="card-title">Estágio Home office</h5>
                        <p>O aluno participara de um estágio não remunerado em uma das empresas parceiras do Instituto Master EAD</p>
                    </div>
                </div>

                <div class="card" style="height:18rem; width: 19rem;">
                    <div class="card-body">
                        <img src="person-video2"><br><br>
                        <h5 class="card-title">No Master você aprende mais</h5>
                        <li>Aulas ao vivo pelo meet</li>
                        <li>Suporte a dúvidas</li>
                        <li>Plataforma Digital (Sala de Aula)</li>
                    </div>
               </div>

               <div class="card" style="height:18rem; width: 19rem;">
                <div class="card-body">
                    <img src="file-medical"><br><br>
                    <h5 class="card-title">Certificado</h5>
                    <p>O aluno será certificado na modalidade de curso livre profissionalizante válido em todo territorio nacional e internacional seguindo as diretrizes do Decreto nº. 5.154/04</p>
                </div>
              </div>

			</div>
		</div>
	</div>

			
<!-- Cards fim -->


<!-- Grade de cursos inicio -->


	<div class="container-fluid">
		<div class="row">
			<div class="col gradeCurso">

				<section class="tituloGC">
					<h1> Grade de Cursos</h1>
					<p>Descubra nossos cursos especializados em saúde e tecnologia, oferecendo conhecimento de ponta e habilidades práticas para   <br>impulsionar sua carreira e atender às demandas do mercado atual</p>
				</section>

				<section class="tab_cur">


					<!-- Cursos de Tecnologia inicio -->	


				<div class="cur_tec">
				<div class="titulo_tec">
					<h1 id="gradeDcurso">Cursos na Àrea da Tecnologia</h1>
					<p>AULAS AO VIVO (SUPORTE A DÚVIDAS DURANTE E PÓS-AULA)</p>
					<div class="efeito"><p>1</p></div>
				</div>

				<div class="list_cursoTec">
					<div class="card-tecno">

                        <div class="img-card-tecno">
                            <img src="programacao" alt="imagen de programação">
                        </div>

                        <div class="conteudo-card-tecno">
                            <h5 id="programacaoZero">Programação</h5>
                            <p>Aprenda programação do básico ao avançado, inciando com Lógica, Java, POO, PHP, HTML, CSS, 
                            JavaScript, BOOTSTRAP, MySQL e muito mais.</p>
                            <p class="font-weight-bold">12 Meses | R$ 120 Mensais 180 horas + Estágio</p>
                            <a href="cadastro.php">Matricule-se</a>
                            <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf"
                            >Matriz</a>
                       </div>

                    </div>

                    <div class="card-tecno">
			            <div class="img-card-tecno">
			                <img src="design" alt="imagem de design">
			            </div>

			            <div class="conteudo-card-tecno">
			                <h5 id="dsGrafico">Designer Gráfico</h5>
			                <p>Desenvolva artes fantásticas usando os programas Adobe Photoshop, CorelDraw, Indesign, 
			                illustrator com embasamento em marketing digital, comunicação visual e muito mais.</p>
			                <p class="font-weight-bold">6 Meses | R$ 240 Mensais 180 horas + Estágio</p>
			                <a href="cadastro.php">Matricule-se</a>
			                <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf
			                ">Matriz</a>
                        </div>
                    </div>

                    <div class="card-tecno">
                        <div class="img-card-tecno">
                            <img src="a_informatica" alt="imagem de informatica">
                       </div>

                       <div class="conteudo-card-tecno">
                            <h5 id="Informatica">Informática</h5>
                            <p>Aprenda informática do básico ao avançado deste o Pacote Office (Excel, Word e PowerPoint), 
                            Windows 10, edição de áudio e vídeo, montagem e manutenção de computadores, instalação softwares e
                            muito mais.</p>
                            <p class="font-weight-bold">6 Meses | R$ 240 Mensais 180 horas + Estágio</p>
                            <a href="cadastro.php">Matricule-se</a>
                            <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf"
                            >Matriz</a>
                       </div>
                    </div>

                    <div class="card-tecno">
                        <div class="img-card-tecno">
                            <img src="o_frontend" alt="imagen de fronte end">
                        </div>
                        <div class="conteudo-card-tecno">
                            <h5 id="FrontEnd">Front-End</h5>
                            <p>Aprenda a desenvolver site (páginas web) resposivo do zero com HTML5, CSS3 ,Javascript, framework 
                            Bootstrap, teste de qualidade e muito mais</p>
                            <p class="font-weight-bold">6 Meses | R$ 240 Mensais 180 horas + Estágio</p>
                            <a href="cadastro.php">Matricule-se</a>
                            <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf"
                            >Matriz</a>
                        </div>
                    </div>
				</div>	


<!-- Cursos de Tecnologia fim -->


<!-- Cursos de Saude inicio -->


                <div class="titulo_sau">
   	                <h1>Cursos na Àrea da Saúde</h1>
   	                <p>ESTÁGIO HOME OFFICE (ACOMPANHAR PACIENTE E ENTREGAR RELATÓRIO)</p>
                    <div class="efeito"><p>1</p></div>
                </div>

                <div class="list_cursoSau">
                	<div class="card-saude">
                        <div class="img-card-saude">
                            <img src="primeiros-socorros" alt="imagen de primeiros socorros">
                        </div>
                        <div class="conteudo-card-saude">
                            <h5 id="psSocorro">Primeiros Socorros</h5>
                            <p>Aprenda teoria e prática de primeiros socorros para aplicar em qualquer tipo de acidente, vejá o conteúdo programatico abaixo.</p>
                            <p class="font-weight-bold">4 Meses | R$ 240 Mensais 140 horas + Estágio</p>
                            <a href="cadastro.php">Matricule-se</a>
                            <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf">Matriz</a>
                        </div>
                    </div>

                <div class="card-saude">
                    <div class="img-card-saude">
                        <img src="urgencia" alt="imagem de urgencia no hospital">
                    </div>
                    <div class="conteudo-card-saude">
                        <h5 id="eMedica">Emergência Médica</h5>
                        <p>Aprenda teoria e prática em urgência e emergência, abordaremos parada cardiorrespiratória, classificação de risco, suporte básico e avançado de vida, atenção a vitimas de traumas, fratura, luxação e muito mais.</p>
                        <p class="font-weight-bold">4 Meses | R$ 240 Mensais 140 horas + Estágio</p>
                        <a href="cadastro.php">Matricule-se</a>
            			<a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf">Matriz</a>
                    </div>
                </div>

               <div class="card-saude">
                    <div class="img-card-saude">
                         <img src="agente-de-saude" alt="imagem de informatica">
                   </div>
                   <div class="conteudo-card-saude">
                       <h5 id="aSaude">Agente de Saúde</h5>
                       <p>Torne-se um agente de saúde, neste curso abordaremos noções de vigilância ambiental e sanitária, primeiros Socorros, saúde do idoso, saúde da mulher, saúde da criança e do adolescente e mais</p>
                       <p class="font-weight-bold">4 Meses | R$ 240 Mensais 140 horas + Estágio</p>
                       <a href="cadastro.php">Matricule-se</a>
                       <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf">Matriz</a>
                   </div>
                </div>

                <div class="card-saude">
                    <div class="img-card-saude">
                        <img src="cuidador-de-idoso" alt="imagen de fronte end">
                    </div>
                    <div class="conteudo-card-saude">
                        <h5 id="cIdoso">Cuidador de Idosos</h5>
                        <p>Neste curso você ira aprender sobre alterações fisiológicas do envelhecimento, prevenção a quedas, cuidados com higiene e alimentação, promoção da melhora da qualidade de vida de idosos e muito mais</p>
                        <p class="font-weight-bold">3 Meses | R$ 240 Mensais 120 horas + Estágio</p>
                        <a href="cadastro.php">Matricule-se</a>
                        <a href="https://institutomastertrainning.com.br/matrizes/designergrafico-master-ead-2025.pdf">Matriz</a>
                    </div>
                </div>


<!-- Cursos de Saude fim -->


           	</div>
                </div>
				</section>

			</div>
		</div>
	</div>


<!-- Grade de cursos fim -->	


<!-- Informaçao cuso\CEO inicio -->


           <section class="titulo_dados_cC">
           				<h2>SOMOS REFERÊNCIA EM EDUCAÇÃO PROFISSIONAL</h2>
           	</section>

           <div class="container-fluid">
           	<div class="row">
           		<div class="col-sm-12 info_cC">
           			
           			<section class="explicacao_curso">
           				<h4>Fale com a gente</h4>
           				<p>O Instituto Master Trainning de Educação Profissional é uma startup educacional brasileira com alunos na Rússia, Estados Unidos, Portugal, África, Canadá, Brasil entre outros paises. Fundado no ano de 2015 a organizações se destaca no mercado de educação profissional semipresencial no Brasil e no mundo, pela qualidade de seus cursos e com profissionais docentes renomados no mercado. Transformando educação em profissão por meio da oferta de cursos ao vivo voltados para a capacitação e qualificação profissional em diversas áreas do conhecimento no eixo tecnológico e saúde.</p>
           			</section>
           			<section class="contato_curso">
           				<h4>Sobre a gente</h4>
           				<p>Ligação<br>+55 (88) 9.9484-1795<br><br>Ligação<br>+55 (88) 9.9447-5626<br><br>E-mail<br>institutomastertrainning@gmail.com.br<br><br>Endereço<br>R. Paulo Gonçalves de Aquino, 121 - Araçá, Aurora - CE, 63360-000 (NOVO)</p>	
           			</section>
           		</div>

           		<div class="col-sm-12 ceo">
           			<section class="sobre_CEO">
           				<h4>Franciosney Souza</h4>
           				<img src="professor" alt="Ceo Intituto Master" class="rounded-circle">
           				<p>Founder Ceo na Startup Educacional Brasileira Instituto Master Ead</p>
           				<a href="https://institutomastertrainning.com.br/cv.php?prof=FranciosneySouza">Sobre</a>
           			</section>
           		</div>

           		

           	</div>
           </div>


<!-- Informaçao cuso\CEO fim -->

<!-- Depimento inicio -->

<div class="container-fluid">
     <div class="row">
      <div class="col depoimentos">
          <h1>QUEM FEZ DÁ A DICA</h1>
          <h4>Veja o que nossos alunos estão dizendo sobre nós</h4>

          <div class="container">
              <div class="row">
                <section class="titulo_depo">
                    <h1>Depoimentos :</h1>
                </section>
                                  <div class="col-sm-12 area-depoimentos">
                        <div class="col-sm-3 depoimentos-videos">
                        <iframe src="https://www.youtube.com/embed/nms3DXawMgc" frameborder="0"  width="250" height="160"></iframe>
                           <p>Patricia Castagma - França</p> 
                      </div>

                      <div class="col-sm-3 depoimentos-videos">
                        <iframe src="https://www.youtube.com/embed/pCVJlFCEW4k" frameborder="0"  width="250" height="160"></iframe>
                         <p>Douglas Alves - Brasil</p> 
                      </div>

                      <div class="col-sm-3 depoimentos-videos">
                         <iframe src="https://www.youtube.com/embed/iQDmFwdD-nc" frameborder="0"  width="250" height="160"></iframe>
                          <p>Daniel Texeira - Portugal</p> 
                      </div>

                      <div class="col-sm-3 depoimentos-videos">
                         <iframe src="https://www.youtube.com/embed/UeTxPNZXTuI" frameborder="0"  width="250" height="160"></iframe>
                         <p>Jessica Cunha - Brasil</p> 
                      </div>

                   </div>

                   <h1>Apresentação da Plataforma :</h1>

                  <div class="col-sm-12 apresentacao-plataforma">

                      <div class="col-sm-3 apresentacao-videos">
                          <iframe src="https://www.youtube.com/embed/jzr7VC5pNrQ" frameborder="0"  width="250" height="160"></iframe>
                          <p>RESUMO PLATAFORMA</p>
                      </div>

                      <div class="col-sm-3 apresentacao-videos">
                          <iframe src="https://www.youtube.com/embed/lAMTN5u0oiU" frameborder="0"  width="250" height="160"></iframe>
                          <p>ALTERAR FOTO DE PERFIL</p>
                      </div>

                      <div class="col-sm-3 apresentacao-videos">
                          <iframe src="https://www.youtube.com/embed/JYUV3wYLJBo" frameborder="0"  width="250" height="160"></iframe>
                          <p>POSTAR ATIVIDADES</p>
                      </div>

                      <div class="col-sm-3 apresentacao-videos">
                          <iframe src="https://www.youtube.com/embed/_hHZSa2uixw" frameborder="0"  width="250" height="160"></iframe>
                          <p>ÁREA CURRICULO DO ALUNO</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>
     </div>
    </div>


<!-- Depimento fim -->


</main>
<footer>

	<div class="col-sm-12 os_footer">
		<section class="footer_tec">
			<h4>Tecnologia</h4>
			<a href="#programacaoZero">Programação do Zero</a><br><br><br>
			<a href="#dsGrafico">Designer Gráfico</a><br><br><br>
			<a href="#Informatica">Full-Stack</a><br><br><br>
			<a href="#FrontEnd">Front End</a><br><br><br>
		</section>
		<section class="footer_sau">
			<h4>Saúde</h4>
			<a href="#psSocorro">Primeiros Socorros</a><br><br><br>
			<a href="#eMedica">Urgência e Emergência em Saúde</a><br><br><br>
			<a href="#aSaude">Agente Comunitário de Saúde</a><br><br><br>
			<a href="#cIdoso">Cuidador de Idosos</a><br><br><br>
		</section>
		<section class="footer_sobreMaster">
			<h4>O Master</h4>
			<p>Somos uma startup brasileira<br>referência em educação e-<br>Learning (semipresencial).<br>
            <h6>CNPJ: 27.764.484/0001-00</h6></p>

            <strong>Copyright © 2023 Todos os direitos reservados<br>Instituto Master EAD Desenvolvido por</strong><br>
            <a href="https://www.facebook.com/homesoftsolucoes">Homesoft Soluções</a>
		</section>
	</div>

		
</footer>



<!--================ Script Bootstrap Inicio =================-->
	<script src="js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--================ Script Bootstrap Fim =================--> 

</body>
</html>