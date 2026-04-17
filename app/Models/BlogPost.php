<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class BlogPost extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'cover_image',
        'author',
        'category_id',
        'tags',
        'is_published',
        'is_featured',
        'published_at',
        'views',
        'reading_time',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'tags' => 'json',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Get the formatted published at attribute.
     */
    public function getFormattedPublishedAtAttribute(): string
    {
        return $this->published_at ? $this->published_at->format('M j, Y') : 'Not scheduled';
    }

    /**
     * Get the featured image URL.
     */
    // public function getFeaturedImageUrlAttribute(): ?string
    // {
    //     $media = $this->getFirstMedia('featured_image');
    //     if ($media) {
    //         // Check if media URL is already full URL
    //         $url = $media->getUrl();
    //         if (str_starts_with($url, 'http')) {
    //             return $url;
    //         }
    //         return asset('storage/' . $media->directory . '/' . $media->file_name);
    //     }
    //     return $this->cover_image ? asset('storage/' . $this->cover_image) : null;
    // }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        $mediaUrl = $this->getFirstMediaUrl('featured_image');
        
        if ($mediaUrl) {
            return $mediaUrl;
        }
        
        return $this->cover_image ?? null;
    }

    /**
     * Register media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile()
            ->useDisk('public')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
