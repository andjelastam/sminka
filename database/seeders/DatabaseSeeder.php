<?php

namespace Database\Seeders;
use App\Models\Sminker;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Sminker::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $b =  Sminker::create([
            "studio"=>"Helena",
            "ime"=>"Helena",
            "prezime"=>"Antic",
            "adresa"=>"Kumodraska 2 Beograd",
            "cena"=>"30e",
            "telefon"=>"06513335678",
            "brend"=>"L'oreal",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_zakazivanja"=>"2021-03-02",
            "vreme"=>"20:00",
            "studio"=> "Helena",
            "sminker_id"=> "2",
            "user_id"=> $user->id,
        ]);
    }
}
