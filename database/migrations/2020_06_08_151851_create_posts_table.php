<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->id();

            $table->string('title',255);

            $table->string('subtitle',100);

            $table->string('slug',100);

            $table->text('body_text');

            $table->boolean('status')->nullable();

            $table->integer('posted_by')->nullable();

            $table->string('image')->nullable();

            $table->integer('like')->nullable();

            $table->integer('dislike')->nullable();

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
        Schema::dropIfExists('posts');
    }
}
