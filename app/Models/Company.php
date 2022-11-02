<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @method static findOrfail($id)
 * @method static create(array $data)
 */
class Company extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    protected $guarded = ['id'];

    protected $dates = ['starting_date'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }



    public function photos(): MorphMany
    {
        return $this->morphMany(Gallery::class, 'imageable');
    }

    public function companyCity(){
        return $this->belongsTo(City::class, 'city');
    }


}
