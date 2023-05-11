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
            $table->string('title')->nullable(); // номер договора клиента
            $table->string('title_rbk')->unique(); // номер договора рбк
            $table->string('name'); // название договора, обычно это название компании
            $table->string('connector')->unique()->nullable(); // конектор для 1с
            $table->string('login')->unique()->nullable(); // логин для входа в лк
            $table->string('password')->nullable(); // апроль для входа в лк
            $table->date('date1')->nullable(); // дата действия договора
            $table->date('date2')->nullable(); // дата закрытия договора
            $table->date('agr_date')->nullable(); // Дата подписания договора
            $table->integer('mode'); // 1-Постоплата 2-Предоплата
            $table->integer('auction_sum')->nullable(); // фиксированная сумма
            $table->integer('auction_vat')->nullable(); // фиксированная сумма включает ндс 1- да 0-нет
            $table->integer('billable'); // флаг считать ли абонетскую плату (для рбк точек и договоров) 1-да 0-нет
            $table->integer('rbkip'); // флаг для 0-рбк и 1-рбк айпи 
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
