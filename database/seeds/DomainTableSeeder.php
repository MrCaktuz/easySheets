<?php

use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'domain';
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

        // Domaine de l'Air
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Air',
        ]);
        // Domaine de l'Artisanat
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Artisanat',
        ]);
        // Domaine du Bien
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Bien',
        ]);
        // Domaine de la Chance
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Chance',
        ]);
        // Domaine du Chaos
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Choas',
        ]);
        // Domaine du Charme
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Charme',
        ]);
        // Domaine du Climat
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Climat',
        ]);
        // Domaine de la Communauté
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Communauté',
        ]);
        // Domaine de la Connaissance
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Connaissance',
        ]);
        // Domaine de la Destruction
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Destruction',
        ]);
        // Domaine de la Duperie
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Duperie',
        ]);
        // Domaine de l'Eau
        DB::table($this->table)->insert([
            'id' => 12,
            'name' => 'Eau',
        ]);
        // Domaine de la Faune
        DB::table($this->table)->insert([
            'id' => 13,
            'name' => 'Faune',
        ]);
        // Domaine du Feu
        DB::table($this->table)->insert([
            'id' => 14,
            'name' => 'Feu',
        ]);
        // Domaine de la Flore
        DB::table($this->table)->insert([
            'id' => 15,
            'name' => 'Flore',
        ]);
        // Domaine de la Folie
        DB::table($this->table)->insert([
            'id' => 16,
            'name' => 'Folie',
        ]);
        // Domaine de la Force
        DB::table($this->table)->insert([
            'id' => 17,
            'name' => 'Force',
        ]);
        // Domaine de la Gloire
        DB::table($this->table)->insert([
            'id' => 18,
            'name' => 'Gloire',
        ]);
        // Domaine de la Guérison
        DB::table($this->table)->insert([
            'id' => 19,
            'name' => 'Guérison',
        ]);
        // Domaine de la Guerre
        DB::table($this->table)->insert([
            'id' => 20,
            'name' => 'Guerre',
        ]);
        // Domaine de la Libération
        DB::table($this->table)->insert([
            'id' => 21,
            'name' => 'Libération',
        ]);
        // Domaine de la Loi
        DB::table($this->table)->insert([
            'id' => 22,
            'name' => 'Loi',
        ]);
        // Domaine de la Magie
        DB::table($this->table)->insert([
            'id' => 23,
            'name' => 'Magie',
        ]);
        // Domaine du Mal
        DB::table($this->table)->insert([
            'id' => 24,
            'name' => 'Mal',
        ]);
        // Domaine de la Mort
        DB::table($this->table)->insert([
            'id' => 25,
            'name' => 'Mort',
        ]);
        // Domaine de la Noblesse
        DB::table($this->table)->insert([
            'id' => 26,
            'name' => 'Noblesse',
        ]);
        // Domaine de l'Obscurité
        DB::table($this->table)->insert([
            'id' => 27,
            'name' => 'Obscurité',
        ]);
        // Domaine de la Protection
        DB::table($this->table)->insert([
            'id' => 28,
            'name' => 'Protection',
        ]);
        // Domaine du Repos
        DB::table($this->table)->insert([
            'id' => 29,
            'name' => 'Repos',
        ]);
        // Domaine des Reptiles
        DB::table($this->table)->insert([
            'id' => 30,
            'name' => 'Reptiles',
        ]);
        // Domaine des Runes
        DB::table($this->table)->insert([
            'id' => 31,
            'name' => 'Runes',
        ]);
        // Domaine du Soleil
        DB::table($this->table)->insert([
            'id' => 32,
            'name' => 'Soleil',
        ]);
        // Domaine de la Terre
        DB::table($this->table)->insert([
            'id' => 33,
            'name' => 'Terre',
        ]);
        // Domaine du Vide
        DB::table($this->table)->insert([
            'id' => 34,
            'name' => 'Vide',
        ]);
        // Domaine du Voyage
        DB::table($this->table)->insert([
            'id' => 35,
            'name' => 'Voyage',
        ]);
    }
}
