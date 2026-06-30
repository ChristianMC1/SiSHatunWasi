<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function ambientes(): BelongsToMany
    {
        return $this->belongsToMany(Ambiente::class);
    }

    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        return $query->when($search, function ($q) use ($search) {
            $q->where('nombre', 'like', "%$search%")
              ->orWhere('codigo', 'like', "%$search%")
              ->orWhere('marca', 'like', "%$search%");
        });
    }

    public function scopeByCategory(Builder $query, ?string $categorySlug): Builder
    {
        return $query->when($categorySlug, function ($q) use ($categorySlug) {
            $q->whereHas('category', function ($cq) use ($categorySlug) {
                $cq->where('slug', $categorySlug);
            });
        });
    }

    public function scopeByAmbiente(Builder $query, ?string $ambiente): Builder
    {
        return $query->when($ambiente, function ($q) use ($ambiente) {
            $q->whereHas('ambientes', function ($aq) use ($ambiente) {
                $aq->where('slug', $ambiente);
            });
        });
    }

    public function scopeDisponible(Builder $query): Builder
    {
        return $query->where('disponible', true);
    }
}
