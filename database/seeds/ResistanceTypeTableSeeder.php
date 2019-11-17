<?php

use Illuminate\Database\Seeder;

class ResistanceTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'resistance_type';
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

        // Resistances
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Dégats',
        ]);
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Acide',
        ]);
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Feu',
        ]);
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Foudre',
        ]);
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Froid',
        ]);
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Son',
        ]);
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Magie',
        ]);
    }
}
