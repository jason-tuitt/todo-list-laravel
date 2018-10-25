@extends('template')

@section('addtask')
	<div>
		<form method="POST" action="/tasks"enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
		   		<label for="exampleInputEmail1">Add new task</label>
		    	<input type="text" name="task" class="form-control" id="newtask"  placeholder="Enter a new task">
	  		</div>
	  		<button type="submit" class="btn btn-outline-primary">
	  			Add task
	  		</button>
		</form>
	</div>
@endsection
	
	<style type="text/css">
		.list-task {
			display: flex;
			padding:10px;
			justify-content: flex-start;
			align-items: flex-start;
			flex-wrap: wrap;
		}

		.task-card-container {
			height: 200px;
			/*max-height: 160px;*/
			width:25%;
			padding: 5px; 
			margin-bottom: 10px;
		}
		.card {
			width: 100%;
		}
		.btn-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.btn-container button {
			font-size: 12px;
			margin:5px !important;
		}

	</style>

@section('listoftask')
	<div class="list-task">
		@foreach($tasks as $t)
			<div class="task-card-container">
				<div class="card">
				  <div class="card-body">
				    <p class="card-text">{{ $t->task }}</p>
				    <div class="btn-container">
				    	<form>
					    	<button type="button" class="card-link btn btn-outline-primary">Mark as completed</button>
				    	</form>
				    	<form>
						    <button type="button" class="card-link btn btn-outline-danger">Delete</button>
					    </form>
				    </div>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection