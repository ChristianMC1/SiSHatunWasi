<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Ambiente;
use App\Models\Tutorial;
use App\Models\Catalogo;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.public')]

class HomePage extends Component
{
    use WithPagination;

    public $search = '';
    public $filterCategory = '';
    public $filterAmbiente = '';
    public $tutorialSearch = '';
    public $tutorialPage = 1;
    public $catalogoPage = 1;

    public function render()
    {
        $productos = Product::query()
            ->disponible()
            ->with('images', 'category', 'ambientes')
            ->search($this->search)
            ->byCategory($this->filterCategory)
            ->byAmbiente($this->filterAmbiente)
            ->latest('id')
            ->paginate(8);

        $categorias = Category::orderBy('slug')->get();
        $ambientes = Ambiente::orderBy('nombre')->get();
        $totalProductos = Product::disponible()->count();

        $allTutoriales = Tutorial::all();

        $filteredTutorials = $allTutoriales
            ->when($this->tutorialSearch, fn($col) => $col->filter(fn($t) =>
                str_contains(
                    $this->normalizeText($t->titulo),
                    $this->normalizeText($this->tutorialSearch)
                )
            ));

        $tutorials = $filteredTutorials->forPage($this->tutorialPage, 6);

        $tutorialTotal = $filteredTutorials->count();
        $tutorialLastPage = (int) ceil($tutorialTotal / 6);

        $catalogos = Catalogo::where('activo', true)
            ->orderBy('orden')
            ->orderBy('id', 'desc')
            ->paginate(4, ['*'], 'catalogo_page', $this->catalogoPage);

        return view('livewire.home-page', compact(
            'productos', 'categorias', 'ambientes', 'totalProductos',
            'tutorials', 'tutorialTotal', 'tutorialLastPage',
            'catalogos',
        ));
    }

    public function setAmbiente($ambiente = null)
    {
        if ($ambiente === null) {
            $this->filterAmbiente = '';
        } else {
            $amb = Ambiente::where('nombre', $ambiente)->first();
            $this->filterAmbiente = $amb ? $amb->slug : '';
        }
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->reset(['search', 'filterCategory', 'filterAmbiente']);
        $this->resetPage();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilterCategory(): void
    {
        $this->resetPage();
    }

    public function updatingFilterAmbiente(): void
    {
        $this->resetPage();
    }

    public function updatingTutorialSearch(): void
    {
        $this->tutorialPage = 1;
    }

    public function gotoTutorialPage($page)
    {
        $page = (int) $page;
        if ($page < 1) $page = 1;
        $this->tutorialPage = $page;
    }

    public function gotoCatalogoPage($page)
    {
        $this->catalogoPage = (int) $page;
    }

    private function normalizeText(string $text): string
    {
        $text = mb_strtolower($text);
        $text = str_replace(
            ['á','é','í','ó','ú','ü','ñ','à','è','ì','ò','ù','ä','ë','ï','ö','ü','â','ê','î','ô','û'],
            ['a','e','i','o','u','u','n','a','e','i','o','u','a','e','i','o','u','a','e','i','o','u'],
            $text
        );
        $text = str_replace(['.', ' '], '', $text);

        return $text;
    }
}
