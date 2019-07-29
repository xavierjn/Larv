<?php namespace cozumel\Http\Controllers;



class pruebaController extends Controller {


	/**
	 * Show the application welcome screen to the user.
	 * 
	 * @return Response
	 */
	public function index()
	{
		return "wi";
	}

	
	public function nombre($nombre)
	{
		return "Hola, ".$nombre;
	}
}
