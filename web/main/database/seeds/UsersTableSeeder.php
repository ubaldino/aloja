<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'users')->delete();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt( 'asdf' ),
        ]);

        factory( App\User::class , 5 )->create();
    }
}
