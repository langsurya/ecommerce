<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatpelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('katpels', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('keterangan');
          $table->string('status');
          $table->timestamps();
      });
      DB::table('katpels')->insert([
          'name' => 'keterangan First',
          'keterangan' => 'Pelanggan Retail',
          'status' => '1',
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katpels');
    }
}
