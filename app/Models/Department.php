<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Department extends Model
{
    protected $fillable = ['faculty_id', 'name', 'slug', 'description', 'is_active'];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }
}