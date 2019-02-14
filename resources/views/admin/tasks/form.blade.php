<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'name') !!}
		
				{!! Form::myInput('date', 'deadline', 'deadline') !!}
		
				{!! Form::mySelect('status', 'status',[0,1], null, ['class' => 'form-control select2']) !!}

				{!! Form::mySelect('project_id', 'project_id',\App\project::pluck('id'), null, ['class' => 'form-control select2']) !!}
				{!! Form::mySelect('task_id', 'task_id',\App\Task::pluck('id'), null, ['class' => 'form-control select2']) !!}
				{!! Form::mySelect('user_id', 'user_id',\App\User::pluck('id'), null, ['class' => 'form-control select2']) !!}

		
		</div>  
	</div>
</div>