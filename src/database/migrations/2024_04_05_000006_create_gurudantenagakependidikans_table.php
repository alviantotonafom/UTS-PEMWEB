<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurudanTenagaKependidikansTable extends Migration
{
    public function up()
    {
        Schema::create('gurudantenagakependidikans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->date('hiredate')->nullable();
            $table->string('jenisgtk')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
