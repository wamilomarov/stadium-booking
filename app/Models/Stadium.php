<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property double $latitude
 * @property double $longitude
 * @property string $address
 * @property string $photo_path
 * @property string $photo
 * @property boolean $is_working
 */
class Stadium extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'address',
        'photo_path',
        'is_working',
    ];
}
