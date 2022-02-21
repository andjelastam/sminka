<?php

namespace Database\Seeders;

use App\Models\Sminker;
use Illuminate\Database\Seeder;

class SminkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sminker::create([
            "studio"=>"Vanity",
            "ime"=>"Tijana",
            "prezime"=>"Vasic",
            "adresa"=>"Bulevar Zorana Djindjica 123 Beograd",
            "cena"=>"50e",
            "telefon"=>"06512345678",
            "brend"=>"MAC",
        ]);

        Sminker::create([
            "studio"=>"JelenaRox",
            "ime"=>"Jelena",
            "prezime"=>"Roksandic",
            "adresa"=>"Bulevar Kralja Aleksandra 123 Beograd",
            "cena"=>"45e",
            "telefon"=>"06512345666",
            "brend"=>"Dior",
        ]);
    }
}
