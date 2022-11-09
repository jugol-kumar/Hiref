<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static create(array $array)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'photo',
        'password',
        'about',
        'dob',
        'role',
        'gender',
        'married_status',
        'address',
        'city_id',
        'state_id',
        'country_id',
        'fb_url',
        'twitter_url',
        'youtube_url',
        'linkedin_url',
        'zoom_email',
        'jwt_token',
        'certificate',
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
        'dob' => 'datetime:d/m/Y',
    ];

    /**
     * The attributes that should be bcrypted.
     *
     * @var array<string, string>
     */

    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => bcrypt($value),
        );
    }

    protected function photo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::url($value) : '/images/avatar.png',
        );
    }

    protected function certificate(): Attribute{
        return Attribute::make(get: fn ($value) => $value ? Storage::url($value) : '/images/avatar.png');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function witchLists(){
        return $this->hasMany(Wishlist::class, 'user_id');
    }

    public function courses(){
        return $this->hasMany(Course::class, 'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'user_id');
    }


}
