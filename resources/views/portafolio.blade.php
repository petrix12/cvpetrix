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
	<div class="container">
		<div class="heading text-center mx-auto py-4">
			<h3 class="head">Cartera de proyectos realizados</h3>
			<p class="my-3 head">
				<em>El éxito es la capacidad de ir de fracaso en fracaso sin perder el entusiasmo</em>.
				<hr />Winston Churchill.
			</p>
		</div>
	</div>
	{{-- Inicio Cuerpo --}}
	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				{{-- Proyecto en construcción --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\en_construccion.png') }}" alt="Página en construcción" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}">
									<strong>
										Proyecto en construcción
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. 
								Dolorem neque consequuntur, fuga illum, pariatur quae maxime 
								et debitis voluptate porro magnam minus sit blanditiis, eos 
								tenetur veritatis possimus laudantium similique.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/access.png') }}" width="50" height="50" alt="Logo Visual C++ 6.0" title="Visual Basic 6.0">
								<img src="{{ asset('assets/images/logos/blogger.png') }}" width="50" height="50" alt="Logo Visual Fortran 6.0" title="Visual Basic 6.0">
								<img src="{{ asset('assets/images/logos/csharp.png') }}" width="50" height="50" alt="Logo Visual Fortran 6.0" title="Visual Basic 6.0">
								<img src="{{ asset('assets/images/logos/delphi.png') }}" width="50" height="50" alt="Logo Visual Fortran 6.0" title="Visual Basic 6.0">
								<small class="text-muted"><strong>2002</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Blogger Soluciones++ --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\soluciones++.png') }}" alt="Post Blogger Soluciones++" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="https://solplusplus.blogspot.com" target="_blank">
									<strong>
										Soluciones++: Creación de una página web con Blogger
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Desarrollo de un blog con tecnología Blogger, titulado Soluciones++, 
								que trata sobre temas relacionados con propuestas de soluciones 
								a problemas principalmente de desarrollo web y de aplicaciones 
								informáticas.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/blogger.png') }}" width="50" height="50" alt="Logo Blogger" title="Blogger">
								<img src="{{ asset('assets/images/logos/html5.png') }}" width="50" height="50" alt="Logo HTML" title="HTML">
								<small class="text-muted"><strong>2020</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Página Facebook Soluciones Office --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\pag_facebook.png') }}" alt="Post Blogger Soluciones++" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="https://www.facebook.com/solplusplus" target="_blank">
									<strong>
										Soluciones Office: Creación de una página web con Facebook
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Desarrollo de una página web con Facebook, titulado Soluciones Office, 
								que trata principalmente sobre temas relacionados con el 
								desarrollo web y el desarrollo aplicaciones aplicaciones 
								informáticas en general.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/facebook.png') }}" width="50" height="50" alt="Logo Facebook" title="Facebook">
								<small class="text-muted"><strong>2020</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Blogger Herramientas y Soluciones Office --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\hysoffice.png') }}" alt="Post Blogger Herramientas y Soluciones Office" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="https://toolssolucionesoffice.blogspot.com" target="_blank">
									<strong>
										Herramientas y Soluciones Office: Creación de una página web con Blogger
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Desarrollo de un blog con tecnología Blogger, titulado Herramientas 
								y Soluciones Office, que trata principalmente temas relacionados con 
								Microsoft Excel y Visual Basic para Aplicaciones.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/blogger.png') }}" width="50" height="50" alt="Logo Blogger" title="Blogger">
								<img src="{{ asset('assets/images/logos/html5.png') }}" width="50" height="50" alt="Logo HTML" title="HTML">
								<small class="text-muted"><strong>2019</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Automatización PDVSA CyS --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\pdvsa_cys.png') }}" alt="Post Automatización de Guardias STM" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}" target="_blank">
									<strong>
										Automatización reportes PDVSA Comercio y Suministro
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Automatización de reportes de la Gerencia de Administración y Finanzas de 
								PDVSA Comercio y Suministo con Microsoft Excel y Visual Basic para Aplicaciones.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/excel.png') }}" width="50" height="50" alt="Logo Microsoft Excel" title="Microsoft Excel">
								<img src="{{ asset('assets/images/logos/vba.png') }}" width="50" height="50" alt="Logo VBA" title="VBA">
								<small class="text-muted"><strong>2017</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Automatización Guardias STM --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\guardia_stm.png') }}" alt="Post Automatización de Guardias STM" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}" target="_blank">
									<strong>
										Automatización reportes PDVSA Planificación Distrito San Tomé
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Automatización de reportes de guardias de la Superintendencia de
								Planificación, Presupuesto y Gestión del Distrito San Tomé con
								Microsoft Excel y Visual Basic para Aplicaciones.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/excel.png') }}" width="50" height="50" alt="Logo Microsoft Excel" title="Microsoft Excel">
								<img src="{{ asset('assets/images/logos/vba.png') }}" width="50" height="50" alt="Logo VBA" title="VBA">
								<small class="text-muted"><strong>2015</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Automatización Memorias Descriptivas --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\memorias.png') }}" alt="Post Automatización de Memorias Descriptivas GIPS" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}" target="_blank">
									<strong>
										Automatización memorias descriptivas de líneas de flujo
										y de transferencia
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								Automatización de memorias descriptivas de líneas de flujo
								y de transferencia del campo Dacion de PDVSA Distrito San Tomé
								con Microsoft Excel y Visual Basic para Aplicaciones.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/excel.png') }}" width="50" height="50" alt="Logo Microsoft Excel" title="Microsoft Excel">
								<img src="{{ asset('assets/images/logos/vba.png') }}" width="50" height="50" alt="Logo VBA" title="VBA">
								<small class="text-muted"><strong>2007</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Tesis de Grado Ing. Química UCV --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\tesis.png') }}" alt="Poster tesis" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}">
									<strong>
										Aplicación para el ajuste de datos experimentales con modelos no lineales
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								En este trabajo se desarrolló una aplicación en Microsoft Visual C++ 6.0 
								junto con Digital Visual Fortran 6.0 el cual permite optimizar parámetros 
								de modelos matemáticos lineales y no lineales de diversas complejidades.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/vc++6.jpg') }}" width="50" height="50" alt="Logo Visual C++ 6.0" title="Visual C++ 6.0">
								<img src="{{ asset('assets/images/logos/vf6.png') }}" width="50" height="50" alt="Logo Visual Fortran 6.0" title="Visual Fortran 6.0">
								<small class="text-muted"><strong>2002</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Resolución de problemas de lógica de programación --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\logica.png') }}" alt="Poster lógica de programación" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}">
									<strong>
										Resolución de problemas de programación en Pascal, C, C++ y Visual Basic 6.0
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								En este apartado se presentan repositorios en GitHub con
								problemas de programación orientado a estudiantes de ingenieria, 
								con la finalidad de ejercitar la lógica de programación.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/pascal.png') }}" width="50" height="50" alt="Logo Turbo Pascal" title="Turbo Pascal">
								<img src="{{ asset('assets/images/logos/c.png') }}" width="50" height="50" alt="Logo C" title="C">
								<img src="{{ asset('assets/images/logos/cpp.png') }}" width="50" height="50" alt="Logo C++" title="C++">
								<img src="{{ asset('assets/images/logos/vb.png') }}" width="50" height="50" alt="Logo Visual Basic 6.0" title="Visual Basic 6.0">
								<small class="text-muted"><strong>1995</strong></small>
							</div>
						</div>
					</div>
				</div>
				{{-- Resolución de problemas en (UserRPL) HP48G --}}
				<div class="col">
					<div class="card shadow-sm">
						<img src="{{ asset('assets\images\portafolio\user_rpl.png') }}" alt="Calculadora HP48G" class="bd-placeholder-img card-img-top" width="100%" height="225">
						<div class="card-body">
							<div class="titulo-portafolio">
								<a href="{{ route('en_construccion') }}">
									<strong>
										Resolución de problemas en el lenguaje UserRPL
									</strong>
								</a>
							</div>
							<p class="card-text texto-portafolio">
								En este apartado se presentan repositorios en GitHub con
								problemas resueltos en el lenguaje UserRPL, que es el 
								empleado en las calculadoras gráficas HP48G.
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<img src="{{ asset('assets/images/logos/hp.png') }}" width="50" height="50" alt="Logo HP" title="HP">
								<small class="text-muted"><strong>1993</strong></small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Fin Cuerpo --}}

	@include('layouts.partes_cv.pie')

</body>

</html>
<!-- // grids block 5 -->