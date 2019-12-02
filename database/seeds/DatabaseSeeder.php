<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // disable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Constants
        $this->call(AbilityTypeTableSeeder::class);
        $this->call(AlignmentTableSeeder::class);
        $this->call(AttributeTypeTableSeeder::class);
        $this->call(BasicCombatStatTypeTableSeeder::class);
        $this->call(BloodlineTableSeeder::class);
        $this->call(BonusTypeTableSeeder::class);
        $this->call(CharacterClassTableSeeder::class);
        $this->call(DomainTableSeeder::class);
        $this->call(GroundTableSeeder::class);
        $this->call(ItemTypeTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(ResistanceTypeTableSeeder::class);
        $this->call(SavingThrowsTypeTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(SkillTypeTableSeeder::class);
        // Development
        $this->call(UsersTableSeeder::class);

        // enable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
