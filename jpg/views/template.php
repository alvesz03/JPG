<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JPG - Criação de Software e Websites</title>
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/estilo.css">

  <link rel="icon" href="assets/img/favicon.gif" />
</head>
<body>
<!--NavBar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="mx-auto text-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active lead texto" aria-current="page" href="<?php echo BASE_URL?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lead texto" href="<?php echo BASE_URL?>sobre">Sobre Nós</a>
        </li>
        <a href="https://linktr.ee/coe.peu">
          <img class="texto" src="assets\img\logo.png" width="80px">
        </a>
        <li class="nav-item dropdown">
          <li class="nav-item">
          <a class="nav-link lead texto" href="<?php echo BASE_URL?>portifolio">Portifolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lead texto" href="<?php echo BASE_URL?>contato">Contato</a>
        </li>
        </li>
      </ul>
    </div>

  </div>
</nav>
	<div class="main">
		<?php 
			$this->loadView($viewName, $viewData);
		?>
	</div>
<!--NavBar-->

<!--Rodapé-->
  <footer class="text-center text-white" style="background-color: black">
    <div class="container">
      <hr class="my-4" />
      <section>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <a href="https://linktr.ee/coe.peu"><img class="quadrado" src="assets\img\logo.png" width="100px"></a>
            <hr>
            <p>
              Vamos proporcionar rapidez e eficiência na entrega de seus projetos! Profissionais especializados com skills variadas e inovadoras para decolar sua empresa em desenvolvimento de Softwares, aplicações tecnológicas. Dimensionamento de equipes conforme a sua necessidade e comprometimento com qualidade de entrega, prazos e assistência.
            </p>
            <hr>
          </div>
        </div>
      </section>
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2)"><u class="opacidade">JPG Company © 2020 - 2022 Copyright</u>
    </div>
  </footer>
</div>
<!--Rodapé-->

<script type="text/javascript" 
src="<?php echo BASE_URL;?>assets/js/jquery-3.6.0.min.js"></script>

<script type="text/javascript" 
src="<?php echo BASE_URL;?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>