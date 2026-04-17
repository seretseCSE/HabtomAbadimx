<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RFQ extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rfqs';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'country',
        'product_interest',
        'product_description',
        'quantity',
        'unit',
        'status',
        'notes',
        'is_archived',
    ];

    protected $casts = [
        'is_archived' => 'boolean',
    ];

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeNew($query)
    {
        return $query->where('status', 'New');
    }

    public function scopeInReview($query)
    {
        return $query->where('status', 'In Review');
    }

    public function scopeQuoted($query)
    {
        return $query->where('status', 'Quoted');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'Closed');
    }

    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'New' => 'danger',
            'In Review' => 'warning',
            'Quoted' => 'info',
            'Closed' => 'success',
            default => 'gray',
        };
    }
}
