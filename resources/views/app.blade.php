<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<?php
	/*Definim secció footer_scripts per que cada vista pugui afegir els scripts individuals que necessiti
	 *A la plantilla definim els que volem que es carreguin per totes les vistes
	 */ 
	?>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- jQuery UI Version 1.11.0 -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
	@yield('footer_scripts')
</body>
</html>
