<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('region')->unsigned();
            $table->integer('locality')->unsigned();
            $table->integer('city')->unsigned();
            $table->string('street');
            $table->string('house');
            $table->string('housing')->nullable();
            $table->string('office')->nullable();
            $table->string('postcode')->nullable();
            $table->string('comment')->nullable();
            $table->string('delivery_address');
            $table->string('delivery_city');
            $table->softDeletes(); 
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
        Schema::dropIfExists('company_addresses');
    }
}
