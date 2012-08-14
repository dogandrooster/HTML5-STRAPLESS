<?
	#Class pattern for Main Container 
	$pattern = 'home';
?>
<? include 'manager/pi/home.php'; ?>


 
<? startblock('content') ?>
<article id=box>
	<div class=page-header>
		<h1>HI, IM MARK RIVERA <small>and welcome</small></h1>
	</div>
	<div class='hero-unit clearfix'>
		<h1>HTML5 + BOOTSTRAP</h1>
		<p>This is my latest HTML5 Frameworks with Bootstrap integration.</p>
		<p>
		  <a class="btn btn-primary" href="#">
		  	<i class="icon-wrench icon-white"></i> Launch HTML5 Introduction
		  </a>

			<div class=btn-toolbar>
			  <div class="btn-group">
			    <button class="btn btn-success">Success</button>
			    <button class="btn btn-info">Information</button>
			    <button class="btn btn-warning">Warning</button>
			    <button class="btn btn-inverse">Inverse</button>
			    <button class="btn btn-danger">Danger</button>
			  </div>
			</div>
		</p> 
	</div>
</article>
<? endblock(); ?>


 
<? startblock('headercodes') ?>
<link rel="stylesheet/less" href="<?=$root?>assets/less/home.less">
<? endblock(); ?>

<? startblock('extracodes') ?>
<? endblock(); ?>
