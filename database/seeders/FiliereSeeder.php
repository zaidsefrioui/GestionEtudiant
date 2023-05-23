<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Models\Filiere;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Generator $faker): void
    {
        //

        $i=0;
        while($i<10){
                Filiere::create([
                        'nom'=>$faker->sentence(1)
                ]);
            $i++;
        }

       
    }
}
