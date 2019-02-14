<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable=['name','deadline','status','user_id','project_id'];
}
