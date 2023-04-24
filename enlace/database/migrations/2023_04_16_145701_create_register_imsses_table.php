<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterImssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_imsses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('birth_certificate')->nullable();
            $table->string('identification')->nullable();
            $table->string('social_security_number')->nullable();
            $table->string('rfc')->nullable();
            $table->string('proof_address')->nullable();
            $table->string('curp')->nullable();
            $table->string('bank_data')->nullable();
            $table->string('infonavit_retention')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('register_date')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('imss_salary')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('register_imsses');
    }
}
