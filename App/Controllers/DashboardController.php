<?php
namespace App\Controllers;
use App\Controllers\Controller;
use Codefii\Http\Request;
use Codefii\Hash\Hash;
use Codefii\View\View;
use Codefii\Session\Session;
use Codefii\Http\Redirect;
use App\Models\Admin;
use App\Models\Car_Details;
use App\Models\Drivers;
use App\Models\Offenses;
use App\Models\Offense_Committed;
class DashboardController extends Controller {
	public function index(){
		$session = new Session();
		if($session->exists('user')){
			$drivers = new Drivers();
		

			$cars = new Car_Details();
			$offenses_c = new Offense_Committed();
			$allDrivers = $drivers->findAll();
			$allCars = $cars->findAll();
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/dashboard',['allcars'=>$allCars,
		'alldrivers'=>$allDrivers,'committed'=>$offenses_c->findAll(),
		'alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
		
			
	}
	public function add_driver(){
		$session = new Session();
		if($session->exists('user')){
			$car_details = new Car_Details();
			$offenses_c = new Offense_Committed();
			$offenses = new Offenses();

			$drivers = new Drivers();
			
				if(Request::exists()){
				$findCarById = $car_details->findBy(['id'=>Request::get('car_id')]);
				$drivers->create(
					[Request::get('license_number'),
					Request::get('firstname'),
					Request::get('lastname'),
					Request::get('sate_of_origin'),
					Request::get('date_of_birth'),
					Request::get('gender'),
					Request::get('address'),
					Request::get('phone'),
					Request::get('email'),
					Request::get('car_id'),
					Request::get('car_model'),
					Request::get('car_plate_number'),
					Request::get('car_engine_number'),
					$findCarById->car_name
					]
				);
				$offenses_c->create([Request::get('offense'),Request::get('license_number')]);
				if($car_details){
					Redirect::to('/dashboard');
				}
			}
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/add_driver',['allcars'=>$car_details->findAll(),
		'alladmins'=>$alladmins,'offenses'=>$offenses->findAll()]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
	public function add_car(){
		$session = new Session();
		if($session->exists('user')){
			$car_details = new Car_Details();
			if(Request::exists()){
				
				$car_details->create(
					[Request::get('car_name')]
				);
				if($car_details){
					Redirect::to('/dashboard');
				}
			}
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/add_car',['alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
		public function view_car(){
		$session = new Session();
		if($session->exists('user')){
			$id = $_GET['id'];
	
			
			$drivers = new Drivers();
			$findByLicense=$drivers->findBy(['license_number'=>$_GET['id']]);
			// var_dump($findByLicense);
			if(isset($_GET['action'])=='delete'){
				// $findById = $car_details->findById($_GET['id']);
				$drivers->delete(['id'=>$_GET['c_id']]);
				if($drivers){
					Redirect::to('/dashboard');
				}
				
			}

				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/view_cars',['allcars'=>$findByLicense,
		'alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
		public function view_drivers(){
		$session = new Session();
		if($session->exists('user')){
		$drivers = new Drivers();
			if(isset($_GET['d_id'])){
				// $findById = $car_details->findById($_GET['id']);
				$drivers->delete(['driver_id'=>$_GET['d_id']]);
				if($drivers){
					Redirect::to('/dashboard');
				}
				
			}
			$alldrivers = $drivers->query("SELECT * FROM drivers LEFT JOIN car_details ON drivers.car_id = car_details.id");
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
			View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/view_drivers',['alldrivers'=>$alldrivers,
		'alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
	public function add_offense(){
		$session = new Session();
		if($session->exists('user')){
		if(Request::exists()){
			$offeses = new Offenses();
			$offeses->create([
				Request::get('type'),
				Request::get('code'),
				Request::get('points'),
				Request::get('penalty'),
				Request::get('status'),
				Request::get('category')
			]);
			if($offeses){
				Redirect::to('/dashboard');
			}
		}
			$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,
		'alladmins'=>$alladmins]);
		View::render('pages/add_offense',['alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
	public function committed(){
		$session = new Session();
		if($session->exists('user')){
			if(isset($_GET['driver_id'])){
			$offenses = new Offenses();
			$committed = new Offense_Committed();
				if(Request::exists()){
					$committed->create([Request::get('offense'),$_GET['driver_id']]);
					if($committed){
						Redirect::to('/dashboard');
					}
				}
					$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/committed',['offenses'=>$offenses->findAll(),
		'alladmins'=>$alladmins]);
		View::render('includes/footer');
			}
		}else{
			Redirect::to('/');
		}
	}
	public function view_offenders(){
		$session = new Session();
		if($session->exists('user')){
		$offenses = new Offenses();
		$committed = new Offense_Committed();
		if(isset($_GET['c_id'])){
				// $findById = $car_details->findById($_GET['id']);
				$committed->delete(['c_id'=>$_GET['c_id']]);
				if($committed){
					Redirect::to('/dashboard');
				}
				
			}
			$alloffenses = $offenses->query("SELECT * FROM offense_committed LEFT JOIN offenses ON offense_committed.offense_id = offenses.of_id LEFT JOIN drivers ON offense_committed.license_number = drivers.license_number");
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/view_offenders',['offenses'=>$alloffenses,
		'alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}

	public function search(){
		$session = new Session();
		if($session->exists('user')){
			if(Request::exists()){
				$val = Request::get('search');
				Redirect::to('/dashboard/search_results/'.$val.'');
			}
			$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
			View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/search',['alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
	public function add_admin(){
		$session = new Session();
		if($session->exists('user')){
			if(Request::exists()){
				$salt = Hash::salt(30);
				$admin = new Admin();
				$admin->create([
					Request::get('full_name'),
					Request::get('email'),
					$salt,
					Hash::make(Request::get('password'),$salt),
					Request::get('role')
				]);
				if($admin){
					Redirect::to('view_admin');
				}
			}
		 	$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
			View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/add_admin',['alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}
	public function view_admin(){
		$session = new Session();
		if($session->exists('user')){
			$admin = new Admin(); 
			$findall = $admin->findAll();
				$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
		View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/view_admin',['admins'=>$findall,'alladmins'=>$alladmins]);
		View::render('includes/footer');
		}else{
			Redirect::to('/');
		}
	}

	public function results(){
		$session = new Session();
		if($session->exists('user')){
			if(isset($this->route_params['key']))
			{
				$offenses = new Offenses();
			$committed = new Offense_Committed();
				$drivers = new Drivers();
				$findByLicense = $drivers->findBy(['license_number'=>$this->route_params['key']]);
				if($findByLicense){
				$ln = $findByLicense->license_number;
			$alloffenses = $offenses->query("SELECT * FROM offense_committed LEFT JOIN offenses ON offense_committed.offense_id = offenses.of_id LEFT JOIN drivers ON offense_committed.license_number = drivers.license_number WHERE drivers.license_number='$ln'");
			$admin = new Admin();
			$alladmins = $admin->findBy(['email'=>$session->get('user')]);
			View::render('includes/partial');
		View::render('includes/navbar',['session'=>$session,'alladmins'=>$alladmins]);
		View::render('pages/results',['offenses'=>$alloffenses,'alladmins'=>$alladmins]);
		View::render('includes/footer');
				}else{
					echo "<h1 style='color:red;'>Invalid License Number</h1>";
				}
			}else{
				
			}
		
		}else{
			Redirect::to('/');
		}
	}
	public function logout(){
		$session = new Session();
		$session->destroy();
		Redirect::to('/');
	}
}
