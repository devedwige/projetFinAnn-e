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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('nom_prenom_pere')->nullable();
            $table->string('nom_prenom_mere')->nullable();
            $table->string('matricule')->nullable()->unique();
            $table->string('centre')->nullable();
            $table->string('profession')->nullable();
            $table->string('ville')->nullable();
            $table->integer('phone');
             $table->integer('code')->nullable();
            // $table->timestamp('matricule')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->constrained();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
