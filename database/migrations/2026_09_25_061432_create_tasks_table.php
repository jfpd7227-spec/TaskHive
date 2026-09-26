Schema::create('tasks', function (Blueprint $table) {
        $table->id();
            $table->string('task_name');
                $table->text('description')->nullable();
                    $table->string('status')->default('Pending'); // Pending or Completed
                        $table->timestamps();
                        });
})