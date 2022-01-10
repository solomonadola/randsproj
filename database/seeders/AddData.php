<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 100; $i++) {
            DB::table('houses')->insert([
                'owner_id' => 1,
                'house_id' => $i,
                'location' => 'adama',
                'image' => Str::random(10),
                'for' => 'rental',
                'status' => 'not rented',
                'bed_rooms' => 3,
                'bath_rooms' => 2,
                'size' => '20x30',
                'title' => 'beautful house for rental',
                'description' => Str::random(100),

            ]);
        }
    }
}
