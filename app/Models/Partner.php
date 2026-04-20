<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'logo',
        'website_url',
        'country',
        'partnership_type',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
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

    /**
     * Get the logo URL attribute with fallback.
     */
    public function getLogoUrlAttribute(): ?string
    {
        $mediaUrl = $this->getFirstMediaUrl('partner_logos');
        
        if ($mediaUrl) {
            return $mediaUrl;
        }
        
        return $this->logo ? asset('storage/' . $this->logo) : null;
    }

    /**
     * Register media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('partner_logos')
            ->useDisk('public')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
            ->singleFile();
    }

    public function registerMediaConversions(\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10);
    }

    public static function getPartnershipTypes()
    {
        return [
            'supplier' => 'Supplier',
            'buyer' => 'Buyer',
            'logistics' => 'Logistics Provider',
            'financial' => 'Financial Partner',
            'other' => 'Other',
        ];
    }
}
