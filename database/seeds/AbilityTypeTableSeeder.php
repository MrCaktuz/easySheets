<?php

use Illuminate\Database\Seeder;

class AbilityTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'ability_type';
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

        // Don
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Don',
        ]);
        // Trait
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Trait',
        ]);
        // Capacité raciale
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Capacité raciale',
        ]);
        // Pouvoir spécial
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Pouvoir spécial',
        ]);
        // Aptitude de classe
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Aptitude de classe',
        ]);
    }
}
