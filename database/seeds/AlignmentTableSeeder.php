<?php

use Illuminate\Database\Seeder;

class AlignmentTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'alignment';
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

        // Loyal Bon
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Loyal Bon',
        ]);
        // Neutre Bon
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Neutre Bon',
        ]);
        // Chaotique Bon
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Chaotique Bon',
        ]);
        // Loyal Neutre
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Loyal Neutre',
        ]);
        // Neutre
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Neutre',
        ]);
        // Chaotique Neutre
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Chaotique Neutre',
        ]);
        // Loyal Mauvais
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Loyal Mauvais',
        ]);
        // Neutre Mauvais
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Neutre Mauvais',
        ]);
        // Chaotique Mauvais
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Chaotique Mauvais',
        ]);
    }
}
