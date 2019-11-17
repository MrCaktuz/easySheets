<?php

use Illuminate\Database\Seeder;

class CharacterClassTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'character_class';
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

        // Barbare
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Barbare',
        ]);
        // Barde
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Barde',
        ]);
        // Druide
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Druide',
        ]);
        // Ensorceleur
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Ensorceleur',
        ]);
        // Guerrier
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Guerrier',
        ]);
        // Magicien
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Magicien',
        ]);
        // Moine
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Moine',
        ]);
        // Paladin
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Paladin',
        ]);
        // Prêtre
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Prêtre',
        ]);
        // Rodeur
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Rodeur',
        ]);
        // Roublard
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Roublard',
        ]);
    }
}
