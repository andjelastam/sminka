<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSminkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sminkers', function (Blueprint $table) {
            $table->id();
            $table->string('studio');
            $table->string('ime');
            $table->string('prezime');
            $table->string('adresa');
            $table->string('cena');
            $table->string('telefon');
            $table->string('brend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sminkers');
    }
}
