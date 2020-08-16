<?php


namespace App\Services;


use App\Exceptions\ErrorException;
use App\Model\Funcionario;

class FuncionarioService
{
    public function listAll() {
        return Funcionario::with('endereco')->get();
    }

    public function show($id) {
        return Funcionario::with('endereco')->find($id);
    }

    public function create($data, $endereco) {
        $funcionario = new Funcionario();

        $funcionario->nome = $data['nome'];
        $funcionario->idade = $data['idade'];
        $funcionario->cargo = $data['cargo'];
        $funcionario->salario = $data['salario'];

        if (!$funcionario->save()) return null;

        return $funcionario->endereco()->create($endereco);
    }

    public function update($id, $data, $endereco) {
        $funcionario = Funcionario::find($id);

        if (!$funcionario->update($data)) return null;

        return $funcionario->endereco()->update($endereco);
    }

    public function destroy($id) {
        $funcionario = Funcionario::find($id);

        if (!$funcionario)
            throw new ErrorException("Falha ao deletar funcionário! O funcionário informado não existe!");

        return $funcionario->delete();
    }
}
