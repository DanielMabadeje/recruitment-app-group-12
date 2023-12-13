<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'first_name',
        'last_name',
        'phone_no',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            // $model->id = Str::uuid()->toString();
            $model->role_id=$model->role_id ?: self::createRole();
        });
    }

    public function role() : BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function jobs() : HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function interviews() : HasMany
    {
        // return $this->belongsTo(Interview::class);
        return $this->hasMany(Interview::class);
    }

    public static function createRole(string $name = null): int
    {
        $name = $name ?: 'user';
        return Role::where('name', $name)->select('id')->first()->id;
    }

    public function getFullName() : string
    {
        return ucfirst($this->first_name) .' '. ucfirst($this->last_name);
    }

    public function employee()
    {
        
    }
}
