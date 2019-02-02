<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationQueue extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'room_id',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
