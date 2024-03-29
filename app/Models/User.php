<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'contributor',
        'name',
        'username',
        'email',
        'password',
    ];
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => $query->where('name', 'like', '%' . $search . '%')
        );
    }

    // protected $with = ['role', 'registration', 'articles'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }

    public function hasRegistered($information_id)
    {
        return $this->registration()->where('information_id', $information_id)->exists();
    }

    public function informations()
    {
        return $this->hasMany(Information::class);
    }

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
}