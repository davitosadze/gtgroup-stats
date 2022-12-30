<?php

namespace Database\Seeders;

use App\Models\Excavator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExcavatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excavator::create([
            "name_eng" => "SUMITOMO",
            "name_geo" => "სუმიტომო"
        ]);

        Excavator::create([
            "name_eng" => "KOMATSU",
            "name_geo" => "კომაცუ"
        ]);
    }
}
