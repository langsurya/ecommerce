<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Pelanggan;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pel')->unique();
            $table->enum('status', ['Aktif', 'Tidak']);
            $table->string('name');
            $table->string('hp');
            $table->string('email')->unique();
            $table->string('line');
            $table->string('bbm');
            $table->string('alamat');
            $table->timestamps();
        });
        DB::table('pelanggans')->insert([
            'id' => 1,
            'id_pel' => 'BKR001',
            'status' => 'Tidak',
            'name' => 'First',
            'hp' => '0213847',
            'email' => 'user@user.com',
            'line' => 'line id',
            'bbm' => 'bbm id',
            'alamat' => 'alamat user',
        ]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}
