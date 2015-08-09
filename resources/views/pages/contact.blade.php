@extends('app')

<?php
/* Com que estem extenent de plantilla base app.blade.php 
 * ens estalviem tota la mandanga de posar Doctype, codificació etc. 
 * Ens limitem a insertar contingut HTML a la secció 'content' de la plantilla
 * Recordar: A les directives de blade que comencen amb @ no cal posar punt i coma al final, no és PHP, és del FW 
 */
?>

@section('content')
	<h1>
		Contacta amb nosaltres: 
	</h1>
	<p>
		Mail: {{ $mail }}
	</p>
	<p>
		Adreça: {{ $adreca }}
	</p>
@stop

@section('footer_scripts')
    <!-- Charts JavaScript (TO-DO) -->
    <script src="js/charts.js"></script>
@stop

<?php 
/*NOTA: Blade (el gestor de vistes de Laravel) també incorpora una sintaxi pròpia per fer blocs condicionals,
 * foreach, etc directament a la vista sense haver d'obrir blocs php. No tinc temps de fer els exemples, però 
 * són fàcils d'aprendre i utilitzar.  
 */
?>