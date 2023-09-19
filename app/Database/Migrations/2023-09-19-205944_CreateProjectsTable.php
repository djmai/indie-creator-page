<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Migración para crear la tabla projects>
// =======================================================

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uuid' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'website' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'support' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'repository' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'active',
            ],
            'tags' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'earnings' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'start_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'end_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('uuid', true);
        $this->forge->addForeignKey('user_id', 'users', 'uuid', 'NO ACTION', 'NO ACTION');
        $this->forge->createTable('projects');
    }

    public function down()
    {
        $this->forge->dropTable('projects');
    }
}
