<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\MediaCollection;
use Spatie\MediaLibrary\InteractsWithMedia;

class Media extends Model
{
    use HasMedia, InteractsWithMedia;

    protected $fillable = [
        'name',
        'file_name',
        'alt_text',
        'folder',
        'is_public',
        'sort_order',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('products', 'Products')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile()
            ->withResponsiveImages();

        $this->addMediaCollection('blog', 'Blog')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile()
            ->withResponsiveImages();

        $this->addMediaCollection('gallery', 'Gallery')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->multipleFiles()
            ->withResponsiveImages();

        $this->addMediaCollection('documents', 'Documents')
            ->acceptsMimeTypes(['application/pdf', 'application/msword', 'application/vnd.ms-excel', 'text/plain'])
            ->singleFile();

        $this->addMediaCollection('banners', 'Banners')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->singleFile()
            ->withResponsiveImages();

        $this->addMediaCollection('logos', 'Logos')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
            ->singleFile()
            ->withResponsiveImages();

        $this->addMediaCollection('other', 'Other');
    }

    public function registerMediaConversions(): void
    {
        $this->registerMediaConversions([
            'thumbnail' => function ($media) {
                return $media->fit(200, 200);
            },
            'medium' => function ($media) {
                return $media->fit(400, 400);
            },
            'large' => function ($media) {
                return $media->fit(800, 600);
            },
            'optimized' => function ($media) {
                return $media->fit(1200, 1200);
            },
        ]);
    }

    public function getPublicUrl(): string
    {
        return $this->getFirstMediaUrl('default', ['thumbnail', 'medium']);
    }

    public function getFolder(): string
    {
        return $this->folder ?? 'general';
    }

    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    public function scopeInFolder($query, string $folder)
    {
        return $query->where('folder', $folder);
    }
}
