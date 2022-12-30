<?php

namespace Database\Seeders;

use App\Models\PersonalCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalCar::create([
            "name" => "ფორდი ყვითელი"
        ]);

        PersonalCar::create([
            "name" => "ფორდი წითელი"
        ]);

        PersonalCar::create([
            "name" => "ნისანი (ბენზინი)"
        ]);

        PersonalCar::create([
            "name" => "მერსედესი"
        ]);
    }
}
