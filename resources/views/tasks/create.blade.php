<!DOCTYPE html>
<html>
<head><title>Add Task - TaskHive</title>
<style>
body{font-family:Inter,sans-serif;background:#fef3c7;padding:40px;max-width:600px;margin:0 auto}
.card{background:white;padding:24px;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06)}
input, textarea{width:100%;padding:12px;border-radius:10px;border:1px solid #fde68a;margin-top:8px;background:#fefce8}
button{background:#422006;color:#facc15;border:none;padding:12px 20px;border-radius:10px;font-weight:700;cursor:pointer;margin-top:16px;width:100%}
a{color:#854d0e;text-decoration:none;font-size:14px}
</style>
</head>
<body>
<a href="/">← Back to Hive</a>
<div class="card" style="margin-top:16px">
<h2 style="color:#422006">Add to Hive 🐝</h2>
<form action="/tasks" method="POST" style="margin-top:16px">
@csrf
<label>Task Name</label>
<input type="text" name="name" placeholder="Ex: Design homepage" required>
<label style="margin-top:12px;display:block">Description</label>
<textarea name="description" placeholder="Add details..."></textarea>
<button type="submit">+ Add to Hive</button>
</form>
</div>
</body>
</html>