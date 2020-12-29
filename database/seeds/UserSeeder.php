<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123456');
        $user->type = "administrador";
        $user->save();

        $user = new User();
        $user->name = 'Silva';
        $user->email = 'silva@mail.com';
        $user->password = Hash::make('12345678');
        $user->type = "normal";
        $user->save();
    }
}
