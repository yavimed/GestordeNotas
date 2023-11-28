<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\nota;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('notas', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('titulo');
        $table->string('descripcion');
        $table->datetime('feche_creacion'); 
        $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
