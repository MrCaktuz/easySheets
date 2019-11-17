<?php

use Illuminate\Database\Seeder;

class BloodlineTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'bloodline';
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

        // Aberrant
        DB::table($this->table)->insert(
            [
                'id' => 1,
                'name' => 'Aberrant',
            ]
        );
        // Abyssal
        DB::table($this->table)->insert(
            [
                'id' => 2,
                'name' => 'Abyssal',
            ]
        );
        // Aquatique (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 3,
                'name' => 'Aquatique',
            ]
        );
        // Boréal (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 4,
                'name' => 'Boréal',
            ]
        );
        // Céleste
        DB::table($this->table)->insert(
            [
                'id' => 5,
                'name' => 'Céleste',
            ]
        );
        // Daémon (BofF)
        DB::table($this->table)->insert(
            [
                'id' => 6,
                'name' => 'Daémon',
            ]
        );
        // Div (AM)
        DB::table($this->table)->insert(
            [
                'id' => 7,
                'name' => 'Div',
            ]
        );
        // Djinn (AM)
        DB::table($this->table)->insert(
            [
                'id' => 8,
                'name' => 'Djinn',
            ]
        );
        // Draconique
        DB::table($this->table)->insert(
            [
                'id' => 9,
                'name' => 'Draconique',
            ]
        );
        // Ectoplasmique (AO)
        DB::table($this->table)->insert(
            [
                'id' => 10,
                'name' => 'Ectoplasmique',
            ]
        );
        // Éfrit (AM)
        DB::table($this->table)->insert(
            [
                'id' => 11,
                'name' => 'Éfrit',
            ]
        );
        // Élémentaire
        DB::table($this->table)->insert(
            [
                'id' => 12,
                'name' => 'Élémentaire',
            ]
        );
        // Étoiles (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 13,
                'name' => 'Étoiles',
            ]
        );
        // Féerique
        DB::table($this->table)->insert(
            [
                'id' => 14,
                'name' => 'Féerique',
            ]
        );
        // Goule (CM)
        DB::table($this->table)->insert(
            [
                'id' => 15,
                'name' => 'Goule',
            ]
        );
        // Impérieux (MR)
        DB::table($this->table)->insert(
            [
                'id' => 16,
                'name' => 'Impérieux',
            ]
        );
        // Impossible (CofB)
        DB::table($this->table)->insert(
            [
                'id' => 17,
                'name' => 'Impossible',
            ]
        );
        // Infernal
        DB::table($this->table)->insert(
            [
                'id' => 18,
                'name' => 'Infernal',
            ]
        );
        // Maestro (AM)
        DB::table($this->table)->insert(
            [
                'id' => 19,
                'name' => 'Maestro',
            ]
        );
        // Marid (AM)
        DB::table($this->table)->insert(
            [
                'id' => 20,
                'name' => 'Marid',
            ]
        );
        // Martyre (BoA)
        DB::table($this->table)->insert(
            [
                'id' => 21,
                'name' => 'Martyre',
            ]
        );
        // Maudit (AM)
        DB::table($this->table)->insert(
            [
                'id' => 22,
                'name' => 'Maudit',
            ]
        );
        // Mort-vivant
        DB::table($this->table)->insert(
            [
                'id' => 23,
                'name' => 'Mort-vivant',
            ]
        );
        // Profane
        DB::table($this->table)->insert(
            [
                'id' => 24,
                'name' => 'Profane',
            ]
        );
        // Ombres (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 25,
                'name' => 'Ombres',
            ]
        );
        // Oni (DEP)
        DB::table($this->table)->insert(
            [
                'id' => 26,
                'name' => 'Oni',
            ]
        );
        // Onirique (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 27,
                'name' => 'Onirique',
            ]
        );
        // Orque (PFC)
        DB::table($this->table)->insert(
            [
                'id' => 28,
                'name' => 'Orque',
            ]
        );
        // Profondeurs (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 29,
                'name' => 'Profondeurs',
            ]
        );
        // Protéen (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 30,
                'name' => 'Protéen',
            ]
        );
        // Psychique (AO)
        DB::table($this->table)->insert(
            [
                'id' => 31,
                'name' => 'Psychique',
            ]
        );
        // Shaitan (AM)
        DB::table($this->table)->insert(
            [
                'id' => 32,
                'name' => 'Shaitan',
            ]
        );
        // Serpentin (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 33,
                'name' => 'Serpentin',
            ]
        );
        // Tempêtes (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 34,
                'name' => 'Tempêtes',
            ]
        );
        // Verdoyant (MJRA)
        DB::table($this->table)->insert(
            [
                'id' => 35,
                'name' => 'Verdoyant',
            ]
        );
        // Voué à un grand destin
        DB::table($this->table)->insert(
            [
                'id' => 36,
                'name' => 'Voué à un grand desti',
            ]
        );
        // Pestilence*
        DB::table($this->table)->insert(
            [
                'id' => 37,
                'name' => 'Pestilence',
            ]
        );
        // Rakshasa (AM)*
        DB::table($this->table)->insert(
            [
                'id' => 38,
                'name' => 'Rakshasa',
            ]
        );
    }
}
