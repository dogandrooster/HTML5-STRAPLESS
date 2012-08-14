<? 
	$root = '1';
	require_once "_control.php";
	require_once "_inheritance.php";
?>
<!doctype html>
<!--[if lte IE 8]><html class="msie no-js" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?=$metatitle;?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="<?=$root?>assets/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$root?>assets/images/ico/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$root?>assets/images/ico/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?=$root?>assets/images/ico/apple-touch-icon-57x57-precomposed.png">
<link rel="stylesheet/less" href="<?=$root?>assets/less/core.less">
<?=emptyblock('headercodes');?>
<script src="<?=$root?>assets/js/script-hdr.min.js"></script>
</head>

<body>

<div class="wrap header">
	<header>
  	<a id="hdr-logo" href="<?=$root?>" title="go back to Homepage"></a>
  	<nav menunav>
  		<ul>
  			<li>Home</li>
  			<li>About HTML5</li>
  			<li>CSS Less</li>
  			<li>Contact</li>
  		</ul>
  	</nav>
	</header>
</div>

<div class="wrap <?=$pattern?>">
	<div id="main" role="main" class="clearfix">
		<?=emptyblock('content');?>
	</div>
</div>

<div class="wrap footer">
	<footer>
		Copyright <?=date('Y');?>. <a copyright href="#">HTML5 Site Name</a>. All rights reserved. <br>
		<a signature href="#" target="_blank" title="How may I help you?">Web Design By: iMark Designs.</a>
	</footer>
</div>

<!-- INT/EXT JAVASCRIPT -->
<script src="<?=$root?>assets/js/script-ftr.min.js"></script>
<?=emptyblock('extracodes');?>
<script>
	//GOOGLE ANALYTIC SCRIPT
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>