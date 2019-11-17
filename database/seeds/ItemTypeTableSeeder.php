<?php

use Illuminate\Database\Seeder;

class ItemTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'item_type';
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
            'name' => 'Réutilisable',
        ]);
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Consommable',
        ]);
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'À vendre',
        ]);
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Artisanat',
        ]);
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Autre',
        ]);
    }
}
