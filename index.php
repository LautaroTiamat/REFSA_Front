<?php

require './includes/inc.php';

$hero_imgs = [
	'assets/img/landing/p1floes5oi167cien3fs1r5lho94_page_01.png',
	'https://www.mitrol.net/assets/img/backgrounds/email.png',
	'https://www.mitrol.net/assets/img/backgrounds/contact-center.png',
];

$values_1 = [
	['title' => 'Autogestión', 'content' => 'Gestione sus facturas, pagos, consumos y mucho más.', 'href' => 'Autogestion', 'class' => 'autogestion'],
	['title' => 'Tarifas', 'content' => 'Consulte el cuadro tarifario vigente', 'href' => 'tarifas', 'class' => 'tarifas'],
	['title' => 'Factura', 'content' => 'Conozca su factura.', 'href' => 'factura', 'class' => 'factura'],
	['title' => 'Lugares de Pago', 'content' => 'Encuentre el lugar de pago mas cercano.', 'href' => 'lugaresDePago', 'class' => 'lugares_pago'],
	['title' => 'Oficinas de REFSA', 'content' => 'Encuentre las oficinas comerciales de Refsa de toda la provincia.', 'href' => 'oficinas', 'class' => 'oficinas'],
	['title' => 'Contacto', 'content' => 'Envíe sus consultas a REFSA.', 'href' => 'contacto', 'class' => 'contacto'],
	['title' => 'Cortes Programados', 'content' => 'Vea los cortes programados.', 'href' => 'CortesProgramados', 'class' => 'cortes'],
	['title' => 'Turnos Web', 'content' => 'Solicite turnos desde aquí.', 'href' => 'Tramites/Requisitos', 'class' => 'turnos'],
	['title' => 'Preguntas Frecuentes', 'content' => 'Encuentre respuestas a sus preguntas.', 'href' => 'Ayuda/PreguntasFrecuentes', 'class' => 'preguntas'],
];

$values_2 = [
	[
		'title' => 'INCORPORAMOS UN NUEVO TRANSFORMADOR QUE ESTÁ DISPONIBLE PARA CUALQUIER CONTINGENCIA',
		'content' => 'Un nuevo transformador matriz de 33 mil voltios se encuentra ubicado en nuestras instalaciones y estará en custodia como reserva fría, es decir, como repuesto para ser utilizado cuando sea necesario; esta nueva incorporación tardó aproximadamente un año en construirse y pesa 35 toneladas.',
		'href' => '#',
		'date' => '2021-09-14',
		'img' => 'https://www.recursosyenergia.com.ar/_res/images/noticias/noticia_trafo.jpg'
	],[
		'title' => 'EN VISTAS A UN FUTURO CON NUEVOS DESARROLLOS ELÉCTRICOS',
		'content' => 'El gerente de la empresa, Benjamín Villalba, se refirió al reciente reconocimiento de Nación por el pago en término de los compromisos con CAMMESA.',
		'href' => '#',
		'date' => '2021-05-21',
		'img' => 'https://www.recursosyenergia.com.ar/_res/images/noticias/noticia97.jpg'
	],[
		'title' => 'FORMOSA RECIBIRÁ FONDOS PARA OBRAS POR HABER CUMPLIDO CON SUS OBLIGACIONES DE PAGO A CAMMESA',
		'content' => 'Por primera vez, el Estado nacional reconoce y valora la conducta de las distribuidoras cumplidoras entre las que se encuentra REFSA.',
		'href' => '#',
		'date' => '2021-05-20',
		'img' => 'https://www.recursosyenergia.com.ar/_res/images/noticias/noticias95.jpg'
	],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './includes/layouts/landing/head.php'; ?>
	
	<link href="https://recursosyenergia.com.ar/_res/css/refsa_custom.css?v=1635781639" rel="stylesheet">
</head>
<body>

	<?php include './includes/layouts/landing/header.php'; ?>

	<section id="hero" class="hero d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
					<h1 data-aos="fade-up">¡Sumate a la factura digital!</h1>
					<h2 data-aos="fade-up" data-aos-delay="400">Sumate ahora a la factura digital de forma fácil y segura.</h2>
					<div data-aos="fade-up" data-aos-delay="600">
						<div class="text-center text-lg-start">
							<a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
								<span>Autogestión</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">

					<div class="hero-swiper">
						<div class="swiper-wrapper">

							<?php foreach($hero_imgs as $image): ?>

								<div class="swiper-slide">
									<img src="<?= $image; ?>" />
								</div>

							<?php endforeach; ?>
							
						</div>
						<div class="swiper-pagination"></div>
					</div>

					<!--<img src="https://bromovil.com/images/vectors/imei-vector.png" class="img-fluid" alt="">-->
				</div>
			</div>
		</div>
	</section>

  	<main id="main">

		<section id="values" class="values">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<p>Título</p>
					<br/>
					<h2>Subtítulo</h2>
				</header>

				<?php
				$count = 1;
				foreach($values_1 as $item):
					$delay = $count === 1 ? '200' : ($count === 2 ? '400' : '600');
				?>

					<?php if($count === 1): ?>
						<div class="row" style="padding-top: 20px;">
					<?php endif; ?>

					<div class="col-lg-4 mt-4 mt-lg-0">
						<a href="<?= base_url() . $item['href'] ?>">
							<div class="box" data-aos="fade-up" data-aos-delay="<?= $delay; ?>">
								<img class="icono_portada_web <?= $item['class']; ?>"/>
								<br/><br/>
								<h3><?= $item['title']; ?></h3>
								<p style="color: #3e4444;"><?= $item['content']; ?></p>
							</div>
						</a>
					</div>

					<?php if($count === 3): ?>
						</div>
					<?php endif; ?>
					
				<?php
				$count = $count === 3 ? 1 : $count + 1;
				endforeach;
				?>

			</div>
		</section>
	
		<section id="recent-blog-posts" class="recent-blog-posts">
			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<p>Últimas Noticias</p>
				</header>

				<div class="row">

					<?php foreach($values_2 as $item): ?>

						<div class="col-lg-4" style="padding-top: 15px;">
							<div class="post-box">
								<div class="post-img" style="height: 250px;">
									<img src="<?= $item['img']; ?>">
								</div>
								<span class="post-date"><?= $item['date']; ?></span>
								<h3 class="post-title"><?= $item['title']; ?></h3>
								<a href="<?= base_url() . 'Noticias/' . $item['href']; ?>" class="readmore stretched-link mt-auto">
									<span>Leer más</span><i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
						
					<?php endforeach; ?>

				</div>
				
			</div>
		</section>
	
  	</main>

	<?php
	include './includes/layouts/landing/footer.php';
	include './includes/layouts/landing/scripts.php';
	?>

</body>
</html>