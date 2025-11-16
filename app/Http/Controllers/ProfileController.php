<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Profile model gebruiken
use App\Models\Profile;

class ProfileController extends Controller
{
	/**
	 * Haal het eerste profiel op (is ook het enigste profiel)
	 */
    public function getProfile(){
		$profile = Profile::first();

		return $profile;
	}
}
