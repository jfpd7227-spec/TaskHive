<!DOCTYPE html>
<html><head><title>TaskHive</title>
<style>body{font-family:sans-serif;background:#fffbe6;padding:20px}.card{background:#fff;padding:12px;border-radius:8px;margin:8px 0}.completed{text-decoration:line-through;color:green}.btn{padding:5px 10px;border:none;border-radius:5px}</style>
</head><body>
<h1>🐝 TaskHive</h1>

{{-- ADD TASK --}}
<form method="POST" action="{{ route('tasks.store') }}">@csrf
<input name="name" placeholder="Task name" required>
<input name="description" placeholder="Description">
<button class="btn" style="background:gold">Add Task</button>
</form>

<hr>
{{-- VIEW TASKS --}}
@foreach($tasks as $task)
<div class="card">
<b class="{{ $task->status=='Completed'?'completed':'' }}">{{ $task->task_name }}</b> [{{ $task->status }}]<br>
<small>{{ $task->description }}</small><br><br>

{{-- UPDATE STATUS --}}
<form style="display:inline" method="POST" action="{{ route('tasks.status',$task) }}">@csrf @method('PATCH')
<button class="btn" style="background:#90ee90">{{ $task->status=='Pending'?'Mark Completed':'Mark Pending' }}</button>
</form>

{{-- EDIT TASK --}}
<a href="{{ route('tasks.edit',$task) }}"><button class="btn" style="background:#87ceeb">Edit</button></a>

{{-- DELETE TASK --}}
<form style="display:inline" method="POST" action="{{ route('tasks.destroy',$task) }}">@csrf @method('DELETE')
<button class="btn" style="background:#ff7f7f">Delete</button>
</form>
</div>
@endforeach
</body></html>