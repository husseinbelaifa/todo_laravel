<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectPolicy
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

    public function  create(User $user,Project $project)
{
    // if ($user->role==0) {
    //     return false;
    // }else return true;
}
}
