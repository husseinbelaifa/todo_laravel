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

    public function  create(User $user)
{
    if ($user->role==1) {
        return true;
    }else return false;
}
}
