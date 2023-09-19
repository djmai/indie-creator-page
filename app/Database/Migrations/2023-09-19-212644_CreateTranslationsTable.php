<?php

// =======================================================
// Author:		<Miguel Martínez>
// Create date: <19/09/2023>
// Description:	<Migración para crear la tabla translations>
// =======================================================

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTranslationsTable extends Migration
{
    public function up()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0');
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'auto_increment' => true,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'tags' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
            ],
            'language' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
        ]);

        $this->forge->addKey('id', true);

        // Claves foráneas
        $this->forge->addForeignKey('user_id', 'users', 'uuid', 'NO ACTION', 'NO ACTION');
        //$this->forge->addForeignKey('language', 'languages', 'iso', 'NO ACTION', 'NO ACTION');
        $this->forge->createTable('translations');

        $this->db->query('SET FOREIGN_KEY_CHECKS = 1');
    }

    public function down()
    {
        $this->forge->dropTable('translations');
    }
}
