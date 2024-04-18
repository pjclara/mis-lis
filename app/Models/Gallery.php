<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'description',
        'type',
        'published',
        'theme_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }

    public function getImagePathAttribute(): string
    {
        return asset('images/' . $this->theme_id . '/' . $this->image);
    }

    public function getThumbnailPathAttribute(): string
    {
        return asset('images/' . $this->theme_id . '/thumbnail-' . $this->image);
    }

    
}
