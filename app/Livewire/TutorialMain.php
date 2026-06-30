<?php

namespace App\Livewire;

use App\Models\Tutorial;
use App\Services\YouTubeService;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class TutorialMain extends Component
{
    use WithPagination;

    public $search, $id;

    #[Validate('required')]
    public $titulo;

    #[Validate('required')]
    public $url;

    public $duracion;

    public function render()
    {
        $tutoriales = Tutorial::query()
            ->when($this->search, fn($q) => $q->where('titulo', 'like', "%{$this->search}%"))
            ->latest()
            ->paginate();

        return view('livewire.tutorial-main', compact('tutoriales'));
    }

    public function save()
    {
        $this->validate();

        $youtube = app(YouTubeService::class);
        $youtubeId = $youtube->extractVideoId($this->url);
        $thumbnail = $youtube->getThumbnailUrl($this->url);

        $data = [
            'titulo' => $this->titulo,
            'url' => $this->url,
            'youtube_id' => $youtubeId ?? '',
            'duracion' => $this->duracion ?: null,
            'thumbnail' => $thumbnail,
        ];

        if (!$this->id) {
            Tutorial::create($data);

            Flux::toast(
                heading: 'Tutorial registrado.',
                text: 'El tutorial se ha registrado correctamente.',
                variant: 'success',
            );
        } else {
            Tutorial::find($this->id)->update($data);

            Flux::toast(
                heading: 'Tutorial actualizado.',
                text: 'El tutorial se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Tutorial $item)
    {
        $this->id = $item->id;
        $this->titulo = $item->titulo;
        $this->url = $item->url;
        $this->duracion = $item->duracion;

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset(['id', 'titulo', 'url', 'duracion']);

        $this->modal('showform')->show();
    }

    public function confirm(Tutorial $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        Tutorial::find($this->id)->delete();

        Flux::toast(
            heading: 'Tutorial eliminado.',
            text: 'El tutorial se ha eliminado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
