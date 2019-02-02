<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'priority',
        'wait_time'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(ReservationQueue::class);
    }
}
