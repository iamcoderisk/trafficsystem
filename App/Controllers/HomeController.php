<?php
namespace App\Controllers;
use App\Controllers\Controller;
use Codefii\Http\Request;
use Codefii\Hash\Hash;
use App\Models\Admin;
use Codefii\Session\Session;
use Codefii\Validation\Validation;
use Codefii\Http\Redirect;
use Codefii\View\View;
class HomeController extends Controller {
	public $errors=array();
	public function index(){
		$admin = new Admin();
		$session = new Session();
		// $salt = Hash::salt(30);
		// $admin->create(
		// 	[
		// 		"ekeminyd@gmail.com",
		// 		$salt,
		// 		Hash::make('prince',$salt)
		// 	]
		// 	);
		if(Request::exists()){
			$validation = new Validation();
			$validation->validate($_POST,array(
				"email"=>array(
					'required'=>true
				),
				"password"=>array(
					"required"=>true
				)
				));
				if($validation->passes()){
					$admin = new Admin();
					$admin->login(['email'=>Request::get('email')],Request::get('password'));
					if($admin->isLoggedIn()){
					$session = new Session();
					$session->set("user",Request::get('email'));
					Redirect::to('/dashboard');
					}
				}else{
					$this->errors = $validation->errors();
				}
		}	
		
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
			View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session = new Session,'alladmins'=>$alladmins]);
		View::render('pages/login',['errors'=>$this->errors]);
		View::render('includes/footer');
	}
}
