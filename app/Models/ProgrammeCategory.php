<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgrammeCategory extends Model
{
    protected $fillable = ['name', 'slug', 'is_active'];

    public function programmes(): HasMany
    {
        return $this->hasMany(Programme::class);
    }
}