<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxforms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('dateOfBirth');
            $table->string('address');
            $table->string('postalCode');
            $table->string('city');
            $table->string('province');
            $table->string('email');
            $table->string('phone');
            $table->string('sin');
            $table->string('maritalStatus');
            $table->string('spouseFname');
            $table->string('spouseLname');
            $table->string('spouseAddress');
            $table->string('spousePostalCode');
            $table->string('spouseCity');
            $table->string('spouseProvince');
            $table->string('Drelationship');
            $table->string('DName');
            $table->string('DLname');
            $table->string('DAddress');
            $table->string('DPostalCode');
            $table->string('DCity');
            $table->string('DProvince');

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
        Schema::dropIfExists('taxforms');
    }
}
