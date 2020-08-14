<?php


namespace App\Services;


use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function registrar($dados): bool {
        $user = new User();
        $user->name = $dados['name'];
        $user->email = $dados['email'];
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($dados['password']);
        return $user->save();
    }
}
