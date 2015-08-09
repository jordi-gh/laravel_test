<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

// Controlador de proves x veure que funciona sistema antic controlador@accio tal com surt als laracasts
// en la nostra versio 5.1.9 de Laravel


	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('welcome');
	}
	
}