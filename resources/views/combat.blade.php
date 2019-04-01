{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('character_id', 'Character_id:') !!}
			{!! Form::text('character_id') !!}
		</li>
		<li>
			{!! Form::label('strength_id', 'Strength_id:') !!}
			{!! Form::text('strength_id') !!}
		</li>
		<li>
			{!! Form::label('dexterity_id', 'Dexterity_id:') !!}
			{!! Form::text('dexterity_id') !!}
		</li>
		<li>
			{!! Form::label('intelligence_id', 'Intelligence_id:') !!}
			{!! Form::text('intelligence_id') !!}
		</li>
		<li>
			{!! Form::label('wisdom_id', 'Wisdom_id:') !!}
			{!! Form::text('wisdom_id') !!}
		</li>
		<li>
			{!! Form::label('luck_id', 'Luck_id:') !!}
			{!! Form::text('luck_id') !!}
		</li>
		<li>
			{!! Form::label('constitution_id', 'Constitution_id:') !!}
			{!! Form::text('constitution_id') !!}
		</li>
		<li>
			{!! Form::label('health_id', 'Health_id:') !!}
			{!! Form::text('health_id') !!}
		</li>
		<li>
			{!! Form::label('initiative_id', 'Initiative_id:') !!}
			{!! Form::text('initiative_id') !!}
		</li>
		<li>
			{!! Form::label('reflexe_id', 'Reflexe_id:') !!}
			{!! Form::text('reflexe_id') !!}
		</li>
		<li>
			{!! Form::label('fortitude_id', 'Fortitude_id:') !!}
			{!! Form::text('fortitude_id') !!}
		</li>
		<li>
			{!! Form::label('will_id', 'Will_id:') !!}
			{!! Form::text('will_id') !!}
		</li>
		<li>
			{!! Form::label('resist_damage_id', 'Resist_damage_id:') !!}
			{!! Form::text('resist_damage_id') !!}
		</li>
		<li>
			{!! Form::label('resist_acid_id', 'Resist_acid_id:') !!}
			{!! Form::text('resist_acid_id') !!}
		</li>
		<li>
			{!! Form::label('resist_fire_id', 'Resist_fire_id:') !!}
			{!! Form::text('resist_fire_id') !!}
		</li>
		<li>
			{!! Form::label('resist_thunder_id', 'Resist_thunder_id:') !!}
			{!! Form::text('resist_thunder_id') !!}
		</li>
		<li>
			{!! Form::label('resist_cold_id', 'Resist_cold_id:') !!}
			{!! Form::text('resist_cold_id') !!}
		</li>
		<li>
			{!! Form::label('resist_sound_id', 'Resist_sound_id:') !!}
			{!! Form::text('resist_sound_id') !!}
		</li>
		<li>
			{!! Form::label('resist_magic_id', 'Resist_magic_id:') !!}
			{!! Form::text('resist_magic_id') !!}
		</li>
		<li>
			{!! Form::label('bba_1', 'Bba_1:') !!}
			{!! Form::text('bba_1') !!}
		</li>
		<li>
			{!! Form::label('bba_2', 'Bba_2:') !!}
			{!! Form::text('bba_2') !!}
		</li>
		<li>
			{!! Form::label('bba_3', 'Bba_3:') !!}
			{!! Form::text('bba_3') !!}
		</li>
		<li>
			{!! Form::label('bba_4', 'Bba_4:') !!}
			{!! Form::text('bba_4') !!}
		</li>
		<li>
			{!! Form::label('melee_touch_id', 'Melee_touch_id:') !!}
			{!! Form::text('melee_touch_id') !!}
		</li>
		<li>
			{!! Form::label('range_touch_id', 'Range_touch_id:') !!}
			{!! Form::text('range_touch_id') !!}
		</li>
		<li>
			{!! Form::label('cmb_id', 'Cmb_id:') !!}
			{!! Form::text('cmb_id') !!}
		</li>
		<li>
			{!! Form::label('cmd_id', 'Cmd_id:') !!}
			{!! Form::text('cmd_id') !!}
		</li>
		<li>
			{!! Form::label('armor_class_id', 'Armor_class_id:') !!}
			{!! Form::text('armor_class_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}