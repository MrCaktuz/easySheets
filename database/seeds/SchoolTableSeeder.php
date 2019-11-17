<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'school';
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

        // Abjuration
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Abjuration',
        ]);
        // Air
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Air',
        ]);
        // Bois
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Bois',
        ]);
        // Divination
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Divination',
        ]);
        // Eau
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Eau',
        ]);
        // Enchantement
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Enchantement',
        ]);
        // Évocation
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Évocation',
        ]);
        // Feu
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Feu',
        ]);
        // Illusion
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Illusion',
        ]);
        // Invocation
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Invocation',
        ]);
        // Magie du péché
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Magie du péché',
        ]);
        // Métal
        DB::table($this->table)->insert([
            'id' => 12,
            'name' => 'Métal',
        ]);
        // Néant
        DB::table($this->table)->insert([
            'id' => 13,
            'name' => 'Néant',
        ]);
        // Nécromancie
        DB::table($this->table)->insert([
            'id' => 14,
            'name' => 'Nécromancie',
        ]);
        // Terre
        DB::table($this->table)->insert([
            'id' => 15,
            'name' => 'Terre',
        ]);
        // Transmutation
        DB::table($this->table)->insert([
            'id' => 16,
            'name' => 'Transmutation',
        ]);
        // Ecole Universelle
        DB::table($this->table)->insert([
            'id' => 17,
            'name' => 'Ecole Universelle',
        ]);
    }
}
