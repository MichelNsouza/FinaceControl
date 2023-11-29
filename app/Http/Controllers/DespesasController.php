<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesa;

class DespesasController extends Controller
{
    private $despesas;

    public function __construct(Despesa $despesa)
    {
        $this->despesas = $despesa;
    }

    public function index()
    {
        $despesas = $this->despesas->all(); 
        return view('admin.despesas.index', compact('despesas'));
    }

    public function create()
    {
        return view('admin.despesas.create');
    }

    // Método para salvar uma nova despesa
    public function store(Request $request)
    {
        // Valide os dados recebidos do formulário, por exemplo:
        $validatedData = $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
            'data_publicacao' => 'required',
            // Adicione outras regras de validação conforme necessário
        ]);

        // Crie uma nova despesa usando os dados validados
        $this->despesas->create($validatedData);

        // Redirecione para a página de listagem de despesas ou faça outra ação
        return redirect()->route('despesas.index')->with('success', 'Despesa criada com sucesso!');
    }

    // incluir show(), edit(), update(), destroy(), etc.
    public function edit($id)
    {
        $despesa = $this->despesas->findOrFail($id);
        return view('admin.despesas.edit', compact('despesa'));
    }

    public function destroy($id)
    {
        $despesa = $this->despesas->findOrFail($id);
  
        if ($despesa) {
            $despesa->delete();
            return redirect()->route('despesas.index')->with('success', 'Despesa excluída com sucesso!');
        } else {
            return redirect()->route('despesas.index')->with('error', 'Não foi possível encontrar a despesa para exclusão.');
        }
    }
  
    public function update(Request $request, $id)
    {
        $despesa = $this->despesas->findOrFail($id);
  
        if ($despesa) {
            $validatedData = $request->validate([
                'titulo' => 'required',
                'categoria' => 'required',
                'data_publicacao' => 'required|date',
                // Outras regras de validação, se aplicável
            ]);
  
            $despesa->update($validatedData);
  
            return redirect()->route('despesas.index')->with('success', 'Despesa atualizada com sucesso!');
        } else {
            return redirect()->route('despesas.index')->with('error', 'Não foi possível encontrar a despesa para atualização.');
        }
    }
}
