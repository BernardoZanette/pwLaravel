<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index() {
        $dados = Usuario::all();
        
        return view('usuario.index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('usuario.cadastrar');
    }

    public function gravar(Request $form) {
        $form['admin'] = isset($form['admin']);
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|min:5|email|unique:usuarios',
            'login' => 'required',
            'senha' => 'required|min:5',
            'admin' => 'boolean'
        ]);

        $dados['senha'] = Hash::make($dados['senha']);
        Usuario::create($dados);
        
        return redirect()->route('usuario'); 
    }

    public function editarView(Usuario $usuario) {
        return view('usuario/editar', ['usuario' => $usuario]);
    }

    public function editar(Request $form, Usuario $usuario) {
        $form['admin'] = isset($form['admin']);
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|min:5|email',
            'login' => 'required',
            'senha' => 'required|min:5',
            'admin' => 'boolean'
        ]);

        $dados['senha'] = Hash::make($dados['senha']);
        
        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuario');
    }

    public function apagar(Usuario $usuario) {
        return view('usuario.apagar', [
            'usuario' => $usuario,
        ]);
    }

    public function deletar(Usuario $usuario) {
        $usuario->delete();
        return redirect()->route('usuario');
    }

    public function login(Request $form) {
        if ($form->isMethod('POST')) {
            $credenciais  = $form->validate([
                "login" => "required",
                "senha" => "required"
            ]);
            if (Auth::attempt(['login' => $credenciais['login'], 'password' => $credenciais['senha']])) {
                return redirect()->route('index');
            } else {
                return redirect()->route('login')
                    ->with('erro', 'Usuário ou senha inválidos.');
            }
        }

        return view('usuario.login');
    }
    
    public function logout(Request $form) {
        Auth::logout();
        return redirect()->route('index');
    }
}