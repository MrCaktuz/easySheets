<?php

use Illuminate\Database\Seeder;

class SavingThrowsTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'saving_throws_type';
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

        // Saving Throws
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Réflexe',
        ]);
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Vigueur',
        ]);
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Volonté',
        ]);
    }
}
