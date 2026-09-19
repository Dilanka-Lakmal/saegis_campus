<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Programme extends Model
{
    protected $fillable = [
        'faculty_id',
        'programme_category_id',
        'title',
        'slug',
        'duration',
        'level',
        'overview',
        'entry_requirements',
        'image',
        'is_active',
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProgrammeCategory::class, 'programme_category_id');
    }
}