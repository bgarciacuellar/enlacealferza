<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_credits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('total_amount');
            $table->string('paid')->default(0);
            $table->string('used')->default(0);
            $table->longText('comment')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('company_credits');
    }
}
