{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('class_id', 'Class_id:') !!}
			{!! Form::text('class_id') !!}
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