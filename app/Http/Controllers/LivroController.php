<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Livro;
use App\Editora;
class LivroController extends Controller
{
    //
    public function index()
    {
      $livros = Livro::all();
      return view('livro.index', compact('livros'));
    }
    public function cria()
    {
      $editoras = Editora::all();
      return view('livro.cria', compact('editoras'));
    }
    public function armazena()
    {
      Livro::create(request()->all());
      return redirect('/livros');
    }
    public function edita(Livro $livro)
    {
      $editoras = Editora::all();
      return view('livro.edita', compact('livro','editoras'));
    }
    public function atualiza(Livro $livro)
    {
      $livro->atualiza(request()->all());
      return redirect('/livros');
    }
    public function show(Livro $livro)
        {
          //var_dump ($editora);
          return view('livro.show', compact('livro'));
        }
    #public function edita(Livro $livro)
    #    {
                  //var_dump ($editora);
              //$editora = Editora::find($id);
    #      return view('livro.edita', compact('livro'));
    #    }

  #  public function atualiza(Livro $livro)
  #      {
            //$editora = Editora::find($id);
            //$editora->fill(request()->all());
            //$editora->nome = request('nome');
            //$editora->email = request('email');
  #          $livro->fill(request()->all());
          //  var_dump(request()->all());
  #          $livro->save();
  #          return redirect('/livros');
  #        }
}
