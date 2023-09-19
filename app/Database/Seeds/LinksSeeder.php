<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Seeder para agregar datos a la tabla links>
// =======================================================

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LinksSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Link 1',
                'url' => 'https://www.example.com/link1',
                'user_id' => 'c0ab1e6d-9a7f-4b1c-8e9a-3f1c70d3b6a4',
            ],
            [
                'id' => 2,
                'name' => 'Link 2',
                'url' => 'https://www.example.com/link2',
                'user_id' => '6f83cb9a-7f06-4d8f-a5f6-32a07d7a3c4e',
            ],
            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "links"
        $this->db->table('links')->insertBatch($data);
    }
}
