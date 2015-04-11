<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/**
	 * Show the decaf homepacge to the User
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}
