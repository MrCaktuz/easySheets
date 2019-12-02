<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'users';
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

        // Add user Mucht
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Mucht',
            'email' => 'mucht@grr.la',
            'password' => '$2y$10$fAEL1TPVExRtljMebl67CuFae4JmQJ2Oyv/NDGRN..p1ky5.eaOzW',
            'avatar' => 'https://api.adorable.io/avatars/50/Mucht.png',
            'remember_token' => null,
            'created_at' => '2019-11-11 00:00:00',
            'updated_at' => '2019-11-11 00:00:00',
        ]);
        // Add user Fredus
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Fredus',
            'email' => 'fredus@grr.la',
            'password' => '$2y$10$fAEL1TPVExRtljMebl67CuFae4JmQJ2Oyv/NDGRN..p1ky5.eaOzW',
            'avatar' => 'https://api.adorable.io/avatars/50/Fredus.png',
            'remember_token' => null,
            'created_at' => '2019-11-11 00:00:00',
            'updated_at' => '2019-11-11 00:00:00',
        ]);
    }
}
