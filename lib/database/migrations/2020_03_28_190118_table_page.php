<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Page', function (Blueprint $table) {
            $table->increments('page_id');
            $table->string('page_title');
            $table->string('page_slug');
            $table->string('page_image');
            $table->tinyInteger('page_status');
            $table->text('page_content');
            $table->string('meta_key');
            $table->string('meta_desc');
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
        Schema::dropIfExists('Page');
    }
}
