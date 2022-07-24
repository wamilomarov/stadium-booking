<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $stadium_id
 * @property string $code
 * @property Carbon $date
 * @property Carbon $start_at
 * @property int $duration
 *
 * @property User $user
 * @property Stadium $stadium
 */
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'stadium_id',
        'user_id',
        'code',
        'date',
        'start_at',
        'duration',
    ];

    protected $dates = [
        'date',
        'start_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stadium(): BelongsTo
    {
        return $this->belongsTo(Stadium::class);
    }
}
