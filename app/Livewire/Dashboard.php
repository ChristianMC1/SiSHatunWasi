<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Client;
use App\Models\Category;
use App\Models\Tutorial;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        $totalProductos = Product::count();
        $totalClientes = Client::count();
        $totalCategorias = Category::count();
        $totalTutoriales = Tutorial::count();

        $productosPorCategoria = Category::withCount('products')
            ->orderBy('products_count', 'desc')
            ->get();

        $maxCount = $productosPorCategoria->max('products_count') ?: 1;

        $ultimosProductos = Product::with('category', 'images')
            ->latest()
            ->take(5)
            ->get();

        $stockBajo = Product::where('disponible', true)
            ->where('cantidad', '<=', 5)
            ->orderBy('cantidad')
            ->take(5)
            ->get();

        $recentProducts = Product::latest()->take(3)->get()->map(fn($p) => [
            'icon' => 'cube',
            'action' => 'creó un producto',
            'subject' => $p->nombre,
            'time' => $p->created_at,
        ]);

        $recentClients = Client::latest()->take(2)->get()->map(fn($c) => [
            'icon' => 'users',
            'action' => 'registró un cliente',
            'subject' => $c->nombre,
            'time' => $c->created_at,
        ]);

        $recentCategories = Category::latest()->take(2)->get()->map(fn($c) => [
            'icon' => 'tag',
            'action' => 'editó una categoría',
            'subject' => $c->slug,
            'time' => $c->created_at,
        ]);

        $recentTutorials = Tutorial::latest()->take(2)->get()->map(fn($t) => [
            'icon' => 'video-camera',
            'action' => 'publicó un tutorial',
            'subject' => $t->titulo,
            'time' => $t->created_at,
        ]);

        $actividad = collect()
            ->merge($recentProducts)
            ->merge($recentClients)
            ->merge($recentCategories)
            ->merge($recentTutorials)
            ->sortByDesc('time')
            ->take(6)
            ->values();

        return view('livewire.dashboard', compact(
            'totalProductos', 'totalClientes',
            'totalCategorias', 'totalTutoriales',
            'productosPorCategoria', 'maxCount',
            'ultimosProductos', 'stockBajo', 'actividad'
        ));
    }
}
