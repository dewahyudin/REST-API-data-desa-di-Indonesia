<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/timestamp_create_desas_table.php

public function up()
{
    Schema::create('desas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->timestamps();
    });
}

};
