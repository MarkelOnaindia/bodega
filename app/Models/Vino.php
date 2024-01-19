<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;

    public function up(){
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('anio')->nullable();
            $table->string('alcohol');
            $table->string('tipo')->nullable();
            $table->foreignId('id_bodega')->constrained('bodegas')->onDelete('cascade');
            $table->timestamps();
        });
    }

}
