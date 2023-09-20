<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Seeder para agregar datos a la tabla users>
// =======================================================

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uuid' => '6f83cb9a-7f06-4d8f-a5f6-32a07d7a3c4e', // UUID
                'username' => 'john_doe',
                'email' => 'admin@m.ia',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'avatar' => 'user1.jpg',
                'name' => 'John Doe',
                'label' => 'Developer',
                'location' => 'New York, USA',
                'language' => 'English',
                'timezone' => 'America/New_York',
                'status' => 'active',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'uuid' => 'c0ab1e6d-9a7f-4b1c-8e9a-3f1c70d3b6a4', // UUID
                'username' => 'jane_smith',
                'email' => 'user@m.ia',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'avatar' => 'user2.jpg',
                'name' => 'Jane Smith',
                'label' => 'Designer',
                'location' => 'Los Angeles, USA',
                'language' => 'English',
                'timezone' => 'America/Los_Angeles',
                'status' => 'active',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "users"
        $this->db->table('users')->insertBatch($data);
    }
}
