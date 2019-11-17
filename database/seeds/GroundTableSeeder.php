<?php

use Illuminate\Database\Seeder;

class GroundTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'ground';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Empty table first
        DB::table($this->table)->truncate();

        // Add Aquatique
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Aquatique',
        ]);
        // Add Désert
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Désert',
        ]);
        // Add Forêt
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Forêt',
        ]);
        // Add Froid
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Froid',
        ]);
        // Add Jungle
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Jungle',
        ]);
        // Add Marais
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Marais',
        ]);
        // Add Montagnes
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Montagnes',
        ]);
        // Add Plaines
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Plaines',
        ]);
        // Add Plans
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Plans',
        ]);
        // Add Sous terre
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Sous terre',
        ]);
        // Add Urbain
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Urbain',
        ]);
    }
}
