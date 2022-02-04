<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 30; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'ph_no' => '959123456789',
                'address' => Str::random(10),
                'NRC_image' => Str::random(10),
                'member_image' => Str::random(10),
                'expiry_date' => Carbon::now()->addYear(1),
                'password' => Hash::make('password'),
            ]);
        }

    }
}
