<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private const OFFSET = 1000;
    private const MODEL_CLASS = 'App\\Models\\Product';

    public function up(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        DB::statement('UPDATE products SET id = id + ' . self::OFFSET);
        DB::statement('UPDATE ambiente_product SET product_id = product_id + ' . self::OFFSET);
        DB::statement(
            "UPDATE images SET imageable_id = imageable_id + " . self::OFFSET
            . " WHERE imageable_type = '" . self::MODEL_CLASS . "'"
        );

        DB::statement('UPDATE products SET id = ' . (self::OFFSET + 113) . ' - id');
        DB::statement('UPDATE ambiente_product SET product_id = ' . (self::OFFSET + 113) . ' - product_id');
        DB::statement(
            "UPDATE images SET imageable_id = " . (self::OFFSET + 113) . " - imageable_id"
            . " WHERE imageable_type = '" . self::MODEL_CLASS . "'"
        );

        DB::statement('ALTER TABLE products AUTO_INCREMENT = 113');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        DB::statement('UPDATE products SET id = id + ' . self::OFFSET);
        DB::statement('UPDATE ambiente_product SET product_id = product_id + ' . self::OFFSET);
        DB::statement(
            "UPDATE images SET imageable_id = imageable_id + " . self::OFFSET
            . " WHERE imageable_type = '" . self::MODEL_CLASS . "'"
        );

        DB::statement('UPDATE products SET id = ' . (self::OFFSET + 113) . ' - id');
        DB::statement('UPDATE ambiente_product SET product_id = ' . (self::OFFSET + 113) . ' - product_id');
        DB::statement(
            "UPDATE images SET imageable_id = " . (self::OFFSET + 113) . " - imageable_id"
            . " WHERE imageable_type = '" . self::MODEL_CLASS . "'"
        );

        DB::statement('ALTER TABLE products AUTO_INCREMENT = 113');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
