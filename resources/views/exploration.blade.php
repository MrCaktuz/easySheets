{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('walking', 'Walking:') !!}
			{!! Form::text('walking') !!}
		</li>
		<li>
			{!! Form::label('swimming', 'Swimming:') !!}
			{!! Form::text('swimming') !!}
		</li>
		<li>
			{!! Form::label('flying', 'Flying:') !!}
			{!! Form::text('flying') !!}
		</li>
		<li>
			{!! Form::label('night_vision', 'Night_vision:') !!}
			{!! Form::text('night_vision') !!}
		</li>
		<li>
			{!! Form::label('dark-vision', 'Dark-vision:') !!}
			{!! Form::text('dark-vision') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}