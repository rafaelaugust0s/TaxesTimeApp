<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateOfBirthToTaxformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taxforms', function (Blueprint $table) {
            //
            $table->string('dateOfBirth')->unique()->after('lname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taxforms', function (Blueprint $table) {
            //
            $table->dropColumn('dateOfBirth');
        });
    }
}
