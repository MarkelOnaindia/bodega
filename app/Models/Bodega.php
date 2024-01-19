<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    public function up(){
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('persona_contacto')->nullable();
            $table->date('fundacion')->nullable();
            $table->boolean('restaurante')->default(false);
            $table->boolean('hotel')->default(false);
            $table->timestamps();
        });
    }

}
