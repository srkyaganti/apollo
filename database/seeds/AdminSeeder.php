<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create  admin
        $user = new User();
        
        $user->name = Config::get('app.name');
        $user->email = 'admin@' . strtolower(Config::get('app.name')) . '.com';
        $user->password = Hash::make('password');

        $user->save();
    }
}
