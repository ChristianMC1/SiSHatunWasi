<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = ['id'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function scopePorcelanatos(Builder $query): Builder
    {
        return $query->where('slug', 'Porcelanatos');
    }

    public function scopeTablones(Builder $query): Builder
    {
        return $query->where('slug', 'Tablones');
    }

    public function scopeCeramicos(Builder $query): Builder
    {
        return $query->where('slug', 'Cerámicos');
    }

    public function scopeRevestimientosParaPared(Builder $query): Builder
    {
        return $query->where('slug', 'Revestimientos para pared');
    }

    public function scopeCombinaciones(Builder $query): Builder
    {
        return $query->where('slug', 'Combinaciones');
    }

    public function scopeInsertosYLapices(Builder $query): Builder
    {
        return $query->where('slug', 'Insertos y lápices');
    }

    public function scopePorcelanatosGrandes(Builder $query): Builder
    {
        return $query->where('slug', 'Porcelanatos grandes');
    }

    public function scopeComponentes(Builder $query): Builder
    {
        return $query->where('slug', 'Componentes');
    }

    public function scopePegamentos(Builder $query): Builder
    {
        return $query->where('slug', 'Pegamentos');
    }

    public function scopeAccesorios(Builder $query): Builder
    {
        return $query->where('slug', 'Accesorios');
    }

    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        return $query->when($search, function ($q) use ($search) {
            $q->where('slug', 'like', "%$search%")
              ->orWhere('descripcion', 'like', "%$search%");
        });
    }
}
