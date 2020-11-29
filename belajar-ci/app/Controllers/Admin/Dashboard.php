<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\UsersModel;

    class Dashboard extends BaseController {
    	public function index(){
    		$session = session();
    		echo "Selamat Datang ".$session->get('user_name');
    	}

    }