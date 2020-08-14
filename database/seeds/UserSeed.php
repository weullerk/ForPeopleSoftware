<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name'     => 'Administrador',
            'email'    => 'admin@forpeoplesoftware.com',
            'email_verified_at'    => Carbon::now(),
            'password' => Hash::make('123456'),
        ));
    }
}
