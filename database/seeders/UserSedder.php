<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '20touhidul@gmail.com')->first();
        if (is_null($user)) {
            $user = New User();
            $user->name = "Md Touhidul Islam";
            $user->email = "20touhidul@gmail.com";
            $user->password = Hash::make('2544@#TaM');
            $user->save();
        }

    }
}
