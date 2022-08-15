<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use  Faker\Factory as Faker;
use Illuminate\Support\str;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,90) as $val){
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail(),
                'password'=>Hash::make($faker->password()),
            ]);
        }
       
    }
}
