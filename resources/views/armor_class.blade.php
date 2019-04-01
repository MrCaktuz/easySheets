{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('natural', 'Natural:') !!}
			{!! Form::text('natural') !!}
		</li>
		<li>
			{!! Form::label('parry', 'Parry:') !!}
			{!! Form::text('parry') !!}
		</li>
		<li>
			{!! Form::label('dodge', 'Dodge:') !!}
			{!! Form::text('dodge') !!}
		</li>
		<li>
			{!! Form::label('size', 'Size:') !!}
			{!! Form::text('size') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}