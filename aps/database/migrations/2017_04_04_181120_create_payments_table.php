<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bank');
            $table->string('no_rekening');
            $table->string('pemilik');
            $table->string('cabang');
            $table->timestamps();
        });
        DB::table('payments')->insert([
          'nama_bank' => 'BRI',
          'no_rekening' => '23124125',
          'pemilik' => 'Erl',
          'cabang' => 'Tangerang Selatan',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
