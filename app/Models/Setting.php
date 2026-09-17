<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'description',
    ];

    protected $casts = [
        'value' => 'json',
    ];

    /**
     * Get a setting value by key
     */
    public static function getValue(string $key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Get all settings as key-value pairs
     */
    public static function getAllSettings()
    {
        return \Illuminate\Support\Facades\Cache::remember('site_settings', 3600, function () {
            return static::pluck('value', 'key')->toArray();
        });
    }

    /**
     * Set a setting value
     */
    public static function setValue(string $key, $value, string $type = 'text')
    {
        $setting = static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type]
        );

        \Illuminate\Support\Facades\Cache::forget('site_settings');

        return $setting;
    }

    /**
     * Scope to get settings by type
     */
    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
