<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->increments('id');
            $table->bigInteger( 'number' );//->nullable();
            $table->string( 'name' )->unique();
            $table->string( 'slug_name' )->unique();
            $table->longText( 'description' );
            $table->string( 'input' );
            $table->string( 'output' );
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
        Schema::dropIfExists('problems');
    }
}
