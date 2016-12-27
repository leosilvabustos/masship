<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaingsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() {
        return view('campaings.index');
    }
	
	public function create() {
		return view('campaings.create');
	}
}