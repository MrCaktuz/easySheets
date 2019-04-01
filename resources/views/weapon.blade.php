{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('character_id', 'Character_id:') !!}
			{!! Form::text('character_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('alteration_bonus', 'Alteration_bonus:') !!}
			{!! Form::text('alteration_bonus') !!}
		</li>
		<li>
			{!! Form::label('critical', 'Critical:') !!}
			{!! Form::text('critical') !!}
		</li>
		<li>
			{!! Form::label('range', 'Range:') !!}
			{!! Form::text('range') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('touch_bonus_id', 'Touch_bonus_id:') !!}
			{!! Form::text('touch_bonus_id') !!}
		</li>
		<li>
			{!! Form::label('damage_bonus_id', 'Damage_bonus_id:') !!}
			{!! Form::text('damage_bonus_id') !!}
		</li>
		<li>
			{!! Form::label('damage_dice', 'Damage_dice:') !!}
			{!! Form::text('damage_dice') !!}
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