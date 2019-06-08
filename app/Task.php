<?php

namespace App;

use App\User;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable=['name','deadline','status','user_id','project_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
