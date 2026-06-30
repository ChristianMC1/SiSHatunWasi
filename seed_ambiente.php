<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$ambientes = ['Baño', 'Cocina', 'Sala', 'Comedor', 'Terraza', 'Fachadas'];

foreach (App\Models\Product::all() as $product) {
    $cat = $product->category;
    if (!$cat) continue;

    switch ($cat->slug) {
        case 'Cerámicos':
            $product->ambiente = 'Baño';
            break;
        case 'Porcelanatos':
            $product->ambiente = 'Sala';
            break;
        case 'Porcelanatos grandes':
            $product->ambiente = 'Sala';
            break;
        case 'Tablones':
            $product->ambiente = 'Sala';
            break;
        case 'Revestimientos para pared':
            $product->ambiente = 'Fachadas';
            break;
        case 'Insertos y lápices':
            $product->ambiente = 'Baño';
            break;
        case 'Combinaciones':
            $product->ambiente = 'Sala';
            break;
        case 'Componentes':
            $product->ambiente = 'Baño';
            break;
        case 'Pegamentos':
            $product->ambiente = null;
            break;
        case 'Accesorios':
            $product->ambiente = 'Baño';
            break;
        default:
            $product->ambiente = 'Sala';
    }
    $product->save();
}

echo 'Ambientes asignados a ' . App\Models\Product::whereNotNull('ambiente')->count() . ' productos.' . PHP_EOL;
