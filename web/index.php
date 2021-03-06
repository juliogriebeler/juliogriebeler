<!DOCTYPE html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<?php
	$pgLang = "en";
	session_start();
	if(isset($_GET["lang"]) && in_array($_GET["lang"], array("de", "en", "pt"))){
		$pgLang = $_GET["lang"];
		$_SESSION["lang"] = $pgLang;
	}else if(isset($_SESSION["lang"])){
		$pgLang = $_SESSION["lang"];
	}else{
		$pgLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		$_SESSION["lang"] = $pgLang;
	}
	$validPages = array("home", "works", "contact");
	$pageId="home";
	$path = 'pages/home.php';
	if(isset($_GET["pg"])){
		$pg = $_GET["pg"];
		if(in_array($pg, $validPages)){
			$path = 'pages/'.$pg.'.php';
			$pageId=$pg;
		}
	}
	include_once $path;

	$pgHome = "Home";
	$pgWorks = "Works";
	$pgContact = "Contact";
	if($pgLang=="pt"){
		$pgHome = "Inicio";
		$pgWorks = "Trabalhos";
		$pgContact = "Contato";
	} else if($pgLang=="de"){
		$pgHome = "Anfang";
		$pgWorks = "Arbeiten";
		$pgContact = "Kontakt";
	}
	?>
<head>  
    <meta charset="utf-8">
    <title>Julio Griebeler - Fullstack Dev+Ops - Java, Python, HTML5, Javascript, Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="julio, griebeler, ibm, jx, solucoes, it, ti, web developer, python, java, php, html, fullstack, germany, entwickler, developer">
    <meta name="description" content="Julio Griebeler. Fullstack Dev+Ops. Java, Python, HTML5, Javascript, Cloud">
    <meta name="url" content="http://www.juliogriebeler.com.br">
    <meta name="author" content="Julio Griebeler - Jx Solucoes">
    <meta name="copyright" content="Julio Griebeler - Jx Solucoes">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Portuguese">
    <meta name="language" content="pt-br">
    <meta name="country" content="Brazil">
    <meta name="state" content="Rio Grande do Sul">
    <meta name="cache-control" content="no-cache">

	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/main.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="javascripts/modernizr.foundation.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<a href="home"><img src="images/julio.png" alt="desc" style="border:none; margin-top:25px" /></a>
	</div>
	<div class="row page_wrap" style="margin-top:-2px">
		<div class="twelve columns">
			<div class="row">
				<div class="twelve columns header_nav" style="margin-bottom:0; box-shadow: none">
					<div class="twelve columns">
						<ul id="menu-header" class="nav-bar horizontal">
							<li class=""><a href="home"><?php print $pgHome; ?></a></li>
							<li class=""><a href="works"><?php print $pgWorks; ?></a></li>
							<li class=""><a href="contact"><?php print $pgContact; ?></a></li>
							<!--<li class=""><a href="blog">Blog</a></li>-->
							<li><a target="_blank" href="https://www.linkedin.com/in/juliogriebeler/en" title="Linkedin"><i class="fa fa-linkedin-square"></i></a></li>
							<li><a target="_blank" href="https://github.com/juliogriebeler" title="Github"><i class="fa fa-github"></i></a></li>
							<li><a target="_blank" href="http://stackoverflow.com/users/1684135/j%C3%BAlio-griebeler" title="Stackoverflow"><i class="fa fa-stack-overflow"></i></a></li>
							
							<li class="has-flyout">
								<a href="#"><i class="fa fa-globe"></i></a><a href="#" class="flyout-toggle"></a>
								<ul class="flyout">
									<li class="has-flyout"><a href="<?php echo $pageId."&lang=pt"; ?>">PT</a></li>
									<li class="has-flyout"><a href="<?php echo $pageId."&lang=de"; ?>">DE</a></li>
									<li class="has-flyout"><a href="<?php echo $pageId."&lang=en"; ?>">EN</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="show-for-large-up"></div>
			<div class="row">				
				<div class="heading_dots hide-for-small">
					<h1 class="heading_supersize">
						<span class="heading_center_bg"><?php print $textHeader; ?></span>
					</h1>
				</div>
				<div class="twelve columns">
					<p class="welcome_text"><?php print $textPrincipal; ?></p>
					</p>
				</div>
			</div>
			<!--<hr class="row" style="margin-bottom: 20px">-->
			<div class="row" style="margin-bottom: 20px">
				<div class="four columns"></div>
				<div class="four columns text-center">
					<strong>2019 - Júlio Griebeler</strong>
				</div>
				<div class="four columns"></div>
			</div>
		</div>
	</div>
		<script src="javascripts/foundation.min.js" type="text/javascript"></script>
		<script src="javascripts/app.js" type="text/javascript"></script>
	    <script type="text/javascript">
	      var _gaq = _gaq || [];
	      _gaq.push(['_setAccount', 'UA-20685181-7']);
	      _gaq.push(['_setDomainName', 'juliogriebeler.com.br']);
	      _gaq.push(['_setAllowLinker', true]);
	      _gaq.push(['_trackPageview']);
	
	      (function() {
	        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	      })();
	
	    </script>
</body>
</html>
