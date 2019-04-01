{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('base', 'Base:') !!}
			{!! Form::text('base') !!}
		</li>
		<li>
			{!! Form::label('linked_stat_id', 'Linked_stat_id:') !!}
			{!! Form::text('linked_stat_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}