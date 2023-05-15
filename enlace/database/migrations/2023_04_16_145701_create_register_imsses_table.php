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
            $table->string('user_name')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('identification')->nullable();
            $table->string('social_security_number')->nullable();
            $table->string('certificate_tax_status')->nullable();
            $table->string('proof_address')->nullable();
            $table->string('curp')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('register_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_clabe')->nullable();
            $table->string('bank_format')->nullable();
            $table->string('infonavit_retention')->nullable();
            $table->string('file_credit')->nullable();
            $table->string('fonacot_credit')->nullable();
            $table->string('imss_monthly_salary')->nullable();
            $table->string('monthly_real_salary')->nullable();
            $table->string('payment_period')->nullable();
            $table->string('payroll_name')->nullable();
            $table->string('register_type')->nullable();
            $table->string('emergency_contact_full_name')->nullable();
            $table->string('emergency_contact_phone_number')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->text('notes')->nullable();
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
