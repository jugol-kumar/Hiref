<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static create(array $array)
 * @method static findOrFail(int|string|null $id)
 * @method static where(string $string, $phone)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $userPhoto;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
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
        'is_verified',
        'sms_otp',
        'email_verified_at',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
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

    public function userPhoto(){
        return $this->photo;
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

    public function recruiter(){
        return $this->hasOne(Recruiter::class, 'user_id');
    }
    public function seeker(){
        return $this->hasOne(SeekerProfile::class, 'user_id');
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function profileComplete(){
        $status = 0;
        $this->name != null ? $status += 5 : $status += 0;
        $this->email_verified_at != null ? $status += 5 : $status += 0;
        $this->phone != null ? $status += 10 : $status += 0;
        $this->is_verified ? $status += 10 : $status += 0;
        $this->city_id && $this->address != null ? $status += 5 : $status += 0;
        $this->seeker->category_id && $this->seeker->subcategories != null ? $status += 5 : $status += 0;
        $this->seeker->division_id != null ? $status += 5 : $status += 0;
        $this->seeker->district_id != null ? $status += 5 : $status += 0;
        $this->seeker->upozillas != null ? $status += 5 : $status += 0;
        $this->seeker->exp_min_sal && $this->seeker->exp_max_sal != null ? $status += 5 : $status += 0;
        $this->seeker->education_id != null
        && $this->seeker->education_label_id != null
        && $this->seeker->uni_end_date != null
        && $this->seeker->uni_start_date != null
        && $this->seeker->university != null ? $status += 10 : $status += 0;
        $this->seeker->resume != null ? $status += 10 : $status += 0;
        $this->photo != null ? $status += 5 : $status += 0;
        $this->about != null ? $status += 5 : $status += 0;

        return $status;
    }





}
