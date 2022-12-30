<?php

namespace Database\Seeders;

use App\Models\PartProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartProvider::create([
            "name_geo" => "ავანგარდი",
            "name_eng" => "Avangard"
        ]);

        PartProvider::create([
            "name_geo" => "ნიუ მოტორსი",
            "name_eng" => "New Motors"
        ]);

        PartProvider::create([
            "name_geo" => "სენა მოტორსი",
            "name_eng" => "Sena Motors"
        ]);
    }
}
