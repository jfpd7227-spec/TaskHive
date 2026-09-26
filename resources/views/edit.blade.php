<h2>Edit Task</h2>
<form method="POST" action="{{ route('tasks.update',$task) }}">@csrf @method('PUT')
<input name="name" value="{{ $task->task_name }}" required><br><br>
<input name="description" value="{{ $task->description }}"><br><br>
<select name="status">
<option {{ $task->status=='Pending'?'selected':'' }}>Pending</option>
<option {{ $task->status=='Completed'?'selected':'' }}>Completed</option>
</select><br><br>
<button>Update Task</button>
</form>