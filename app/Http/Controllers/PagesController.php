<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App; // Si no no trobarà la classe User.php, hem d'afegir el seu namespace 

class PagesController extends Controller
{
	
    public function about() 
    {
    	//return 'About Page';
    	// Passem variables a la vista
    	$name = "Ep! Això és un contingut variable";
    	$text = '<span style="color: red;"> i aquest també!</span>';
    	
    	/* Si volguessim passar 1 sol valor
    	 * (a la ruta de la vista, els separadors de carpetes poden ser '/' ó '.', tant se val)
    	 * return view('pages.about')->with('name',$name);
    	 */
    	// Per passar molts valors a la vista (lo normal) utilitzem arrays. 
    	// A la vista, les claus seran els noms de les variables i els valors els valors. 
    	return view('pages.about')->with([
    			'name' => $name,
    			'text' => $text
    		]);
    	
    	/*
    	 * També podem precarregar primer els valors a un array i cridar la vista sense utilitzar 'with':
    	 * return view('pages.about', $aValors);
    	 */
	}
	
	public function contact()
	{
		// Retornem contact page
		// La vista es monta insertant contingut dins de les seccions
		$aValors = array();
		$aValors['mail'] = 'masteroftheuniverse@qualityclouds.com';
		$aValors['adreca'] = 'Rodeo Drive, 111';
		
		// Aquí utilitzarem barra com a separadir de carpetes, per variar ;)
		return view('pages/contact', $aValors);
	}
	
	public function testPHP()
	{
		return phpinfo();
	}
	
	public function modeltest()
	{
		// Funció patranya per veure com buscar un registre, modificar-lo i gravar-lo a la BD
		
		//$user= new App\User;  // Si volguessim crear un de nou en comptes de modificar ;)
		$user = App\User::find(1); // Si no especifiquem res estem buscant per defecte per camp 'id'
		
		$name = $user->first_name;
		$changedname = $name.'P';
		
		$user->first_name = $changedname;
		if ($user->save()) {
			$aNousValors = App\user::all()->toArray();
			return 'User name Marc updated OK!<br><br>'.print_r($aNousValors,1);
		}
		
	
	}

	public function modelreadtest()
	{
		// Funció patranya per veure com buscar un registre, modificar-lo i gravar-lo a la BD
		
		//$user= new App\User;  // Si volguessim crear un de nou en comptes de modificar ;)
		$user = App\User::find(1); // Si no especifiquem res estem buscant per defecte per camp 'id'
		
		$name = $user->first_name;
		$changedname = $name.'P';

		$aValors = App\User::all()->toArray();

		/*
		
		$user->first_name = $changedname;
		if ($user->save()) {
			$aNousValors = App\user::all()->toArray();
			return 'User name Marc updated OK!<br><br>'.print_r($aNousValors,1);
		}

		*/
		return 'User name ' . $user . ' updated OK!<br><br>'.print_r($aValors,1);
	}
}
