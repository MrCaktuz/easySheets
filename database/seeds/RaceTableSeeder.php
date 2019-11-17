<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'race';
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

        // Add Demi-elfe race
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Demi-elfe',
        ]);
        // Add Demi-orque race
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Demi-orque',
        ]);
        // Add Elfe race
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Elfe',
        ]);
        // Add Gnome race
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Gnome',
        ]);
        // Add Halfelin race
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Halfelin',
        ]);
        // Add Humain race
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Humain',
        ]);
        // Add Nain race
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Nain',
        ]);
    }
}
