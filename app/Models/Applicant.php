<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = [];
    const INREVIEW = 1;
    const ACCEPTED = 2;
    const REJECTED = 3;
    const APPLIED = 0;

    public $statusList = [
        self::APPLIED => 'Applied',
        self::INREVIEW => 'Review',
        self::ACCEPTED => 'Accepted',
        self::REJECTED => 'Rejected',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function interview()
    {
        return $this->belongsTo(Interview::class);
    }

    public function accept()
    {
        return $this->update(['status' => self::ACCEPTED]);
    }

    public function reject()
    {
        return $this->update(['status' => self::REJECTED]);   
    }

    public function isAccepted(): bool
    {
        return $this->status === self::ACCEPTED;
    }

    public function isRejected(): bool
    {
        return $this->status === self::REJECTED;
    }

    public function displayStatus()
    {
        $status= $this->statusList[$this->status];
        switch ($this->status) {
            case '0':
                return "<div class='badge badge-pill badge-secondary'>$status</div>";
                break;
            case '1':
                return "<div class='badge badge-pill badge-primary'>$status</div>";
                break;
            case '2':
                return "<div class='badge badge-pill badge-success'>$status</div>";
                break;
            case '3':
                return "<div class='badge badge-pill badge-danger'>$status</div>";
                break;
            
            default:
                return "<div class='badge badge-pill badge-danger'>Omor your own bad ooh🥲</div>";
                break;
        }

    }

    public function displayAppliedStatus()
    {
        $status= $this->statusList[$this->status];
        return "<div class='status_btn'>$status</div>";
    }

}
