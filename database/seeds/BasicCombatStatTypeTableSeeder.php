<?php

use Illuminate\Database\Seeder;

class BasicCombatStatTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'basic_combat_stat_type';
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

        // Touché au corps à corps
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Corps à corps',
        ]);
        // Touché à distance
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Distance',
        ]);
        // Points de vie
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Points de vie',
        ]);
        // Initiative
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Initiative',
        ]);
        // Concentration
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Concentration',
        ]);
        // D de manoeuvre défensive
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Manoeuvre défensive',
        ]);
        // Bonus de manoeuvre offensive
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Manoeuvre offensive',
        ]);
    }
}
