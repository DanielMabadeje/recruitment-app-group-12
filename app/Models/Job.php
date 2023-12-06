<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    const OPEN = 1;
    const CLOSED = 2;

    public $statusList = [
        self::OPEN => 'Open',
        self::CLOSED => 'Closed',
    ];

    public function displayStatus()
    {
        return 'incoming';
    }

    public function open()
    {
        return $this->update(['status' => self::OPEN]);
    }

    public function close()
    {
        return $this->update(['status' => 0]);
    }

    public function isOpen(): bool
    {
        return $this->status === self::OPEN;
    }

    public function isClosed(): bool
    {
        return $this->status === self::CLOSED;
    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', 0);
    }

    public function scopeClosed(Builder $query)
    {
        return $query->where('status', 0);
    }

    public function scopeOpen(Builder $query)
    {
        return $query->where('status', 1);
    }
}
