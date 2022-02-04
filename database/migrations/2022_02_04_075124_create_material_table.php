<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('ebook');
            $table->string('Audio');
            $table->string('Video');
            $table->string('Author');
            $table->string('coverPhoto');
            $table->string('Subject');
            $table->string('ISSN');
            $table->string('ISBN');
            $table->string('DOIs');
            $table->string('Language');
            $table->string('StartDate');
            $table->string('EndDate');
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
        Schema::dropIfExists('material');
    }
}
