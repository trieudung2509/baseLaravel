<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name_vi');
            $table->string('name_en')->nullable();
            $table->string('slug_vi');
            $table->string('slug_en')->nullable();
            $table->string('image')->nullable();
            $table->integer("cate_post_id")->nullable();
            $table->integer('position')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_home')->default(0);
            $table->tinyInteger('is_hot')->default(0);
            $table->text('title_vi')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();
            $table->string('title_seo_vi')->nullable();
            $table->string('title_seo_en')->nullable();

            $table->string('meta_key_vi')->nullable();
            $table->string('meta_key_en')->nullable();
            $table->string('meta_des_vi')->nullable();
            $table->string('meta_des_en')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
