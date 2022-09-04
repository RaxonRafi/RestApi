<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeEtcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_etc', function (Blueprint $table) {
            $table->id();
            $table->string('home_title');
            $table->string('home_subtitle');
            $table->string('tech_desc');
            $table->string('total_project');
            $table->string('total_clents');
            $table->string('video_desc');
            $table->string('video_url');
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
        Schema::dropIfExists('home_etc');
    }
}
