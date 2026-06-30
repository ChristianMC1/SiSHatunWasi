<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['slug' => 'Porcelanatos', 'descripcion' => 'Porcelanatos de alta calidad para pisos y paredes.'],
            ['slug' => 'Tablones', 'descripcion' => 'Tablones cerámicos con formato alargado tipo madera.'],
            ['slug' => 'Cerámicos', 'descripcion' => 'Cerámicos esmaltados para revestimiento de interiores.'],
            ['slug' => 'Revestimientos para pared', 'descripcion' => 'Revestimientos decorativos para muros y paredes.'],
            ['slug' => 'Combinaciones', 'descripcion' => 'Juegos de piezas que combinan entre sí para crear diseños.'],
            ['slug' => 'Insertos y lápices', 'descripcion' => 'Piezas decorativas pequeñas para detalles y bordes.'],
            ['slug' => 'Porcelanatos grandes', 'descripcion' => 'Porcelanatos de gran formato para espacios amplios.'],
            ['slug' => 'Componentes', 'descripcion' => 'Componentes y piezas complementarias para instalación.'],
            ['slug' => 'Pegamentos', 'descripcion' => 'Adhesivos y pegamentos especializados para instalación.'],
            ['slug' => 'Accesorios', 'descripcion' => 'Accesorios y herramientas para instalación y mantenimiento.'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
