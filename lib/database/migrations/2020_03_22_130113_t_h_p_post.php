<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class THPPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('post_cate_id')->unsigned();
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_intro');
            $table->string('post_image');
            $table->tinyInteger('post_status');
            $table->tinyInteger('post_featured');
            $table->text('post_content');
            $table->text('post_content_slug');
            $table->string('post_view');
            $table->string('meta_key');
            $table->string('meta_desc');
            $table->foreign('post_cate_id')->references('cate_id')->on('cate')->onDelete('cascade');
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
        Schema::dropIfExists('post');
    }
}
