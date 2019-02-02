<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'available',
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(RoomCategory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class);
    }
}
