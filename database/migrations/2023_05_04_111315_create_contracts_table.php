<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('connector');
            $table->string('login');
            $table->string('password');
            $table->string('title');
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
            $table->integer('mode');
            $table->integer('billable');
            $table->integer('rbkip');
            $table->integer('manager')->unsigned();
            $table->integer('company_id')->unsigned();

            


            
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
        Schema::dropIfExists('contracts');
    }
}
