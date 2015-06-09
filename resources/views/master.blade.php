<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="{{ asset('fonts/font.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/fuentes.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

	<title>@yield('titulo')</title>


</head>

<body>
		

	
		<header>
		
			<div id="navegador">
				<nav>
					<ul>
						<li><a href="/Yoloarreglo/public"><span class="home"><i class="icon icon-home"></i></span>Inicio</a>
						</li>
						<li><a href="/Yoloarreglo/public/Tutoriales"><span class="primero"><i class="icon icon-tools"></i></span>Tu lo Arreglas</a>
						</li>
						<li><a href="/Yoloarreglo/public/Tienda"><span class="segundo"><i class="icon icon-shopping-bag"></i></span>Tienda</a></li>
						<li><a href="/Yoloarreglo/public/Experto"><span class="tercero"><i class="icon icon-mobile"></i></span>Yolo Arreglo</a></li>
						<li><a href="/Yoloarreglo/public/Acerca de"><span class="cuarto"><i class="icon icon-globe"></i></span>Acerca de</a></li>
						<li><a href="/Yoloarreglo/public/Contactanos"><span class="quinto"><i class="icon icon-phone"></i></span>Contactanos</a></li>
						<li><a href="#"><span class="sexto"><i class="icon icon-user"></i></span>Tu Cuenta</a>
							<ul>
								<li><a href="/Yoloarreglo/public/Login">Inicia</a></li>
								<li><a href="/Yoloarreglo/public/Join">Registrate</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>


	









	
	<div id="cuerpo">
		@yield('body')
	</div>

	<footer>
		
		<!-- <div id="footerimg">
			<a href="Yoloarreglo/public/">
				<img src="{{ asset('img/logoyla.jpg') }}">
			</a>
		</div> -->
		<div id="footertxt">
			<div id="footer-color1">
			<a href="/Yoloarreglo/public" class="icon-home"></a>
			<a href="https://www.facebook.com/pages/YoLoArreglo/337957489738891"  target ="_blank" class="icon-facebook"></a>
			<a href="https://instagram.com/yoloarreglo"  target ="_blank"class="icon-instagram"></a>
			<a href="https://twitter.com/YOLOarreglocln"  target ="_blank"class="icon-twitter"></a>
			<a href="https://plus.google.com/111246115768766867411"  target ="_blank"class="icon-google"></a>
			</div>
			<div id="footer-color2">
			</div>
		</div>

	</footer>



	<div id="barrasocial">		
				<ul>
					<li><a href="https://www.facebook.com/pages/YoLoArreglo/337957489738891"  target ="_blank" class="icon-facebook"></a></li>
					<li><a href="https://instagram.com/yoloarreglo"  target ="_blank"class="icon-instagram"></a></li>
					<li><a href="https://twitter.com/YOLOarreglocln"  target ="_blank"class="icon-twitter"></a></li>
					<li><a href="https://plus.google.com/111246115768766867411"  target ="_blank"class="icon-google"></a></li>
					<li><a href="mailto:yoloarreglocln@gmail.com"  target ="_blank"class="icon-mail"></a></li>
				</ul
	</div>




	<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
	
</html>