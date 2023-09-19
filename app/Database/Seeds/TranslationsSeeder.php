<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Seeder para agregar datos al a tabla translations>
// =======================================================

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TranslationsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'description' => 'Translation 1 Description',
                'tags' => 'tag1, tag2',
                'user_id' => 'c0ab1e6d-9a7f-4b1c-8e9a-3f1c70d3b6a4',
                'language' => 'en',
            ],
            [
                'id' => 2,
                'description' => 'Translation 2 Description',
                'tags' => 'tag3, tag4',
                'user_id' => '6f83cb9a-7f06-4d8f-a5f6-32a07d7a3c4e',
                'language' => 'es',
            ],
            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "translations"
        $this->db->table('translations')->insertBatch($data);
    }
}