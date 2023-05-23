<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $i=0;
        while($i<3){
            $name= $faker->name;
            User::create([
               'name'=> $name,
                'email'=> $faker->email,
                'password'=>Hash::make($name)
            ]);
            $i++;
        }

    }
}
