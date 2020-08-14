<?php

namespace App\Http\Controllers;

use App\Exceptions\ErrorException;
use App\Http\Requests\RegistrarRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registrar(Request $request)
    {
        $userService = new UserService();
        if (!$userService->registrar($request->all()))
            throw new ErrorException("Falha ao cadastrar usuário");

        return response('Usuário cadastrado com sucesso!', 201);
    }
}
