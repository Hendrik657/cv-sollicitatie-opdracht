<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Profile model gebruiken
use App\Models\Profile;
use Exception;

class ProfileController extends Controller
{
	/**
	 * Haal het eerste profiel op (is ook het enigste profiel)
	 */
    public function getProfile(){
		try {
			$profile = Profile::first();
		}
		catch (Exception $ex) {
			throw $ex;
		}
		
		return view('homepage', compact('profile'));
	}
}
