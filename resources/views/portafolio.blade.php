<!doctype html>
<html lang="es">

<head>
	<title>Cartera de proyectos Ing. Pedro Bazó</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	@include('layouts.partes_cv.head')
</head>

<body>
	<section class="w3l-bootstrap-header">
		<nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
			<div class="container">
				@include('layouts.partes_cv.logo')
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa fa-bars"></span>
				</button>
				@include('layouts.partes_cv.menu')
			</div>
		</nav>
	</section>
	<section class="w3l-about-breadcrum">
		<div class="breadcrum-bg">
			<div class="container py-5">
				<p><a href="/">Inicio</a> &nbsp; / &nbsp; Portafolio</p>
			</div>
		</div>
	</section>

    <img src="{{ asset('assets\images\en_construccion.jpg') }}" alt="Página en construcción">

	@include('layouts.partes_cv.pie')

</body>

</html>
<!-- // grids block 5 -->