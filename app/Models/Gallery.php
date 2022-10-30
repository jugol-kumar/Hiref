<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @method static create(array $array)
 * @method static updateOrCreate(array $array)
 */
class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['imageable_id', 'imageable_type', 'filename'];


    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }



}
