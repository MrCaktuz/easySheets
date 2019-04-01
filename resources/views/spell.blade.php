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
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('level', 'Level:') !!}
			{!! Form::text('level') !!}
		</li>
		<li>
			{!! Form::label('school', 'School:') !!}
			{!! Form::text('school') !!}
		</li>
		<li>
			{!! Form::label('casting_time', 'Casting_time:') !!}
			{!! Form::text('casting_time') !!}
		</li>
		<li>
			{!! Form::label('range', 'Range:') !!}
			{!! Form::text('range') !!}
		</li>
		<li>
			{!! Form::label('saving_throw', 'Saving_throw:') !!}
			{!! Form::text('saving_throw') !!}
		</li>
		<li>
			{!! Form::label('compound', 'Compound:') !!}
			{!! Form::text('compound') !!}
		</li>
		<li>
			{!! Form::label('magic_resist', 'Magic_resist:') !!}
			{!! Form::text('magic_resist') !!}
		</li>
		<li>
			{!! Form::label('duration', 'Duration:') !!}
			{!! Form::text('duration') !!}
		</li>
		<li>
			{!! Form::label('zone', 'Zone:') !!}
			{!! Form::text('zone') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}