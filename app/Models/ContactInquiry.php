<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'message',
        'status',
        'internal_notes',
        'is_read',
        'is_starred',
        'responded_at',
        'closed_at',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'is_starred' => 'boolean',
        'responded_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    protected $dates = [
        'responded_at',
        'closed_at',
        'created_at',
        'updated_at',
    ];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }

    public function scopeStarred($query)
    {
        return $query->where('is_starred', true);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeBySubject($query, $subject)
    {
        return $query->where('subject', $subject);
    }

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeInProgress($query)
    {
        return $query->where('status', 'in_progress');
    }

    public function scopeResponded($query)
    {
        return $query->where('status', 'responded');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    public function scopeSpam($query)
    {
        return $query->where('status', 'spam');
    }

    public function markAsRead()
    {
        $this->update(['is_read' => true]);
    }

    public function markAsUnread()
    {
        $this->update(['is_read' => false]);
    }

    public function star()
    {
        $this->update(['is_starred' => true]);
    }

    public function unstar()
    {
        $this->update(['is_starred' => false]);
    }

    public function updateStatus($status)
    {
        $this->update([
            'status' => $status,
            'responded_at' => $status === 'responded' ? now() : $this->responded_at,
            'closed_at' => $status === 'closed' ? now() : $this->closed_at,
        ]);
    }

    public function getSubjectLabelAttribute()
    {
        $subjects = [
            'general' => 'General Inquiry',
            'sales' => 'Sales Inquiry',
            'support' => 'Support Request',
            'partnership' => 'Partnership Opportunity',
            'career' => 'Career Inquiry',
            'other' => 'Other',
        ];

        return $subjects[$this->subject] ?? $this->subject;
    }

    public function getStatusLabelAttribute()
    {
        $statuses = [
            'new' => 'New',
            'in_progress' => 'In Progress',
            'responded' => 'Responded',
            'closed' => 'Closed',
            'spam' => 'Spam',
        ];

        return $statuses[$this->status] ?? $this->status;
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'new' => 'danger',
            'in_progress' => 'warning',
            'responded' => 'success',
            'closed' => 'gray',
            'spam' => 'gray',
        ];

        return $colors[$this->status] ?? 'gray';
    }
}
