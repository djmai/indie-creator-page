<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Seeder para agregar datos a la tabla projects>
// =======================================================

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uuid' => '6f83cb9a-7f06-4d8f-a5f6-32a07d7a3c4e', // UUID
                'name' => 'Project One',
                'slug' => 'project-one',
                'logo' => 'project1.jpg',
                'description' => 'Description for Project One',
                'website' => 'https://www.projectone.com',
                'support' => 'support@projectone.com',
                'repository' => 'https://github.com/projectone',
                'status' => 'active',
                'tags' => 'tag1, tag2',
                'earnings' => '1000.00',
                'start_at' => '2023-09-20 08:00:00',
                'end_at' => '2023-12-31 23:59:59',
                'user_id' => 'c0ab1e6d-9a7f-4b1c-8e9a-3f1c70d3b6a4', // UUID
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'uuid' => 'c0ab1e6d-9a7f-4b1c-8e9a-3f1c70d3b6a4', // UUID
                'name' => 'Project Two',
                'slug' => 'project-two',
                'logo' => 'project2.jpg',
                'description' => 'Description for Project Two',
                'website' => 'https://www.projecttwo.com',
                'support' => 'support@projecttwo.com',
                'repository' => 'https://github.com/projecttwo',
                'status' => 'active',
                'tags' => 'tag3, tag4',
                'earnings' => '1500.00',
                'start_at' => '2023-10-01 08:00:00',
                'end_at' => '2023-12-31 23:59:59',
                'user_id' => '6f83cb9a-7f06-4d8f-a5f6-32a07d7a3c4e', // UUID
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "projects"
        $this->db->table('projects')->insertBatch($data);
    }
}
