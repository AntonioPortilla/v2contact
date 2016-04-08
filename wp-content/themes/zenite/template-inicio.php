<?php
/* Template Name: Pagina Inicio */
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Sistema que le permite contactar más clientes y fidelizarlos por siempre  - V2Contact</title>
	<meta name="keywords" content="negocio, V2Contact, sistema, contactar, clientes">
	<meta name="description" content="V2Contact :: El Sistema que le permite contactar más clientes">
	<meta name="author" content="JALP Laveriano">
	<link rel="import" href="<?php echo home_url(); ?>/public/elements/elements.html">
	<link rel="stylesheet" href="<?php echo home_url(); ?>/public/css/main.min.css">
	<script src="<?php echo home_url(); ?>/public/js/js-head.min.js"></script>
	<link rel="stylesheet" href="http://service.v2contact.com/chat/css">
	<script src="http://service.v2contact.com/chat/api-source"></script>
	<link rel="icon" href="/favicon.ico">
</head>
<body>
<v2c-content>
	<poly-slider></poly-slider>
	<section-frase></section-frase>
	<section-whatsapp></section-whatsapp>
	<section-srv></section-srv>
	<section-business></section-business>
	<section-search></section-search>
	<section-hablan></section-hablan>
	<footer-v2c></footer-v2c>
</v2c-content>
<div id="video_principal" class="main" role="main">
	<section class="semantic-content" id="now" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
		<div class="modal-inner">
			<div class="formSuscribir">
				<div class="titulo_form">
					<span class="os-bold">Suscríbase</span> para hacer CRECER su negocio con el Sistema de V2Contact
				</div>
				<div class="info_free u-regular">
					<span class="os-bold">Recibirá una Prueba GRATUITA</span> Así como “Invitación a Talleres Gratuitos de Marketing Digital”
				</div>
				<div class="form_v2c">
					<form method="post" action="http://www.v2contact.com/send/sendForm.php" id="formV2C">
						<div>
							<label for="nombre" style="visibility: hidden;">Nombres</label>
							<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
						</div>
						<div>
							<label for="nombre" style="visibility: hidden;">Paises</label>
							<select name="pais" id="country">
							<option value="per" selected="">Perú</option>
							<option value="mex">México</option>
							<option value="chi">Chile</option>
							<option value="col">Colombia</option>
							</select>
						</div>
						<div>
							<label for="email" style="visibility: hidden;">E-Mail</label>
							<input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
						</div>
						<div>
							<label for="nombre" style="visibility: hidden;">Celular</label>
							<input type="text" name="cel" id="cel" minlength="7" maxlength="11" placeholder="Celular" required>
						</div>
						<div class="btn-pruebe" id="sendV2C">
							<a class="button expand btn-default">Quiero Unirme Ahora!</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<a href="#!" class="modal-close" title="Cerrar" data-close="X"></a>
	</section>
</div>
<div id="v2c_api_chat"><div class="v2c_api_content"></div></div>
<script src="http://service.v2contact.com/chat/api/37c34c25918ab0bca7f9a8256875be99"></script>
<script src="<?php echo home_url(); ?>/public/js/main.min.js"></script>
</body>