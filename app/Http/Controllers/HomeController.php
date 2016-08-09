<?php namespace App\Http\Controllers;

use App\Photo;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function homepage() {
		$photos = Photo::all();
		return view('mylove/homepage')->with('photos', $photos);
	}

	public function slider() {
		$photos = Photo::all();
		return view('mylove/slider')->with('photos', $photos);
	}
}
