<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() {
        return view('clients.index');
    }
	
	public function create() {
		return view('clients.create');
	}
}