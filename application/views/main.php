<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Laporan Jam Kerja Produksi | RAB</title>

    <!-- Bootstrap core CSS -->
    <?php foreach($styles as $style) echo HTML::style($style), "\n"; ?>
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/ljkp/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">LJKP</a>
	</div>
	<!-- Menu -->
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
	    <li><?php echo HTML::anchor('stamping', 'Stamping'); ?></li>
	    <li><?php echo HTML::anchor('shearing', 'Shearing'); ?></li>
	    <li><?php echo HTML::anchor('drilling', 'Drilling'); ?></li>
	    <li><?php echo HTML::anchor('plasma', 'Plasma'); ?></li>
	    <li><a href="#">Reporting</a></li>
	    <li><a href="#">Settings</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
	      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
		  <li><a href="">Log out</a></li>
		</ul>
	    </li>
            <li><a href="#">Help</a></li>
          </ul>
	</div> 
      </div>
    </nav>

    <!-- CONTENT HERE -->
    <div class="container-fluid">
      <div class="row">

	<?php echo $content ?>
	
      </div>
    </div>
    <!-- END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?php foreach($scripts as $script) echo HTML::script($script), "\n"; ?>
  </body>
</html>
