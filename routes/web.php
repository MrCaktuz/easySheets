<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');
Route::resource('character', 'CharacterController');
Route::resource('class', 'ClassController');
Route::resource('character_class', 'Character_ClassController');
Route::resource('character_lineage', 'Character_LineageController');
Route::resource('domain', 'DomainController');
Route::resource('character_domain', 'Character_DomainController');
Route::resource('school', 'SchoolController');
Route::resource('character_school', 'Character_SchoolController');
Route::resource('race', 'RaceController');
Route::resource('alignment', 'AlignmentController');
Route::resource('exploration', 'ExplorationController');
Route::resource('progression', 'ProgressionController');
Route::resource('lineage', 'LineageController');
Route::resource('terrain', 'TerrainController');
Route::resource('character_terrain', 'Character_TerrainController');
Route::resource('language', 'LanguageController');
Route::resource('character_language', 'Character_LanguageController');
Route::resource('character_martialskill', 'Character_MartialSkillController');
Route::resource('character_skill', 'Character_SkillController');
Route::resource('martialskill', 'MartialSkillController');
Route::resource('skill', 'SkillController');
Route::resource('item', 'ItemController');
Route::resource('combat', 'CombatController');
Route::resource('stat', 'StatController');
Route::resource('bonus', 'BonusController');
Route::resource('armorclass', 'ArmorClassController');
Route::resource('weapon', 'WeaponController');
Route::resource('spell', 'SpellController');
Route::resource('magicstat', 'MagicStatController');
Route::resource('skilltype', 'skillTypeController');
Route::resource('ability', 'AbilityController');
