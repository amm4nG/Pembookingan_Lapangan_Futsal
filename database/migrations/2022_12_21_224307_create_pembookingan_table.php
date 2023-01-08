<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_main');
            $table->char('jam_main', 15);
            $table->integer('id_user');
            $table->integer('id_lapangan');
            $table->char('status_booking', 5)->default('no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembookingan');
    }
};