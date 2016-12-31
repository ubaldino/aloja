<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create( 'answers' , function ( Blueprint $table ) {
            $table->bigIncrements('id');
            //$table->increments('id');
            $table->string( 'source_code' );
            $table->string( 'result' )->nullable();
            $table->string( 'stdout' )->nullable();
            $table->string( 'stderr' )->nullable();
            $table->boolean( 'judged' )->default( false );

            $table->integer( 'user_id' );
            $table->integer( 'problem_id' );
            $table->integer( 'lang_id' );

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
        Schema::dropIfExists('answers');
    }
}










