<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Interview extends Model
{
    use HasFactory;
    const SCHEDULED = 1;
    const COMPLETED = 2;
    const PENDING = 0;

    public $statusList = [
        self::PENDING => 'Pending',
        self::SCHEDULED => 'Scheduled',
        self::COMPLETED => 'Completed',
    ];

    public function displayStatus()
    {
        return 'incoming';
    }

    public function schedule()
    {
        return $this->update(['status' => self::SCHEDULED]);
    }

    public function complete()
    {
        return $this->update(['status' => self::COMPLETED]);
    }

    public function isScheduled(): bool
    {
        return $this->status === self::SCHEDULED;
    }

    public function isCompleted(): bool
    {
        return $this->status === self::COMPLETED;
    }

    public function isPending(): bool
    {
        return $this->status === self::PENDING;
    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', 0);
    }

    public function scopeCompleted(Builder $query)
    {
        return $query->where('status', 2);
    }

    public function scopeScheduled(Builder $query)
    {
        return $query->where('status', 1);
    }
    
}
