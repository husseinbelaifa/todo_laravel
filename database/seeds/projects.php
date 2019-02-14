<?php

use App\User;
use Illuminate\Database\Seeder;

class projects extends Seeder
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

       for ($i=0; $i <10 ; $i++) { 
           # code...

           array_push($data,[
               'name'=>$faker->name,
               'deadline'=>\Carbon\Carbon::now()->addDays(90),
               'user_id'=>$faker->randomElement($user)
            
           ]);

          
       }
       DB::table('projects')->insert($data);
    }
}
