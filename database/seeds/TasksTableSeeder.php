<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Assignment;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task_type = ['Translates', 'Proof Reading', 'VGA'];
        for($i = 1; $i <= 50; $i++){

            $assignment = Assignment::inRandomOrder()->first();
            $user = User::inRandomOrder()->where('role', 'Translator')->first();
            $task = new Task;
            $task->acode = $assignment->acode;
            $task->task_for = $user->ucode;
            $task->task_type = $task_type[mt_rand(0, 2)];
            $task->task_started_at = date("Y-m-d H:i:s", strtotime(now().' +4 hours'));
            $task->task_completed_at = date("Y-m-d H:i:s", strtotime(now().' +8 hours'));
            $task->task_comment = 'Dummy Task Comment';
            $task->created_by = 1;  
            $task->save();
        }
    }
}
