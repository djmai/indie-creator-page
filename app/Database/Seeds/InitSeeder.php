<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Clase para inicializar los seeders en orden correcto>
// =======================================================


namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class InitSeeder extends Seeder
{
	public function run()
	{
		$this->call('LanguagesSeeder');
		$this->call('UsersSeeder');
		$this->call('ProjectsSeeder');
		$this->call('TranslationsSeeder');
		$this->call('LinksSeeder');
		$this->call('SkillsSeeder');
	}
}
