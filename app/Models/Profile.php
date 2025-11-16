<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	//Tijd uitzetten
	public $timestamps = false;

	/**
	 * Alle kolommen die getoond mogen worden hierin plaatsen
	 */
    protected $fillable = [
		'bio',
		'skills',
		'technical_skills',
		'work_experience',
		'internships',
		'college',
		'email',
		'linkedin'
	];
}
