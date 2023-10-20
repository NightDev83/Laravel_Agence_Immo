<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_controllers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->binary('photo')->nullable();
            $table->string('description');
            $table->string('lieux');
            $table->string('surface');
            $table->string('pieces');
            $table->boolean('disponible');
            $table->string('prix');
            $table->string('agent');
            $table->string('energie')->nullable()->default('Non renseigné');
            $table->string('type_de_bien');
            $table->boolean('exterieur')->nullable()->default(false);
            $table->string('surface_exterieur')->nullable()->default('Non renseigné');
            $table->string('type_de_vente')->nullable()->default('Non renseigné');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_controllers');
    }
};
