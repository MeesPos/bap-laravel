<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 200; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = Hash::make($faker->password);
            $user->save();
        }
    }
}
