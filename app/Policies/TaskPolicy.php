<?php

namespace App\Policies;

use App\User;
use App\Task;

use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

   public function destroy(User $user, Task $task)

   {

    return $use->id === $task->user_id;


   }
}
