{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('stat_id', 'Stat_id:') !!}
			{!! Form::text('stat_id') !!}
		</li>
		<li>
			{!! Form::label('value', 'Value:') !!}
			{!! Form::text('value') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('situationnal', 'Situationnal:') !!}
			{!! Form::text('situationnal') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}