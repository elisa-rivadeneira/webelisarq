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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            /* Empezamos a añadir codigo aqui*/

            $table->text('title');  // Titulo de nuestro post del blog
            $table->text('body');   // Cuerpo de nuestro post del blog
            $table->text('user_id'); // user_id del autor del post del blog
            /* Terminamos de añadir codigo aqui*/

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
        Schema::dropIfExists('blog_posts');
    }
};
