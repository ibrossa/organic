<?php


namespace App\Traits;


use Illuminate\Database\Eloquent\Builder;

trait HasDefaultScopes
{
    /**
     * Scope model by status
     *
     * @param Builder $query
     */
    public function scopeActive(Builder $query)
    {
        $query->where('status', 1);
    }
}
