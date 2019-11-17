<?php

use Illuminate\Database\Seeder;

class SkillTypeTableSeeder extends Seeder
{
    public function __construct()
	{
		$this->table = 'skill_type';
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

        // Acrobaties
        DB::table($this->table)->insert([
            'id' => 1,
            'name' => 'Acrobaties',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Art de la magie
        DB::table($this->table)->insert([
            'id' => 2,
            'name' => 'Art de la magie',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Artisanat
        DB::table($this->table)->insert([
            'id' => 3,
            'name' => 'Artisanat',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Bluff
        DB::table($this->table)->insert([
            'id' => 4,
            'name' => 'Bluff',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Connaissances (exploration souterraine)
        DB::table($this->table)->insert([
            'id' => 5,
            'name' => 'Connaissances exploration souterraine',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (folklore local)
        DB::table($this->table)->insert([
            'id' => 6,
            'name' => 'Connaissances folklore local',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (géographie)
        DB::table($this->table)->insert([
            'id' => 7,
            'name' => 'Connaissances géographie',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (histoire)
        DB::table($this->table)->insert([
            'id' => 8,
            'name' => 'Connaissances histoire',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (ingénierie)
        DB::table($this->table)->insert([
            'id' => 9,
            'name' => 'Connaissances ingénierie',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (mystères)
        DB::table($this->table)->insert([
            'id' => 10,
            'name' => 'Connaissances mystères',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (nature)
        DB::table($this->table)->insert([
            'id' => 11,
            'name' => 'Connaissances nature',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (noblesse)
        DB::table($this->table)->insert([
            'id' => 12,
            'name' => 'Connaissances noblesse',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Connaissances (religion)
        DB::table($this->table)->insert([
            'id' => 13,
            'name' => 'Connaissances religion',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Déguisement
        DB::table($this->table)->insert([
            'id' => 14,
            'name' => 'Déguisement',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Diplomatie
        DB::table($this->table)->insert([
            'id' => 15,
            'name' => 'Diplomatie',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Discrétion
        DB::table($this->table)->insert([
            'id' => 16,
            'name' => 'Discrétion',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Dressage
        DB::table($this->table)->insert([
            'id' => 17,
            'name' => 'Dressage',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Équitation
        DB::table($this->table)->insert([
            'id' => 18,
            'name' => 'Équitation',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Escalade
        DB::table($this->table)->insert([
            'id' => 19,
            'name' => 'Escalade',
            'armor_penalty' => 1,
            'attribute_type_id' => 1, // For
        ]);
        // Escamotage
        DB::table($this->table)->insert([
            'id' => 20,
            'name' => 'Escamotage',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Estimation
        DB::table($this->table)->insert([
            'id' => 21,
            'name' => 'Estimation',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Évasion
        DB::table($this->table)->insert([
            'id' => 22,
            'name' => 'Évasion',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Intimidation
        DB::table($this->table)->insert([
            'id' => 23,
            'name' => 'Intimidation',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Linguistique
        DB::table($this->table)->insert([
            'id' =>24,
            'name' => 'Linguistique',
            'armor_penalty' => 0,
            'attribute_type_id' => 4, // Int
        ]);
        // Natation
        DB::table($this->table)->insert([
            'id' => 25,
            'name' => 'Natation',
            'armor_penalty' => 1,
            'attribute_type_id' => 1, // For
        ]);
        // Perception
        DB::table($this->table)->insert([
            'id' => 26,
            'name' => 'Perception',
            'armor_penalty' => 0,
            'attribute_type_id' => 5, // Sag
        ]);
        // Premiers secours
        DB::table($this->table)->insert([
            'id' => 27,
            'name' => 'Premiers secours',
            'armor_penalty' => 0,
            'attribute_type_id' => 5, // Sag
        ]);
        // Profession
        DB::table($this->table)->insert([
            'id' => 28,
            'name' => 'Profession',
            'armor_penalty' => 0,
            'attribute_type_id' => 5, // Sag
        ]);
        // Psychologie
        DB::table($this->table)->insert([
            'id' => 29,
            'name' => 'Psychologie',
            'armor_penalty' => 0,
            'attribute_type_id' => 5, // Sag
        ]); 
        // Représentation
        DB::table($this->table)->insert([
            'id' => 30,
            'name' => 'Représentation',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Sabotage
        DB::table($this->table)->insert([
            'id' => 31,
            'name' => 'Sabotage',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
        // Survie
        DB::table($this->table)->insert([
            'id' => 32,
            'name' => 'Survie',
            'armor_penalty' => 0,
            'attribute_type_id' => 5, // Sag
        ]);
        // Utilisation d'objets magiques
        DB::table($this->table)->insert([
            'id' => 33,
            'name' => 'Utilisation d\'objets magiques',
            'armor_penalty' => 0,
            'attribute_type_id' => 6, // Cha
        ]);
        // Vol
        DB::table($this->table)->insert([
            'id' => 34,
            'name' => 'Vol',
            'armor_penalty' => 1,
            'attribute_type_id' => 2, // Dex
        ]);
    }
}
