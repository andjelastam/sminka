<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Rezervacija extends Model
{
    use HasFactory;
    protected $fillable=[
        'ime',
        'prezime',
        'datum_zakazivanja',
        'vreme',
        'studio',
        'snimker_id',
        'user_id',
];
    //use HasFactory;
    public $timestamps = true;
    public function sminker(){
        return $this->belongsTo(Sminker::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
