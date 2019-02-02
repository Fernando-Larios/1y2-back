<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
