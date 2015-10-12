<!DOCTYPE html>
<html lang="fr">
<head>
<title>WEBSANSLIMITE.COM - Nous contacter</title>
<meta name="description" content="Formulaire de contact, pour poser toutes vos questions sur nos hébergements gratuits.">
<meta name="keywords" content="hébergement, gratuit, sans, pub, publicité, mysql, mutualisé">
<meta name="author" content="websanslimite">
<meta charset="utf-8">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page6">
  <? 
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>
<div class="tail-top1">
<!-- header -->
	<?php
	{
		include 'header.php';
	}
	?>
<!-- content -->
	<section id="content"><div class="ic"></div>
		<div class="container">
			<div class="inside">
				<div id="slogan">
					<div class="inside">
						<h2><span>Votre nom de domaine,</span> est primordial</h2>
						<p>Souscrivez ici pour un hébergement mutualisé gratuit, illimité et sans publicité, disposant de PHP & MySQL en choisissant un sous domaine gratuit. Depuis le cPanel, vous pourrez commander un nom de domaine vous appartenant, gage de sérieux et d'un meilleurs référencement par les moteurs de recherche.</p>
					</div>
				</div>
				<ul class="banners wrapper">
					<li><a href="#">Gratuit</b></a></li>
					<li><a href="#">Sans publicité</b></a></li>
					<li><a href="#">Illimité</b></a></li>
					<li><a href="#">1-Clic CMS</b></a></li>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Détails</h2>
							<ul class="solutions">
								<li><img src="images/icon1.gif"><p>Activation instantanée de jour comme de nuit (24h/7)</p></li>
								<li><img src="images/icon4.gif"><p>Installation en 1 clic des CMS les plus connus (wordpress, prestashop, etc...)</p></li>
								<li><img src="images/icon2.gif"><p>Pas de démarches administratives</p></li>
								<li><img src="images/icon3.gif"><p>Support client en français</p></li>
								</ul>
						</article>
						<article class="col-2">
							<h2>Une question ? Nous y répondons sous 24h en français.</h2>
							<!-- Do not change the code! -->
							<a id="foxyform_embed_link_161026" href="http://fr.foxyform.com/">foxyform</a>
							<script type="text/javascript">
							(function(d, t){
							   var g = d.createElement(t),
							       s = d.getElementsByTagName(t)[0];
							   g.src = "http://fr.foxyform.com/js.php?id=161026&sec_hash=eefe81e9ff5&width=600px";
							   s.parentNode.insertBefore(g, s);
							}(document, "script"));
							</script>
							<!-- Do not change the code! -->
							<!-- <?php
							{
								include 'contact2.php';
							}
							?>



							<form id="contacts-form" action="">
								<fieldset>
									<div class="field text"><label>Votre nom:</label><input type="text"></div>
									<div class="field text"><label>Votre E-mail:</label><input type="email"></div>
									<div class="field"><label>Votre message:</label><textarea></textarea></div>
									<div class="alignright"><a href="#contacts-form" class="link4" onClick="document.getElementById('contacts-form').reset()"><span><span>Effacer</span></span></a><a href="#" class="link2" onClick="document.getElementById('contacts-form').submit()"><span><span>Envoyer</span></span></a></div>
								</fieldset>
							</form>-->

						</article>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<?php
	{
		include 'aside.php';
	}
?>
</body>
</html>
