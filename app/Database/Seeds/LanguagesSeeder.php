<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Seeder para agregar datos al a tabla languages>
// =======================================================

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'iso' => 'en',
                'name' => 'English',
            ],
            [
                'iso' => 'es',
                'name' => 'Español',
            ],
            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "languages"
        $this->db->table('languages')->insertBatch($data);
    }
}
