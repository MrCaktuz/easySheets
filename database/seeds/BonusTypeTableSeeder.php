<?php

use Illuminate\Database\Seeder;

class BonusTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'bonus_type';
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

        // bonus types for Attributes
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'attribute',
        ]);

        // bonus types for Saving throws
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'saving_throws',
        ]);

        // bonus types for Weapons
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'weapon_touch',
        ]);
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'weapon_damage',
        ]);

        // bonu type for Skills
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'skill',
        ]);

        // bonus types for Resistances
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'resistance',
        ]);

        // bonus types for Magic Stat
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'magic_stat_known',
        ]);
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'magic_stat_daily',
        ]);
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'magic_stat_difficulty',
        ]);

        // bonus types for Basic Combat Stats
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'basic_combat_stat',
        ]);
    }
}
