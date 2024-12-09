<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTitleFromGalleriesTable extends Migration
{
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('title'); // Drop the title column
        });
    }

    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('title')->nullable(); // Add it back if needed
        });
    }
}
