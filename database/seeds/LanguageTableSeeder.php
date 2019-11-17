<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'language';
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

        // Abyssal (démons et autres Extérieurs d’alignement Chaotique Mauvais)
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Abyssal',
        ]);
        // Aklo (derros, monstres inhumains ou provenant d’autres mondes, fées maléfiques)
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Aklo',
        ]);
        // Aquatique (créatures aquatiques, créatures de l’Eau)
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Aquatique',
        ]);
        // Aérien (créatures volantes, créatures de l’Air)
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Aérien',
        ]);
        // Céleste (anges et autres Extérieurs d’alignement Bon)
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Céleste',
        ]);
        // Commun (humains, ainsi que les races de base)
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Commun',
        ]);
        // Commun des profondeurs (drows, duergars, morlocks, svirfneblins)
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Commun des profondeurs',
        ]);
        // Draconien (dragons et humanoïdes reptiliens)
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Draconien',
        ]);
        // Druidique (uniquement les druides)
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Druidique',
        ]);
        // Elfe (elfes)
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Elfe',
        ]);
        // Géant (cyclopes, ettins, géants, ogres, trolls)
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Géant',
        ]);
        // Gnoll (gnolls)
        DB::table($this->table)->insert([
            'id' => 12,
            'name' => 'Gnoll',
        ]);
        // Gnome (gnomes)
        DB::table($this->table)->insert([
            'id' => 13,
            'name' => 'Gnome',
        ]);
        // Gobelin (gobelins, gobelours et hobgobelins)
        DB::table($this->table)->insert([
            'id' => 14,
            'name' => 'Gobelin',
        ]);
        // Halfelin (halfelins)
        DB::table($this->table)->insert([
            'id' => 15,
            'name' => 'Halfelin',
        ]);
        // Igneux (créatures du Feu)
        DB::table($this->table)->insert([
            'id' => 16,
            'name' => 'Igneux',
        ]);
        // Infernal (diables et autres Extérieurs d’alignement Loyal Mauvais)
        DB::table($this->table)->insert([
            'id' => 17,
            'name' => 'Infernal',
        ]);
        // Nain (nains)
        DB::table($this->table)->insert([
            'id' => 18,
            'name' => 'Nain',
        ]);
        // Orque (orques, demi-orques)
        DB::table($this->table)->insert([
            'id' => 19,
            'name' => 'Orque',
        ]);
        // Sylvestre/Lashunta (centaures, créatures du type plante, fées, licornes)
        DB::table($this->table)->insert([
            'id' => 20,
            'name' => 'Sylvestre/Lashunta',
        ]);
        // Terreux (créatures de la Terre)
        DB::table($this->table)->insert([
            'id' => 21,
            'name' => 'Terreux',
        ]);
    }
}
