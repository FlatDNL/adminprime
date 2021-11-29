<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->biginteger('ctDemoFX');
            $table->biginteger('ctDemoB3');
            $table->biginteger('ctDemoCOPY');
            $table->biginteger('ctRealFX');
            $table->biginteger('ctRealB3');
            $table->biginteger('ctRealCOPY');
            $table->date('expiracaoFX');
            $table->date('expiracaoB3');
            $table->date('expiracaoCOPY');
            $table->string('empresa');
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
        Schema::dropIfExists('clientes');
    }
}
