<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resep extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'resep_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'resep_nama'       => [
				'type'           => 'TEXT',
			],
			'resep_img'       => [
				'type'           => 'VARCHAR',
				'constraint'		=> 255
			],
			'resep_bahan'       => [
				'type'           => 'TEXT',
			],
			'resep_cara'       => [
				'type'           => 'TEXT',
			],
		]);
		$this->forge->addKey('resep_id', true);
		$this->forge->createTable('reseps');
	}

	public function down()
	{
		$this->forge->dropTable('reseps');
	}
}
