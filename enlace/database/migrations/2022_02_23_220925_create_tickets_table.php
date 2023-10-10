<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('status')->nullable();
            $table->date('limit_date')->nullable();
            $table->string('category')->nullable();
            $table->string('company')->nullable();
            $table->string('payment_period')->nullable();
            $table->string('master_file')->nullable();
            $table->string('preinvoices')->nullable();
            $table->string('extraordinario_file')->nullable();
            $table->string('observations')->nullable();
            $table->string('payroll_receipt')->nullable();
            $table->string('payment_receipt')->nullable();
            $table->string('kardex')->nullable();
            $table->string('ticket_type')->default('nómina');
            $table->integer('is_archived')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
