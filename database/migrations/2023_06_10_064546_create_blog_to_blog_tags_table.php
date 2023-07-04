<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogToBlogTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_to_blog_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs');
            $table->foreignId('blog_tag_id')->constrained('blog_tags');
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
        Schema::dropIfExists('blog_to_blog_tags');
    }
}
