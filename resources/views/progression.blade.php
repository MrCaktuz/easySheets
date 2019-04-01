{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('level', 'Level:') !!}
			{!! Form::text('level') !!}
		</li>
		<li>
			{!! Form::label('experience', 'Experience:') !!}
			{!! Form::text('experience') !!}
		</li>
		<li>
			{!! Form::label('experience_curve', 'Experience_curve:') !!}
			{!! Form::text('experience_curve') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}