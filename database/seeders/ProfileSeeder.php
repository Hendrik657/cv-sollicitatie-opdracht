<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
			'bio' => 'Hallo, ik ben Hendrik, een 20-jarige student van het Koning Willem 1 College in Den Bosch. Momenteel studeer ik Software Developer en zit in leerjaar 2. Naast mijn opleiding werk ik ook als verkoopmedewerker bij Hoogvliet Supermarkt. In mijn vrije tijd ben ik bezig met gamen, schoolwerk en zelf programmeren.',
			'skills' => 'Zelfstandig, Zorgvuldig, Harde werker, Nieuwsgierig, Verantwoordelijk',
			'technical_skills' => 'HTML, CSS, JavaScript, PHP, C#, MySQL, MSSQL, Vue.js, Node.js, Bootstrap, Less.js',
			'work_experience' => 'Hoogvliet Supermarkt, Spotta',
			'internships' => 'Spotmaster',
			'college' => 'Software Developer',
			'email' => 'hendrik.somers@edu-kw1c.nl',
			'linkedin' => 'https://www.linkedin.com/in/hendrik-somers-803082306/'
		]);
    }
}
