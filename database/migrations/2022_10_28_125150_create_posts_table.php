<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
			$table->integer('user_id');
			$table->text('title');
			$table->text('category');
			$table->longText('post_content');
			$table->string('post_img');
			$table->text('post_tags');
			$table->text('post_meta_dec');
			$table->text('post_meta_key');
			$table->integer('post_status');
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
};
