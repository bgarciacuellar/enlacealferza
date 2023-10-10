<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelImssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancel_imsses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('name')->nullable();
            $table->string('cancellation_reason')->nullable();
            $table->string('settlement_calculation')->nullable();
            $table->string('leave_receipt')->nullable();
            $table->date('cancel_date')->nullable();
            $table->string('notes')->nullable();
            $table->string('comment')->nullable();
            $table->string('comment_file')->nullable();
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
        Schema::dropIfExists('cancel_imsses');
    }
}
