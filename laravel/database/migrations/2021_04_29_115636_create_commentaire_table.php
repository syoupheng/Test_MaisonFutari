<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->id();
            $table->text('commentaire')->nullable(false);
            $table->foreignId('auteur')->nullable(false);
            $table->integer('note')->nullable(false);
            $table->foreignId('etablissement')->nullable(false);
            $table->timestamps();
        });

        Schema::table('commentaire', function (Blueprint $table) {
            $table->foreign('auteur')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('etablissement')->references('id')->on('etablissement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaire');
    }
}
