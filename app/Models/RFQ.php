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
        'rfq_number',
        'company_name',
        'contact_person',
        'email',
        'phone',
        'service_type',
        'product',
        'quantity',
        'destination',
        'requirements',
        'status',
        'internal_notes',
        'quoted_price',
        'quoted_by',
        'quoted_at',
        'closed_at',
    ];

    protected $casts = [
        'quoted_price' => 'decimal:2',
        'quoted_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($rfq) {
            if (empty($rfq->rfq_number)) {
                $maxId = static::max('id') ?? 0;
                $rfq->rfq_number = 'RFQ-' . str()->padLeft($maxId + 1, 6, '0');
            }
        });
    }

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

    public function getFormattedQuotedPriceAttribute()
    {
        return $this->quoted_price ? '$' . number_format($this->quoted_price, 2) : 'N/A';
    }
}
