<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>
<?php include("include/nav.php"); ?>

    <!--/ Modal -->
<link href="css/component.css"  rel="stylesheet">






    <!--/ Banners Home -->
    <div class="swiper-container">
        <!--/ <div class="parallax-bg" style="background-image: url(img/bg_banner1.jpg)" data-swiper-parallax="-23%"></div>-->
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(images/b1.jpg)">
                <div class="title" data-swiper-parallax="-100">Medicamentos com Excelência e Rapidez</div>
              </div>
                <div class="swiper-slide" style="background-image:url(images/b2.jpg)">
                <div class="title" data-swiper-parallax="-100">Faça sua Fórmula com Especialistas</div>
             </div>

               <div class="swiper-slide" style="background-image:url(images/b3.jpg)">
                <div class="title" data-swiper-parallax="-100">Manipulamos com vários tipos de Cápsulas</div>


            </div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>




	<section>
		<div class="container">
		<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
			<h1 class="estilo_texto_granco_cinza">Como fazer seu Pedido?</h1>
			</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
				  <div id="fundobox">
					<div id="icone_fundobox"><i class="fa fa-home fa-4x"></i></div>
					  <h2 class="branco">Retiramos sua Receita</h2>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			  <div id="fundobox">
					<div id="icone_fundobox"><i class="fa fa-envelope fa-4x"></i></div>
					  <h2 class="branco">Por e-mail ou pelo Site</h2>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			  <div id="fundobox">
					<div id="icone_fundobox"><i class="fa fa-phone fa-4x"></i></div>
					  <h2 class="branco">Por telefone ou WhatsApp</h2>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			  <div id="fundobox">
					<div id="icone_fundobox"><i class="fa fa-truck fa-4x"></i></div>
					  <h2 class="branco">Entregamos onde estiver</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="espaco"></div>

<div class="md-modal md-effect-8 md-show" id="modal-8">
	<button class="linksaibamais2" onclick="$('#modal-8').removeClass('md-show');">Fechar</button>

  <div id="newsletter" class="md-content">
    <img src="images/msg-pop.jpg" class="center-block img-responsive">

  </div>
</div>

<div class="md-overlay"></div>
<!--	<button class="md-trigger" data-modal="modal-8" onclick="$('#modal-8').addClass('md-show');" >Teste Modal</button>-->



  <!--Quem Somos -->
  <div class="container">
	<div class="row">
		<div class="col-sm-7 col-md-7 col-lg-7 col-xs-12">
			<div id="box_quemsomos">
			<h2 class="estilo_texto_granco_cinza"><i class="fa fa-bars"></i> Quem Somos</h2>
    <p class="estilo_texto_geral">A diretoria da Amy é formada por profissionais que reúnem experiência de mais de 25 anos no mercado, adquirida em uma das mais conceituadas farmácias de manipulação de São Paulo. Durante todos esses anos, consolidamos um método de trabalho que se baseia em princípios indispensáveis, como ética, confiabilidade e comprometimento. Desenvolvemos também a capacidade de entender exatamente como o cliente quer ser tratado. </p>
    <div id="botao_saibamais2"><a href="quemsomos_amymanipulacao.html" class="linksaibamais2">Saiba Mais</a></div>
  </div>
		</div>


		<div class="col-sm-5 col-md-5 col-lg-5 col-xs-12">
			 <div id="mapa_home"><h2 class="estilo_texto_granco_cinza"><i class="fa fa-map-marker"></i> Onde Estamos</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.670227031823!2d-46.651656249999974!3d-23.580284550000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ecd7cbd345%3A0xaa2374bb7359299d!2sRua+Tumiaru%2C+88+-+Vila+Mariana!5e0!3m2!1spt-BR!2sbr!4v1392314796661" width="100%" height="200" frameborder="0" style="border:0"></iframe>
    <br>
    <a href="index.html" class="linkrosa">Veja como Chegar!</a> </div>
		</div>

	  </div>
	</div>
		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>-->

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>



               <!-- JS do Banner -->
    <script src="js/swiper.min.js"></script>
    <!-- Definições do Banner -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            parallax: true,
            speed: 600,
            autoplay: 3500,
        });
    </script>
     <?php include("include/footer.php"); ?>
