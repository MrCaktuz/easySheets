{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('school_id', 'School_id:') !!}
			{!! Form::text('school_id') !!}
		</li>
		<li>
			{!! Form::label('character_id', 'Character_id:') !!}
			{!! Form::text('character_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}