<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('codigo')->nullable()->after('descripcion');
            $table->string('medidas')->nullable()->after('codigo');
            $table->string('marca')->nullable()->after('medidas');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['codigo', 'medidas', 'marca']);
        });
    }
};
