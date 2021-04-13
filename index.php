
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:ui="http://xmlns.jcp.org/jsf/facelets">
<title>BELMM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="shortcut icon" type="image/ico" href="web/images/logo.png"></link>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="Destino project"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="web/styles/bootstrap4/bootstrap.min.css"/>
<link href="web/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"/>
<link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/animate.css"/>
<link href="web/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="web/styles/main_styles.css"/>
<link rel="stylesheet" type="text/css" href="web/styles/responsive.css"/>
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>
</head>
    <body>
      
        <div id="top">
            <ui:insert name="top">
        
                <div class="super_container">
                
            <!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
                            <div class="logo"><br>
							<a href="index.php">
							<div>BELMM</div>
                            <div>Museum Searcher</div>
                            <div class="logo_image"><br><img src="web/images/logo.png" alt=""/><br></div>
                            </a>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list ">
								<li class="main_nav_item active"><a href="index.php">Home</a></li>
								<li class="main_nav_item"><a href="acerca.html">Acerca de</a></li>
								<li class="main_nav_item"><a href="mision.html">Objetivo</a></li>
								<li class="main_nav_item"><a href="fotos.html">Fotos</a></li>
								<li class="main_nav_item"><a href="contactanos.html">Contáctanos</a></li>
                                <li class="main_nav_item"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>Iniciar Sesión</a></li>
							</ul>
						</nav>

                                                
						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm active">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm"/>
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="web/images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="acerca.html">Acerca de</a></li>
					<li class="menu_item menu_mm"><a href="mision.html">Objetivo</a></li>
					<li class="menu_item menu_mm"><a href="fotos.html">Fotos</a></li>
					<li class="menu_item menu_mm"><a href="contactanos.html">Contáctanos</a></li>
					<li class="menu_item menu_mm"><a href="login.html">Iniciar Sesión</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
                </div>
            </ui:insert>
        </div>

        <div id="content" class="center_content">
            <ui:insert name="content">
            
            <!-- Home -->
<div class="super_container">
	<div class="home">
		<div class="home_background" style="background-image:url(web/images/museo_fondo.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">BELMM</div>
				<!--<div class="home_text_small">Descubre museos cerca de ti</div>-->
			</div>
		</div>
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
                <div class="find_background" style="background-image:url(web/images/bannerN.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
                <div class="find_title text-center"><h2>Encuentra museos cerca de ti</h2></div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
					
						<form id="buscador" name="buscador" action="vista/resultados.php" method="get" class="find_form d-flex flex-md	-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							
							<div class="find_item">
								<div><center><h3>Introduce tu valor de búsqueda</h3></center></div>
								<div>
									<input name="s" type="search" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+{4,}" maxlength="35" class="destination find_input"  placeholder=
"Buscar…"/>
                                </div>
							
								<input type="hidden" name="accion" value="Buscar">
							</div>
							<input type="hidden" name="accion" value="Buscar">
							<button class="button find_button">BUSCAR</button>
						</form>
					</div>
				</div>
			</div>
		</div>
        </div>

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top mejores museos 2018</h2>
						<div>Dale un vistazo a los siguientes museos</div>
					</div>
				</div>
			</div>
			<div class="row top_content">

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://www.mna.inah.gob.mx/">
							<div class="top_item_image"><img src="web/images/museo_antro.jpg"/></div>
							<div class="top_item_content">
								<div class="top_item_text">Museo Nacional de Antropología e Historia</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://palacio.inba.gob.mx/">
							<div class="top_item_image"><img src="web/images/palacio_bellas.jpg" /></div>
							<div class="top_item_content">
                                <div class="top_item_text"> Palacio de Bellas Artes</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://mnh.inah.gob.mx/">
							<div class="top_item_image"><img src="web/images/castillo.jpg" /></div>
							<div class="top_item_content">
								<div class="top_item_text">Castillo de Chapultepec</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="http://www.munal.mx/en">
							<div class="top_item_image"><img src="web/images/muna.jpg" /></div>
							<div class="top_item_content">
								<div class="top_item_text">Museo Nacional de Arte</div>
							</div>
						</a>	
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Last -->

</div>
            </ui:insert>
                
        </div>
        <div id="bottom">
            <ui:insert name="bottom">
                <!-- Footer -->
                <div class="super_container">
                    <footer class="footer">
                        <div class="container">
                            <div class="row">
                                <!-- Footer Column -->
                                <div class="col-lg-12 footer_col">
                                    <div class="footer_about">
                                        <!-- Logo -->
                                        <div class="logo_container">
                                            <div class="logo"><br></br><br></br>
                                                <div>BELLM</div>
                                                <div>Museum Searcher</div>
                                                <div class="logo_image"><br><img src="web/images/logo.png" alt=""/></br></div>
                                            </div>
                                        </div>
                                        
                                        <div class="footer_about_text">BELMM, Cuidadanía, Trabajo y Familia A.C. Todos los derechos reservados 2019. </div>
                                        <div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="iconos icofoo col-md-12 col-lg-12 text-center text-md-right">
                                <!--Facebook-->
                                <a href="https://www.facebook.com/BELMM-Developers-Team-3018753268150322/?modal=admin_todo_tour" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="web/images/footer/Facebook.svg"/></a> 
                                <!--Twitter-->
                                <a href="https://twitter.com/equidadmx" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="web/images/footer/insta.svg"/></a> 
                                <!--Google +-->
                                <a href="https://www.youtube.com/user/Equidad2011" target="_blank" style="margin-right: 5px;margin-left: 5px"><img src="web/images/footer/Youtube.svg"/></a> 
                            </div>
                        </div>
                    </footer>
                </div>
            </ui:insert>
        </div>

    <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>

    </body>
</html>
