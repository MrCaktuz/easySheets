{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('character_id', 'Character_id:') !!}
			{!! Form::text('character_id') !!}
		</li>
		<li>
			{!! Form::label('level', 'Level:') !!}
			{!! Form::text('level') !!}
		</li>
		<li>
			{!! Form::label('known_id', 'Known_id:') !!}
			{!! Form::text('known_id') !!}
		</li>
		<li>
			{!! Form::label('daily_id', 'Daily_id:') !!}
			{!! Form::text('daily_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}