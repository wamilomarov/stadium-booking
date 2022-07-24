<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $weekday
 * @property boolean $is_open
 * @property Carbon|null $opens_at
 * @property Carbon|null $closes_at
 *
 * @property Stadium $stadium
 */
class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'stadium_id',
        'weekday',
        'is_open',
        'opens_at',
        'closes_at',
    ];

    protected $dates = [
        'opens_at',
        'closes_at',
    ];

    public function stadium(): BelongsTo
    {
        return $this->belongsTo(Stadium::class);
    }
}
