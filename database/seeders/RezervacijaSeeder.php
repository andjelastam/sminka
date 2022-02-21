<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bicikla;
use App\Models\Rezervacija;
use App\Models\User;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rezervacija::truncate();
        $user = User::factory()->create();
        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_zakazivanja"=>"2021-02-02",
            "vreme"=>"14:00",
            "studio"=> "Vanity",
            "sminker_id"=> "1",
            "user_id"=> $user->id,
        ]);
    }
}
