<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static updateOrCreate(array $array)
 * @method static where(string $string, int|string|null $id)
 */
class SeekerProfile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


}
