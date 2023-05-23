<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator;
use App\Models\Etudiant;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        //

        $i=0;
        while($i<10){
                Etudiant::create([
                        'nom'=>$faker->sentence(1),
                        'prenom'=>$faker->sentence(1),
                        'sexe'=>$faker->randomElements(['Male','Female'])[0],
                        'filiere_id'=>random_int(1,10),

                ]);
            $i++;
        }
    }
}
