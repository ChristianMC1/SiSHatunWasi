<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->text('icono')->nullable();
            $table->timestamps();
        });

        Schema::create('ambiente_product', function (Blueprint $table) {
            $table->foreignId('ambiente_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->primary(['ambiente_id', 'product_id']);
        });

        $oldAmbientes = DB::table('products')
            ->whereNotNull('ambiente')
            ->distinct()
            ->pluck('ambiente');

        $iconos = [
            'Baño' => 'M21 20H3v-2l1-1V9a8 8 0 0116 0v8l1 1v2zm-9-4a3 3 0 100-6 3 3 0 000 6zm5-7a5 5 0 00-10 0h10z',
            'Cocina' => 'M6 3h12v2H6V3zm2 4h8v2H8V7zm-2 4h12v2H6v-2zm14 8H4v-2h16v2zM12 2l2 2h-4l2-2zM5 17h14v2H5v-2z',
            'Sala' => 'M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12zm-8-6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm-4 4h8v1H8v-1z',
            'Comedor' => 'M2 17h20v2H2v-2zm2-4h16v2H4v-2zm2-4h12v2H6V9zm4-4h4v2h-4V5zm-6 12h20v2H4v-2z',
            'Dormitorio' => 'M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 2v16H6V4h12zm-4 6h-4V6h4v4zm0 4h-4v-2h4v2zm0 4h-4v-2h4v2z',
            'Terraza' => 'M21 13v-2h-2V9h-2V7h-2V5h-2V3h-2v2H9v2H7v2H5v2H3v2h2v2h2v2h2v2h2v2h2v-2h2v-2h2v-2h2v-2h2v-2h-2zm-4 0h-2v2h-2v2h-2v-2H9v-2H7v-2h2V9h2V7h2v2h2v2h2v2z',
            'Fachadas' => 'M19 9.3V4h-3v2.6L12 3 2 12h3v8h5v-6h4v6h5v-8h3l-3-2.7zm-9 .7c0-1.1.9-2 2-2s2 .9 2 2h-4z',
        ];

        foreach ($oldAmbientes as $nombre) {
            $slug = $nombre;
            $ambienteId = DB::table('ambientes')->insertGetId([
                'nombre' => $nombre,
                'slug' => $slug,
                'icono' => $iconos[$nombre] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $productIds = DB::table('products')
                ->where('ambiente', $nombre)
                ->pluck('id');

            $pivotData = $productIds->map(fn($pid) => [
                'ambiente_id' => $ambienteId,
                'product_id' => $pid,
            ])->toArray();

            if (!empty($pivotData)) {
                DB::table('ambiente_product')->insert($pivotData);
            }
        }

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('ambiente');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('ambiente')->nullable()->after('marca');
        });

        $pivotData = DB::table('ambiente_product')->get();
        foreach ($pivotData as $pivot) {
            $nombre = DB::table('ambientes')->where('id', $pivot->ambiente_id)->value('nombre');
            if ($nombre) {
                DB::table('products')
                    ->where('id', $pivot->product_id)
                    ->update(['ambiente' => $nombre]);
            }
        }

        Schema::dropIfExists('ambiente_product');
        Schema::dropIfExists('ambientes');
    }
};
