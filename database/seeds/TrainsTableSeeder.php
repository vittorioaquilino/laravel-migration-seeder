<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $orario_partenza = [
            '2022/01/01 12:00:00',
            '2022/01/02 13:15:00',
            '2022/01/03 15.30:00',
        ];

        $orario_arrivo = [
            '2022/01/01 18:00:00',
            '2022/01/02 20:10:00',
            '2022/01/03 22:00:00',
        ];

        $azienda = [
            'Trenitalia',
            'Italo',
            'Intercity'
        ];

        $classe = [
            'Prima Classe',
            'Seconda Classe',
            'Econony'
        ];

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->Azienda = $azienda[rand(0, count($azienda) - 1)];
            $train->Stazione_di_partenza = $faker->state();
            $train->Stazione_di_arrivo = $faker->state();
            $train->Orario_di_partenza = $orario_partenza[rand(0, count($orario_partenza) - 1)];
            $train->Orario_di_arrivo = $orario_arrivo[rand(0, count($orario_arrivo) - 1)];
            $train->Codice_Treno = rand(10, 100);
            $train->Classe = $classe[rand(0, count($classe) - 1)];
            $train->Numero_Carrozze = rand(10, 50);
            $train->In_orario = rand(true, false);
            $train->Cancellato = rand(true, false);

            $train->save();
        }
    }
}
