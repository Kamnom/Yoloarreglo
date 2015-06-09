<?php namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;
use DB;

class IndexController extends Controller {

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
	public function index(){
		$noticias = DB::table('noticias')->get();

		return view('pages.index',compact('noticias'));
	
	}
	public function join(){
		return view('pages.join');
	}

	public function login(){
		return view('pages.login');
	}

	public function aboutus(){
		return view('pages.aboutus');
	}

	public function callus(){
		return view('pages.callus');
	}

	public function store(){
		$dispositivos = DB::table('dispositivo')
								->select('marca')->groupBy('marca')->get();
		return view('pages.store',compact('dispositivos'));
	}


	public function tutoriales(){

		$dispositivos = DB::table('dispositivo')
								->select('marca')->groupBy('marca')->get();

		return view('pages.do-it-yourself',compact('dispositivos'));

	}

	
}