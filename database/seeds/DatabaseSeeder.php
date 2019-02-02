<?php

use App\Models\ReservationQueue;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class, 5)->create();

        factory(Room::class, 10)->create()->each(function ($room) use ($users) {
            factory(ReservationQueue::class)->create([
                'room_id' => $room->id,
                'user_id' => $users->pluck('id')->random(),
            ]);
        });
    }
}
