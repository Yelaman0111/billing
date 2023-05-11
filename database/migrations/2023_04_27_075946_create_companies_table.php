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
            $table->string('name'); // название компании  
            $table->string('billing_name')->unique(); // название компании в биллинге
            $table->string('rnn')->nullable(); // РНН
            $table->string('ident_number'); // БИН или ИНН
            $table->integer('address_id')->unsigned()->nullable();
            // $table->integer('vip'); // флаг вип
            $table->integer('type'); // типа клиента 1-обычный 2-VIP 3-SuperVip 4-SuperExtraVip
            $table->string('udl_number')->nullable(); // номер удостоверения
            $table->string('udl_issued')->nullable(); // Кем выдано удостоверение
            $table->date('udl_date')->nullable(); // Дата выдачи удостоверения
            $table->string('ip_number')->nullable(); // Номер ИП
            $table->string('ip_serial')->nullable();// Серия ИП
            $table->date('ip_date')->nullable(); // Дата ИП
            $table->string('nds_number')->nullable();// Номер НДС
            $table->string('nds_serial')->nullable();// Серия НДС
            $table->date('nds_date')->nullable();// Дата НДС
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
