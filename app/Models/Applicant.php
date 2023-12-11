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

    public function displayStatus()
    {
        return 'incoming';
    }

}
