<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameEmailTelCpfSenhaToFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionario', function (Blueprint $table) {
            $table->string('Nome');
            $table->string('email');
            $table->string('tel');
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionario', function (Blueprint $table) {
            //
            $table->dropColumn('Nome');
            $table->dropColumn('email');
            $table->dropColumn('tel');
            $table->dropColumn('senha');
        });
    }
}
