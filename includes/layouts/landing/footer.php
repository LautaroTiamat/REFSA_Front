<?php

$social_media_list = [
	['name' => 'facebook', 'href' => 'https://www.facebook.com/REFSAEnergiaOficial/'],
	['name' => 'instagram', 'href' => 'https://www.instagram.com/refsaenergia'],
	['name' => 'youtube', 'href' => 'https://www.youtube.com/channel/UC7POohve-3sVX8C9BJv9ZTg/?sub_confirmation=1'],
];

$footer_links_list = [
	[
		'title' => 'Enlaces de Interés',
		'type' => 'external',
		'items' => [
			['i_title' => 'Tarifa Social', 'i_href' => 'https://www.formosa.gob.ar/noticia/23300/1301/tarifa_social_el_gobierno_de_la_provincia_crea_el_programa_esfuerzo_formoseno'],
			['i_title' => 'Ministerio de Energía y Minería de la Nación', 'i_href' => 'https://www.minem.gob.ar/energia-electrica/index'],
			['i_title' => 'ENRE', 'i_href' => 'https://www.argentina.gob.ar/enre'],
			['i_title' => 'ADERE', 'i_href' => 'https://adere.org.ar'],
			['i_title' => 'CAMMESA', 'i_href' => 'http://portalweb.cammesa.com/default.aspx'],
			['i_title' => 'TRANSENER', 'i_href' => 'http://www.transener.com.ar'],
			['i_title' => 'Gobierno de la Provincia de Formosa', 'i_href' => 'http://www.formosa.gob.ar'],
		]
	],[
		'title' => 'Ayuda',
		'type' => 'local',
		'items' => [
			['i_title' => 'Contacto', 'i_href' => 'contacto'],
			['i_title' => 'Denunciar Conexión Clandestina', 'i_href' => 'Formularios/ConexionClandestina'],
			['i_title' => 'Preguntas Frecuentes', 'i_href' => 'Ayuda/PreguntasFrecuentes'],
			['i_title' => 'App Móvil', 'i_href' => 'Ayuda/PreguntasFrecuentesAppWeb'],
		]
	]
];

?>

<footer id="footer" class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row gy-4">
				<div class="col-lg-5 col-md-12 footer-info">
					<a href="index.html" class="logo d-flex align-items-center">
						<img src="https://www.recursosyenergia.com.ar/_res/images/logo_web.png"/>
					</a>
					<p>Empresa estatal encargada de todas las cuestiones ligadas a la política de hidrocarburos y generación de energía, así como del servicio de distribución de la misma.</p>
					<div class="social-links mt-3">

						<?php foreach($social_media_list as $item): ?>

							<a href="<?= $item['href']; ?>" class="<?= $item['name']; ?>"><i class="bi bi-<?= $item['name']; ?>"></i></a>
							
						<?php endforeach; ?>

					</div>
				</div>

				<?php foreach($footer_links_list as $list): ?>

					<div class="col-lg-2 col-6 footer-links">
						<h4><?= $list['title']; ?></h4>
						<ul>

							<?php foreach($list['items'] as $item): ?>

								<li>
									<i class="bi bi-chevron-right"></i> 
									<a href="<?= base_url() . ($list['type'] === 'external' ? 'Link/' : '') . $item['i_href']; ?>" target="blank"><?= $item['i_title']; ?></a>
								</li>

							<?php endforeach; ?>

						</ul>
					</div>

				<?php endforeach; ?>

				<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
					<h4>Datos de Contacto</h4>
					<p>
						H. Gorleri 580<br>
						Formosa Capital - 3600<br><br>
						<strong>Teléfono 1:</strong> 0810-888-3333<br>
						<strong>Teléfono 2:</strong> 0370-4439800<br>
						<strong>Teléfono 3:</strong> 0370-4669517<br>
						<strong>Email:</strong> info@recursosyenergia.com.ar<br>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			Derechos Reservados © <span class="purecounter" data-purecounter-end="<?= date('Y'); ?>"></span> <strong><span>REFSA</span></strong>.
		</div>
		<div class="politics">
			<a href="<?= base_url(); ?>PoliticasDePrivacidad">Políticas de Privacidad</a>
		</div>
	</div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>