<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProyectoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = array(
			[
				'nombre' => 'Benny',
				'raza' => 'Beagle',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			],
			[
				'nombre' => 'Boston',
				'raza' => 'Pitbull',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			]
		);
		Proyecto::insert($data);
	}
}