<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FastPHP is a super fast PHP framework to create websites and small projects">
    <meta name="author" content="Felipe Campelo">

	<title>FastPHP</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" 
					aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>

		  	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item">
		        		<a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="./sobre.php">Sobre</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link active" href="./galeria.php">Galeria</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="./contato.php">Contato</a>
		      		</li>
		    	</ul>

		    	<form class="form-inline my-2 my-lg-0">
		      		<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		    	</form>
		  	</div>
		</nav>
	</header>

	<main>
		<div class="jumbotron">
		    <div class="container">
		      	<h1 class="display-3">Galeria</h1>
		      	<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		      	<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		    </div>
		</div>

		<div class="container">

			<div class="row">
		    <?php
			$dir = new DirectoryIterator(dirname(__FILE__));
			
			foreach ($dir as $fileinfo) {
			    if (!$fileinfo->isDot()) {
			        if (substr($fileinfo->getFilename(), -3) == 'jpg') {
			        	for ($i = 1; $i <= 60; $i ++) {
						?>

						<div class="col-md-4 mb-5">
							<img src="<?php echo $fileinfo->getFilename(); ?>" width="100%" style="border-radius: 8px; box-shadow: #555 15px 15px 12px; cursor: pointer;">
						</div>

			        	<?php
			        	}
			        }
			    }
			}
			?>
		    </div>

		    <hr>

		</div>
	</main>

	<footer class="container">
	  	<p>&copy; Company 2017-2020</p>
	</footer>

	
	<!-- JS -->
	<script type="text/javascript" src="jquery-3.5.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="app.js"></script>
</body>
</html>
