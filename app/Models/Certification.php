<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Certification extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'issuing_body',
        'certificate_number',
        'issue_date',
        'expiry_date',
        'document_file',
        'logo',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'issue_date' => 'date',
        'expiry_date' => 'date',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'issue_date',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('certification_logos')
            ->useDisk('public')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
            ->singleFile();
    }

    public function getLogoUrlAttribute(): ?string
    {
        $logoMedia = $this->getFirstMedia('certification_logos');
        if ($logoMedia) {
            return $logoMedia->getUrl();
        }
        return $this->logo ?? null;
    }
}
