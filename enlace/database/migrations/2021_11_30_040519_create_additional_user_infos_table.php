<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_user_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('last_name')->nullable();
            $table->string('work_area')->nullable();
            $table->string('position')->nullable();
            $table->string('office')->nullable();
            $table->string('company')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('municipality')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('entry_date')->nullable();
            $table->date('departure_dates')->nullable();
            $table->string('immediate_boss')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone_number')->nullable();
            $table->string('profile_image')->nullable();
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
        Schema::dropIfExists('additional_user_infos');
    }
}
