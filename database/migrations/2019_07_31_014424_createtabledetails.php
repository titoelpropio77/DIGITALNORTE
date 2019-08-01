<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createtabledetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create( 'details' , function( $table ){
            $table->bigIncrements('id', true);
            $table->bigInteger( 'id_product' );
            $table->bigInteger( 'id_sale' );
            $table->decimal( 'subtotal', 12,2 );
            $table->integer( 'quantity' );
            $table->timestamps();
            $table->softDeletes();
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
