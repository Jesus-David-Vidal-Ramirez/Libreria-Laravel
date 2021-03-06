<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_Usuario')->nullable();
            $table->unsignedBigInteger('Id_Libro')->nullable();
            $table->foreign('Id_Usuario')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('Id_Libro')->references('id')->on('libros')->onDelete("cascade")->onUpdate("cascade");
            $table->integer('cantidad');
            $table->integer('total');
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
        Schema::dropIfExists('compras');
    }
}
