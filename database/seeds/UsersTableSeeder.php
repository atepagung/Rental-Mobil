<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

        $user = new User;
        $user->email = "admin@email.com";
        $user->password = bcrypt('secret');
        $user->name = "admin";
        $user->phone = "089000000888";
        $user->date_of_birth = $faker->date();
        $user->gender = 0;
        $user->address = $faker->address;
        $user->postal_code = $faker->postcode;
        $user->role_id = 1;
        $user->discount = 0;
        $user->save();

        $user = new User;
        $user->email = "user@email.com";
        $user->password = bcrypt('secret');
        $user->name = "user";
        $user->phone = "089000000888";
        $user->date_of_birth = $faker->date();
        $user->gender = 0;
        $user->address = $faker->address;
        $user->postal_code = $faker->postcode;
        $user->role_id = 2;
        $user->discount = 0;
        $user->save();

        $user = new User;
        $user->email = "agen@email.com";
        $user->password = bcrypt('secret');
        $user->name = "agen";
        $user->phone = "089000000888";
        $user->date_of_birth = $faker->date();
        $user->gender = 0;
        $user->address = $faker->address;
        $user->postal_code = $faker->postcode;
        $user->role_id = 3;
        $user->discount = 0;
        $user->save();
    }
}
