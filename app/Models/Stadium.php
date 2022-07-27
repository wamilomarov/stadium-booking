<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property double $latitude
 * @property double $longitude
 * @property string $address
 * @property string $photo_path
 * @property string $photo
 * @property boolean $is_working
 *
 * @property Collection $schedule
 * @property Collection $bookings
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

    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
