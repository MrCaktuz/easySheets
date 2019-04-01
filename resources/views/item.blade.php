{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('character_id', 'Character_id:') !!}
			{!! Form::text('character_id') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('armor_bonus', 'Armor_bonus:') !!}
			{!! Form::text('armor_bonus') !!}
		</li>
		<li>
			{!! Form::label('skill_penalty', 'Skill_penalty:') !!}
			{!! Form::text('skill_penalty') !!}
		</li>
		<li>
			{!! Form::label('max_dexterity', 'Max_dexterity:') !!}
			{!! Form::text('max_dexterity') !!}
		</li>
		<li>
			{!! Form::label('spell_penalty', 'Spell_penalty:') !!}
			{!! Form::text('spell_penalty') !!}
		</li>
		<li>
			{!! Form::label('equiped', 'Equiped:') !!}
			{!! Form::text('equiped') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}