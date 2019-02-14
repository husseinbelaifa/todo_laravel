<?php

use App\User;
use App\Project;
use Illuminate\Database\Seeder;

class tasks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker\Factory::create();



        $data=[];
        $user=User::pluck('id')->toArray();
        $project=Project::pluck('id')->toArray();

       for ($i=0; $i <10 ; $i++) { 
           # code...

           array_push($data,[
               'name'=>$faker->name,
               'deadline'=>\Carbon\Carbon::now()->addDays(90),
               'status'=>$faker->boolean,
               'user_id'=>$faker->randomElement($user),
               'project_id'=>$faker->randomElement($project)
            
           ]);

          
       }
       DB::table('tasks')->insert($data);
    }
}
