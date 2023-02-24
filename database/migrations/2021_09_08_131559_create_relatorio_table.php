<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio', function (Blueprint $table) {
            $table->id()->increments();
            $table->BigInteger('cod_user')->nullable();
            $table->BigInteger('cod_reg')->nullable();
            $table->string('relatorio', 80)->nullable();
            $table->string('desc', 80)->nullable();
            $table->string('pagina', 80)->nullable();
            $table->json('info_itens')->nullable();
            $table->json('info_gerais')->nullable();
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
        Schema::dropIfExists('relatorio');
    }
}
