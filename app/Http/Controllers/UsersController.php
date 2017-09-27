<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
	
	public function index(Request $request) {
		$user_id = Auth::user()->id;
		return view('dashboard')->with('user_id', $user_id);
	}


    public function processTransfer(Request $request) {
	// Logic to process Transfer
    }

    public function history() {
    	return view('dashboard.history');
    }

    public function fundWallet() {
    	return view('dashboard.fund-wallet');
    }

    public function processFundWallet(Request $request) {
	// Logic to process funding of wallet.
    }

		
}
