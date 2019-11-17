<?php

use Illuminate\Database\Seeder;

class AttributeTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'attribute_type';
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

        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Force',
        ]);
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Dextérité',
        ]);
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Constitution',
        ]);
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Intelligence',
        ]);
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Sagesse',
        ]);
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Charisme',
        ]);
    }
}
