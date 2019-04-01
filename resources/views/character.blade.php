{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('race_id', 'Race_id:') !!}
			{!! Form::text('race_id') !!}
		</li>
		<li>
			{!! Form::label('predilection_class_id', 'Predilection_class_id:') !!}
			{!! Form::text('predilection_class_id') !!}
		</li>
		<li>
			{!! Form::label('alignment_id', 'Alignment_id:') !!}
			{!! Form::text('alignment_id') !!}
		</li>
		<li>
			{!! Form::label('religion', 'Religion:') !!}
			{!! Form::text('religion') !!}
		</li>
		<li>
			{!! Form::label('age', 'Age:') !!}
			{!! Form::text('age') !!}
		</li>
		<li>
			{!! Form::label('height', 'Height:') !!}
			{!! Form::text('height') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::label('gender', 'Gender:') !!}
			{!! Form::text('gender') !!}
		</li>
		<li>
			{!! Form::label('origin_location', 'Origin_location:') !!}
			{!! Form::text('origin_location') !!}
		</li>
		<li>
			{!! Form::label('heir', 'Heir:') !!}
			{!! Form::text('heir') !!}
		</li>
		<li>
			{!! Form::label('eyes', 'Eyes:') !!}
			{!! Form::text('eyes') !!}
		</li>
		<li>
			{!! Form::label('skin', 'Skin:') !!}
			{!! Form::text('skin') !!}
		</li>
		<li>
			{!! Form::label('strong_hand', 'Strong_hand:') !!}
			{!! Form::text('strong_hand') !!}
		</li>
		<li>
			{!! Form::label('personality', 'Personality:') !!}
			{!! Form::text('personality') !!}
		</li>
		<li>
			{!! Form::label('goal', 'Goal:') !!}
			{!! Form::text('goal') !!}
		</li>
		<li>
			{!! Form::label('background', 'Background:') !!}
			{!! Form::text('background') !!}
		</li>
		<li>
			{!! Form::label('exploration_id', 'Exploration_id:') !!}
			{!! Form::text('exploration_id') !!}
		</li>
		<li>
			{!! Form::label('progression_id', 'Progression_id:') !!}
			{!! Form::text('progression_id') !!}
		</li>
		<li>
			{!! Form::label('combat_id', 'Combat_id:') !!}
			{!! Form::text('combat_id') !!}
		</li>
		<li>
			{!! Form::label('middle_load', 'Middle_load:') !!}
			{!! Form::text('middle_load') !!}
		</li>
		<li>
			{!! Form::label('havy_load', 'Havy_load:') !!}
			{!! Form::text('havy_load') !!}
		</li>
		<li>
			{!! Form::label('max_load', 'Max_load:') !!}
			{!! Form::text('max_load') !!}
		</li>
		<li>
			{!! Form::label('wealth', 'Wealth:') !!}
			{!! Form::text('wealth') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}