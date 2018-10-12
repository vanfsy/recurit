<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('company_type', 50);
            $table->string('name', 100);
            $table->string('telephone', 100);
            $table->string('email', 100)->unique();
            $table->string('url', 100);
            $table->string('logo', 100)->nullable();
            $table->text('description')->nullable();
            $table->string('sameAs', 100)->nullable();
            $table->string('street_address', 255)->nullable();
            $table->string('address_locality', 255)->nullable();
            $table->string('address_region', 255)->nullable();
            $table->string('postalcode', 100)->nullable();
            $table->string('password');
            $table->rememberToken();
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
