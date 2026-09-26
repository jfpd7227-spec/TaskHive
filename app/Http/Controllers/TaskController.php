<?php
namespace App\Http\Controllers;
                                                use App\Models\Task;
                                                use Illuminate\Http\Request;
                                                class TaskController extends Controller
                                                {
                                                    // View Tasks
                                                        public function index(){ $tasks = Task::latest()->get(); return view('index', compact('tasks')); }
                                                            // Add Task
                                                                public function store(Request $request){ 
                                                                        Task::create(['task_name'=>$request->name,'description'=>$request->description,'status'=>'Pending']); 
                                                                                return redirect('/'); 
                                                                                    }
                                                                                        // Edit Task - show form
                                                                                            public function edit(Task $task){ return view('edit', compact('task')); }
                                                                                                // Edit Task - update
                                                                                                    public function update(Request $request, Task $task){ 
                                                                                                            $task->update(['task_name'=>$request->name,'description'=>$request->description,'status'=>$request->status]); 
                                                                                                                    return redirect('/'); 
                                                                                                                        }
                                                                                                                            // Delete Task
                                                                                                                                public function destroy(Task $task){ $task->delete(); return redirect('/'); }
                                                                                                                                    // Update Status
                                                                                                                                        public function toggleStatus(Task $task){ 
                                                                                                                                                $task->update(['status'=>$task->status=='Pending'?'Completed':'Pending']); 
                                                                                                                                                        return redirect('/'); 
                                                                                                                                                            }
                                                                                                                                                            }