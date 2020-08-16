<?php

namespace App\Http\Controllers;

use App\Exceptions\ErrorException;
use App\Http\Requests\CreateFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Services\EnderecoService;
use App\Services\FuncionarioService;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function listAll() {
        $funcionarioService = new FuncionarioService();
        return response()->json($funcionarioService->listAll());
    }

    public function show($id) {
        $funcionarioService = new FuncionarioService();
        return response()->json($funcionarioService->show($id));
    }

    public function create(CreateFuncionarioRequest $request) {
        $funcionarioService = new FuncionarioService();

        $funcionario = $funcionarioService->create(
            $request->all(['nome', 'idade', 'cargo', 'salario']),
            $request->all(['endereco', 'bairro', 'cidade', 'estado', 'cep'])
        );

        if ($funcionario == null)
            throw new ErrorException("Falha ao cadastrar funcionario!");

        return response()->json(["message" => "Funcionário cadastrado com sucesso!"], 201);
    }

    public function destroy($id) {
        $funcionarioService = new FuncionarioService();
        if (!$funcionarioService->destroy($id))
            throw new ErrorException("Falha ao deletar funcionario!");

        return response()->json(["message" => "Funcionário deletado com sucesso!"], 200);
    }

    public function update($id, UpdateFuncionarioRequest $request) {
        $funcionarioService = new FuncionarioService();

        $updated = $funcionarioService->update(
            $id,
            $request->all(['nome', 'idade', 'cargo', 'salario']),
            $request->all(['endereco', 'bairro', 'cidade', 'estado', 'cep'])
        );

        if ($updated == null)
            throw new ErrorException("Falha ao atualizar funcionario!");

        return response()->json(["message" => "Funcionário atualizado com sucesso!"], 200);
    }
}
