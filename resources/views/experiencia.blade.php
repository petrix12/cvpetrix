<!doctype html>
<html lang="es">

<head>
	<title>Experiencia Profesional Ing. Pedro Bazó</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	@include('layouts.partes_cv.head')
	<style>
		.alto {
			height: 40px;
		}

		.alto2 {
			height: 75px;
		}

		.size1 {
			/*height: 80px;
			width: 50px;
			padding: 20px;*/
		}

		.borde {
			border: gray 1px solid;
		}

		h4 {
			font-weight: bold;
		}

		.fecha_trabajo {
			/*color:darkblue;*/
			color: darkslategray;
		}
	</style>
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
				<p><a href="/">Inicio</a> &nbsp; / &nbsp; Experiencia</p>
			</div>
		</div>
	</section>

	<section class="w3l-subscribe" id="subscribe">
		<div class="main-host py-5 text-center">
			<div class="container py-lg-3">
				<div class="grids-forms">
					<div class="main-midd">
						<h3 class="global-title mx-auto">
							Experiencia Profesional
						</h3>
						<img src="{{ asset('assets/images/logos/sefar.png') }}" alt="" width="50" height="50" class="borde" alt="Sefar Universal">
						<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="" width="50" height="50" class="borde" alt="PDVSA">
						<img src="{{ asset('assets/images/logos/ugma.png') }}" alt="" width="50" height="50" class="borde" alt="Universidad Gran Mariscal de Ayacucho (UGMA)">
						<img src="{{ asset('assets/images/logos/digit.png') }}" alt="" width="50" height="50" class="borde" alt="Digit Automatización">
						<img src="{{ asset('assets/images/logos/agrotecnica.png') }}" alt="" width="50" height="50" class="borde" alt="Agrotécnica Aguilera">
						<img src="{{ asset('assets/images/logos/costa_consultores.jpg') }}" alt="" width="50" height="50" class="borde" alt="Costa Consultores 2030">
						<img src="{{ asset('assets/images/logos/proynca.png') }}" alt="" width="50" height="50" class="borde" alt="Precesos y Negocios Integrales (PROYNCA)">
						<img src="{{ asset('assets/images/logos/eni.png') }}" alt="" width="50" height="50" class="borde" alt="ENI">
						<img src="{{ asset('assets/images/logos/dacion.png') }}" alt="" width="50" height="50" class="borde" alt="Campo Dacion">
						<img src="{{ asset('assets/images/logos/losarcos.png') }}" alt="" width="50" height="50" class="borde" alt="Colegio Los Arcos">
						<img src="{{ asset('assets/images/logos/verbal.png') }}" alt="" width="50" height="50" class="borde" alt="VERBAL">
						<img src="{{ asset('assets/images/logos/ucv.png') }}" alt="" width="50" height="50" class="borde" alt="Universidad Central de Venezuela (UCV)">
						<img src="{{ asset('assets/images/logos/ing_ucv.jpg') }}" alt="" width="50" height="50" class="borde" alt="Escuela Básica de Ingenieria UCV">
						<img src="{{ asset('assets/images/logos/dioc.png') }}" alt="" width="50" height="50" class="borde" alt="Departamento de Investigación de Operaciones y Computación (DIOC)">
						<img src="{{ asset('assets/images/logos/ucv_ing_pet.png') }}" alt="" width="50" height="50" class="borde" alt="Ingenieria de Petróleo UCV">
						<hr />
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sefar: Documentalista -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/bd.png') }}" class="size1 img-fluid" alt="Base de datos">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ago 2019 - Actual.</span> Documentalista.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/sefar.png') }}" alt="Sefar Universal" width="30" height="30">
							Sefar Universal S.L.
							Chacao. Caracas.
						</strong>
						<p class="mb-0">
							Indexar y catalogar documentación almacenada en cuentas de Google Drive 
							e implementar una aplicación web de base de datos para su posterior búsqueda y consulta.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PDVSA: Analista Mayor de Presupuesto -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/comercio.png') }}" class="size1 img-fluid" alt="Comercio">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">May 2016 - Jul 2021.</span> Analista Mayor de Presupuesto.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Petróleos de Venezuela C.A. (PDVSA).
							Gerencia de Administración y Finanzas PDVSA Comercio y Suministro. La Campiña. Caracas.
						</strong>
						<p class="mb-0">
							Consolidar ejercicios presupuestarios de operaciones, 
							inversiones y compras. Optimizar hojas de cálculo para presentar la 
							información procesada. Cargar en SAP las cifras de los resultados obtenidos.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PDVSA: Analista de Presupuesto -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/presupuesto2.png') }}" class="size1 img-fluid" alt="Presupuesto">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Mar 2014 - May 2016.</span> Analista de Presupuesto.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Petróleos de Venezuela C.A. (PDVSA).
							Gerencia de Planificación Presupuesto y Gestión. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Asignación del presupuesto de operaciones e inversiones, 
							optimizando el uso de los recursos asignados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- UGMA -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/programacion3.png') }}" class="size1 img-fluid" alt="Programación">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Mar 2008 - Feb 2015.</span> Profesor de Programación y Matemáticas.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/ugma.png') }}" alt="UGMA" width="30" height="30">
							Universidad Gran Mariscal de Ayacucho (UGMA).
							El Tigre. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Impartir clases de programación en Visual Basic y Matemáticas I.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PDVSA: Supervisor de Presupuesto -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/presupuesto.png') }}" class="size1 img-fluid" alt="Presupuesto">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ene 2010 - Mar 2014.</span> Supervisor de Presupuesto.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Petróleos de Venezuela C.A. (PDVSA).
							Gerencia de Procesos de Superficie. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Verificar el cumplimiento de la correcta aplicación de los cargos al
							presupuesto de inversión y de gastos. Evaluar, recomendar y alertar acciones.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PDVSA: Planificador -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/planificacion2.png') }}" class="size1 img-fluid" alt="Planificación">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ene 2009 - Ene 2010.</span> Planificador de proyectos.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Petróleos de Venezuela C.A. (PDVSA).
							Superintendencia de Construcción de Obras Electromecánicas. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Aplicar procedimientos para planificar proyectos de inversiones y realizar el
							seguimiento físico y financiero en sus diferentes fases.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Digit Automatización -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/planificacion.png') }}" class="size1 img-fluid" alt="Planificación">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Feb 2008 - Ene 2009.</span> Planificador de proyectos.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/digit.png') }}" alt="Digit Automatización" width="30" height="30">
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Digit Automatización.
							Superintendencia de Construcción de Obras Electromecánicas. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Aplicar procedimientos para planificar proyectos de inversiones y realizar el seguimiento
							físico y financiero en sus diferentes fases.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Agrotécnica Aguilera -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/checklist.png') }}" class="size1 img-fluid" alt="Checklist">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Jul 2007 - Feb 2008.</span> Controlador físico de proyectos.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/agrotecnica.png') }}" alt="Agrotécnica Aguilera C.A." width="30" height="30">
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							Agrotécnica Aguilera C.A.
							Superintendencia de Infraestructura Mediano. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Control y seguimiento a las actividades de los proyectos.
							Consolidar y analizar los reportes de avance de obras de proyectos.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Costa Consultores -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/lf.png') }}" class="size1 img-fluid" alt="LF">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Sep 2006 - Jul 2007.</span> Inspector de Construcción.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/costa_consultores.jpg') }}" alt="Costa Consultores 2030" width="30" height="30">
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							<img src="{{ asset('assets/images/logos/dacion.png') }}" alt="Dacion" width="30" height="30">
							Costa Consultores 2030 C.A.
							Departamento de Infraestructura Dacion. Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Diseñar y supervisar la construcción de líneas de flujo y transferencia.
							Elaborar Memorias Descriptivas asociadas a los proyectos de líneas de flujo.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PROYNCA: Líder de Construcción -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/procesos3.png') }}" class="size1 img-fluid" alt="Procesos">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Abr 2006 - Sep 2006.</span> Líder De Construcción.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/proynca.png') }}" alt="PROYNCA" width="30" height="30">
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="PDVSA" width="30" height="30">
							<img src="{{ asset('assets/images/logos/dacion.png') }}" alt="Dacion" width="30" height="30">
							PROYNCA. Procesos y Negocios Integrales C.A.
							Departamento de Infraestructura Dacion Distrito San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Diseño y simulación de líneas de flujo (Hysys ‐ Pipephase).
							Elaboración de Memorias Descriptivas para construcción de líneas y Evaluaciones Económicas
							para los Proyectos de líneas de flujo.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- PROYNCA: Ingeniero de Procesos -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/procesos2.png') }}" class="size1 img-fluid" alt="Procesos">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ago 2004 - Abr 2006.</span> Ingeniero de Procesos.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/proynca.png') }}" alt="PROYNCA" width="30" height="30">
							<img src="{{ asset('assets/images/logos/eni.png') }}" alt="ENI" width="30" height="30">
							<img src="{{ asset('assets/images/logos/dacion.png') }}" alt="Dacion" width="30" height="30">
							PROYNCA. Procesos y Negocios Integrales C.A.
							Departamento de Ingenieria ENI Dacion. San Tomé. Estado Anzoátegui.
						</strong>
						<p class="mb-0">
							Seguimiento a los proyectos de Ingeniería. Elaboración de Manuales de Operación de estaciones petroleras.
							Elaboración de planos de procesos (PFD). Sugerencias de mejoras al proceso de tratamiento de crudo.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Profesor de Matemáticas -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/matematicas.png') }}" class="size1 img-fluid" alt="Matemáticas">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ene 2004 - Ago 2004.</span> Profesor de Matemáticas.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/losarcos.png') }}" alt="Los Arcos" width="30" height="30">
							U. E. Colegio Los Arcos. Urb. La Esmeralda. Baruta.
						</strong>
						<p class="mb-0">
							Encargado de dictar clases de matemáticas a cuatro secciones de estudiantes de 8vo grado.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Profesor VEBAL -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/clases2.png') }}" class="size1 img-fluid" alt="Clases">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ago 2002 - Sep 2004.</span> Instructor de cursos preuniversitarios.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/verbal.png') }}" alt="Logo de VERBAL" width="30" height="30">
							VERBAL. Corporación Educativa. Chacao.
						</strong>
						<p class="mb-0">
							Encargado de dictar clases de habilidad numérica, física, química y razonamiento
							mecánico en algunas unidades educativas de Venezuela, como el Colegio “Los Arcos” (Edo. Miranda),
							Colegio “La Concepción” (Edo. Miranda) y Colegio “Guayamurí” (Margarita).
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Supervisor de obras de mantenimiento en España -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/mantenimiento.png') }}" class="size1 img-fluid" alt="Mantenimiento">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Mar 2003 - Sep 2003.</span> Supervisor de obras de mantenimiento.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/generico.png') }}" alt="" width="30" height="30">
							Valle de Aramín S.L.U. Empresa de Construcción y Mantenimiento. Oviedo. España.
						</strong>
						<p class="mb-0">
							Supervisar y velar que las instalaciones de algunas organizaciones y
							viviendas se encontrasen en perfecto estado de funcionamiento.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Preparador de programación -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/programacion2.png') }}" class="size1 img-fluid" alt="Programación">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Mar 1996 - Dic 2002.</span> Preparador de programación.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/ucv.png') }}" alt="Logo UCV" width="30" height="30">
							<img src="{{ asset('assets/images/logos/ing_ucv.jpg') }}" alt="Escuela Básica de Ingenieria UCV" width="30" height="30">
							<img src="{{ asset('assets/images/logos/dioc.png') }}" alt="Departamento de Investigación de Operaciones y Computación" width="30" height="30">
							Departamento de Investigación de Operaciones y Computación (DIOC).
							Escuela Básica. Facultad de Ingenieria.
							Universidad Central de Venezuela. Ciudad Universitaria. Caracas.
						</strong>
						<p class="mb-0">
							Encargado de asistir académicamente a los estudiantes de las materias del departamento en los
							laboratorios de PC, en las asignaturas: Programación (C/C++, Pascal y Delphi),
							Uso de un sistema de dibujo asistido por un computador (AutoCAD),
							Uso de un manejador de base de datos (Access), Uso de una hoja de cálculo (Excel)
							y uso de un procesador de texto (Word).
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- Pasanta de la sala de micros de Ing. de petróleo -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/mantenimiento_pc.png') }}" class="size1 img-fluid" alt="Mantenimiento de PC">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Mar 1995 - Mar 1996.</span> Encargado de sala de computadoras.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/ucv.png') }}" alt="Logo UCV" width="30" height="30">
							<img src="{{ asset('assets/images/logos/ucv_ing_pet.png') }}" alt="Logos Escuela de Ingeniería de Petróleo UCV" width="30" height="30">
							Dirección de Petróleo y Sala de Micros. Escuela de Ingeniería de Petróleo.
							Facultad de Ingenieria.
							Universidad Central de Venezuela. Ciudad Universitaria. Caracas.
						</strong>
						<p class="mb-0">
							Encargado de asistir técnicamente a los usuarios de la sala de micros,
							y procurar el correcto funcionamiento de los equipos mediante el mantenimiento de software
							y hardware.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr />
	<!-- APROFAM (Asociación Promoción Familia). -->
	<div class="w3l-content-photo-5 py-5">
		<div class="content-main pt-lg-5 pt-md-3 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 content-photo">
						<img src="{{ asset('assets/images/trabajos/clases.png') }}" class="size1 img-fluid" alt="Matemáticas">
					</div>
					<div class="col-lg-10 content-left mt-lg-0 mt-2 pl-lg-2">
						<h4><span class="fecha_trabajo">Ago 1993 - Sep 1995.</span> Preparador de matemáticas y asistente en talleres vacacionales.</h4>
						<strong>
							<img src="{{ asset('assets/images/logos/pdvsa.png') }}" alt="Logo PDVSA" width="30" height="30">
							APROFAM (Asociación Promoción Familia). Institución financiada por PDVSA.
							Macuto. Estado Vargas.
						</strong>
						<p class="mb-0">
							Asistente de los eventos en los talleres vacacionales para niños y niñas entre 7 y 12 años
							y encargado de dictar clases de reparación de matemáticas a estudiantes de 7<sup>mo</sup> a 9<sup>no</sup>
							grado de algunas unidades educativas del Estado Vargas.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.partes_cv.pie')
</body>

</html>
<!-- // grids block 5 -->