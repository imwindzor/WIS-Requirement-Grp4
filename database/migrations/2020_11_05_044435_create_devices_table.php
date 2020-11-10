<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2020_11_05_044435_create_devices_table.php
class CreateDevicesTable extends Migration
=======
class CreateCollegeDeptTable extends Migration
>>>>>>> college_migration:database/migrations/2020_11_05_223059_create_college_dept_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2020_11_05_044435_create_devices_table.php
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date_borrowed');
            $table->string('date_returned');
            $table->string('ammount_borrowed');
=======
        Schema::create('college_dept', function (Blueprint $table) {
            $table->id();
            $table->string('name');
>>>>>>> college_migration:database/migrations/2020_11_05_223059_create_college_dept_table.php
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
<<<<<<< HEAD:database/migrations/2020_11_05_044435_create_devices_table.php
        Schema::dropIfExists('devices');
=======
        Schema::dropIfExists('college_dept');
>>>>>>> college_migration:database/migrations/2020_11_05_223059_create_college_dept_table.php
    }
}
