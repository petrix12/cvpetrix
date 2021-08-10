<!doctype html>
<html lang="es">

<head>
	<title>Servicios Profesionales Ing. Pedro Bazó</title>
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
				<p><a href="/">Inicio</a> &nbsp; / <strong>&nbsp; Servicios</p></strong>
			</div>
		</div>
	</section>

	<section class="w3l-features-4">
		<!-- /features -->
		<div class="features py-5" id="services">
			<div class="container py-md-3">
				<div class="heading text-center mx-auto">
					<h3 class="head">Servicios profesionales</h3>
					<p class="my-3 head">
						<em>Hagas lo que hagas, hazlo tan bien para que vuelvan y además traigan a sus amigos</em>.
						<hr />Walt Disney.
					</p>
				</div>
				<div class="fea-gd-vv row mt-5 pt-3">
					<div class="float-lt feature-gd col-lg-4 col-md-6">
						<div class="icon"> <span class="fa fa-code" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Desarrollo Front-end</h5>
							<p>
								Principalmente mediante el uso de las siguientes tecnologías: HTML5, CSS3 y Javascript.
							</p>
						</div>
					</div>
					<div class="float-mid feature-gd col-lg-4 col-md-6 mt-md-0 mt-5">
						<div class="icon"> <span class="fa fa-cogs" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Desarrollo Back-end</h5>
							<p>
								Principalmente mediante el uso de las siguientes tecnologías: php y MySQL.
							</p>
						</div>
					</div>
					<div class="float-rt feature-gd col-lg-4 col-md-6 mt-lg-0 mt-5">
						<div class="icon"> <span class="fa fa-check-square-o" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Automatización de documentos</h5>
							<p>
								Principalmente se automatizan documentos Word, PowerPoint y Excel,
								mediante el uso de VB para Aplicaciones.
							</p>
						</div>
					</div>
					<div class="float-lt feature-gd col-lg-4 col-md-6 mt-5">
						<div class="icon"> <span class="fa fa-terminal" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Desarrollo de aplicaciones de escritorio</a>
							</h5>
							<p>
								Principalmente mediante el uso de los siguientes lenguajes de programación:
								Delphi, C++ Builder, Visual Basic, Microsoft C#.
							</p>
						</div>

					</div>
					<div class="float-mid feature-gd col-lg-4 col-md-6 mt-5">
						<div class="icon"> <span class="fa fa-bar-chart" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Marketing Digital</h5>
							<p>
								Aplicación de estrategias de Marketing Digital en el código HTML.
							</p>
						</div>
					</div>
					<div class="float-rt feature-gd col-lg-4 col-md-6 mt-5">
						<div class="icon"> <span class="fa fa-wpforms" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5>Diseño de Hojas de Cálculo</h5>
							<p>
								Diseño de Hojas de Cálculo de Microsoft Excel, aplicando funcionalidad
								mediante el uso de VBA.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //features -->
	</section>
	<section class="w3l-pricing-7" id="pricing">
		<div class="w3l-pricing-7_sur py-5">
			<div class="container py-md-3">
				<div class="heading text-center mx-auto">
					<h3 class="head">Steve Jobs, Fundador de Apple</h3>
					<p class="my-3 head"> 
						Mantente cerca de tus clientes. Tan cerca que seas tú el que les diga lo 
						que necesitan mucho antes de que ellos se den cuenta de que lo necesitan.
					</p>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partes_cv.pie')

</body>

</html>
<!-- // grids block 5 -->