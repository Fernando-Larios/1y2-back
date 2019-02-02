<?php

use App\Models\Action;
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
        $actions = collect([
            Action::create(['name' => '💦', 'priority' => 1]),
            Action::create(['name' => '💩', 'priority' => 2, 'wait_time' => 60]),
        ]);

        factory(Room::class, 10)->create()->each(function ($room) use ($actions, $users) {
            factory(ReservationQueue::class)->create([
                'action_id' => $actions->pluck('id')->random(),
                'room_id' => $room->id,
                'user_id' => $users->pluck('id')->random(),
            ]);
        });
    }
}
