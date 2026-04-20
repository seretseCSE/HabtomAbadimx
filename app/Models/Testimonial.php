<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'client_name',
        'client_position',
        'client_company',
        'client_photo',
        'content',
        'rating',
        'country',
        'date_given',
        'project_name',
        'is_featured',
        'is_approved',
        'is_active',
    ];

    protected $casts = [
        'date_given' => 'date',
        'is_featured' => 'boolean',
        'is_approved' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected $dates = [
        'date_given',
        'created_at',
        'updated_at',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByRating($query, $rating)
    {
        return $query->where('rating', $rating);
    }

    public function scopeByCountry($query, $country)
    {
        return $query->where('country', $country);
    }

    public function getCountryNameAttribute()
    {
        $countries = [
            'US' => 'United States',
            'GB' => 'United Kingdom',
            'CA' => 'Canada',
            'AU' => 'Australia',
            'DE' => 'Germany',
            'FR' => 'France',
            'IT' => 'Italy',
            'ES' => 'Spain',
            'NL' => 'Netherlands',
            'BE' => 'Belgium',
            'CH' => 'Switzerland',
            'AT' => 'Austria',
            'SE' => 'Sweden',
            'NO' => 'Norway',
            'DK' => 'Denmark',
            'FI' => 'Finland',
            'PL' => 'Poland',
            'CZ' => 'Czech Republic',
            'SK' => 'Slovakia',
            'HU' => 'Hungary',
            'RO' => 'Romania',
            'BG' => 'Bulgaria',
            'GR' => 'Greece',
            'PT' => 'Portugal',
            'IE' => 'Ireland',
            'RU' => 'Russia',
            'UA' => 'Ukraine',
            'TR' => 'Turkey',
            'IL' => 'Israel',
            'AE' => 'United Arab Emirates',
            'SA' => 'Saudi Arabia',
            'EG' => 'Egypt',
            'ZA' => 'South Africa',
            'NG' => 'Nigeria',
            'KE' => 'Kenya',
            'CN' => 'China',
            'JP' => 'Japan',
            'KR' => 'South Korea',
            'IN' => 'India',
            'PK' => 'Pakistan',
            'BD' => 'Bangladesh',
            'TH' => 'Thailand',
            'VN' => 'Vietnam',
            'MY' => 'Malaysia',
            'SG' => 'Singapore',
            'ID' => 'Indonesia',
            'PH' => 'Philippines',
            'MX' => 'Mexico',
            'BR' => 'Brazil',
            'AR' => 'Argentina',
            'CL' => 'Chile',
            'CO' => 'Colombia',
            'PE' => 'Peru',
            'VE' => 'Venezuela',
            'NZ' => 'New Zealand',
            'FJ' => 'Fiji',
            'PG' => 'Papua New Guinea',
        ];

        return $countries[$this->country] ?? $this->country;
    }

    /**
     * Get the client photo URL attribute with fallback.
     */
    public function getClientPhotoUrlAttribute(): ?string
    {
        $mediaUrl = $this->getFirstMediaUrl('testimonial_photos');
        
        if ($mediaUrl) {
            return $mediaUrl;
        }
        
        return $this->client_photo ? asset('storage/' . $this->client_photo) : null;
    }

    /**
     * Register media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('testimonial_photos')
            ->useDisk('public')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
            ->singleFile();
    }

    public function getRatingStarsAttribute()
    {
        return str_repeat('&#9733;', $this->rating) . str_repeat('&#9734;', 5 - $this->rating);
    }
}
