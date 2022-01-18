<?php

use App\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holidays = config('db.holidays');

        
        foreach ($holidays as $holiday) {
        $_holiday = new Holiday();
        $_holiday->image = $holiday['image'];
        $_holiday->city_destination = $holiday['city_destination'];
        $_holiday->city_departure = $holiday['city_departure'];
        $_holiday->max_n_person = $holiday['max_n_person'];
        $_holiday->date_departure = $holiday['date_departure'];
        $_holiday->date_destination = $holiday['date_destination'];
        $_holiday->discount = $holiday['discount'];
        $_holiday->is_available = $holiday['is_available'];
        $_holiday->save();
        }

    }
}
