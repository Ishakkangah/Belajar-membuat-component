<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $User, Task $Task)
    {
        return $User->id === $Task->user_id;
    }

    public function delete(User $User, Task $Task )
    {
        return $User->id ===  $Task->user_id;
    }

}
