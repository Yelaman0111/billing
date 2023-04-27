<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('billing_name')->unique();;
            $table->string('rnn')->nullable();
            $table->string('ident_number');
            $table->integer('address_id')->unsigned()->nullable();
            $table->integer('vip');
            $table->integer('type');
            $table->string('udl_number')->nullable();
            $table->string('udl_issued')->nullable();
            $table->date('udl_date')->nullable();
            $table->string('ip_number')->nullable();
            $table->string('ip_serial')->nullable();
            $table->date('ip_date')->nullable();
            $table->string('nds_number')->nullable();
            $table->string('nds_serial')->nullable();
            $table->date('nds_date')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
