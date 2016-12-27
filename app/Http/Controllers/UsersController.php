<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Users as UserModel;

class UsersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
		self::$sectionTitle = 'Usuarios';
    }

	public function index() {
		
		$users = UserModel::all();
		$sectionTitle = self::$sectionTitle;
        return view('users.index', compact('users', 'sectionTitle'));
    }
	
	public function form(Request $request, $id = null) {		
		$user = null;
		
		if ($request->isMethod('post')) {
			
		}
		
		$sectionTitle = self::$sectionTitle;
		return view('users.form', compact('user', 'sectionTitle'));
	}
}