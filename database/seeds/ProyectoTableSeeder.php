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
			],
			[
				'nombre' => 'Bugs',
				'raza' => 'Conejo Blanco',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Rocko',
				'raza' => 'Beagle',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Chiquita',
				'raza' => 'Pitbull',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Hulk',
				'raza' => 'Chihuahua',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Borrego',
				'raza' => 'Chow Chow',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Fido',
				'raza' => 'Corriente',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Titan',
				'raza' => 'Pitbull',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Maya/Gorda',
				'raza' => 'Beagle',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Yuki',
				'raza' => 'Corriente',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Thiago',
				'raza' => 'Chihuahua/French',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
            ],
			[
				'nombre' => 'Mia',
				'raza' => 'Pug',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			]
		);
		Proyecto::insert($data);
	}
}
