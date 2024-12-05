<?php

namespace App\Http\Controllers;
use App\Models\User;
use BackedEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $user = User::get();

        return view('welcome', ['user' => $user ]);
    }

    public function store(Request $request){
        $request->validate(
            [
                'file' => 'required|mimes:csv,txt|max:2048'
            ],
            [
                'file.required' => 'O Seguinte campo deve ser preenchido!.',
                'file.max' => 'Aquivo pesado demais.',
                'file.mimes' => 'A estenssão do arquivo deve ser : .CSV',
                ]
        );
        $emailCadastrado = false;
        $headers = ['name', 'email', 'password'];
        $numRegistros = 0;
        $dadosDoArquivo = array_map('str_getcsv', file($request->file('file')));

        foreach ($dadosDoArquivo as $keyData => $row) {

            $valores = explode(';', $row[0]);

            foreach($headers as $key => $header){

                if($header == "email"){

                    if(User::where('email', $valores[$key])->first()){

                        $emailCadastrado .= $valores[$key] . "<br>";

                    }
                }
                $arrayVal[$keyData][$header] = $valores[$key];
            }

            $numRegistros ++;

        }

        if($emailCadastrado){
            return back()->with('error', 'O(s) seguinte(s) email(s) já está (ão) cadastrado(s):<br>' . $emailCadastrado);
        }

        /*if($header == 'password'){

           $arrayVal[$keyData][$header] = Hash::make($arrayVal[$keyData]['password'],
            ['rounds' => 12]);


        }*/

        User::insert($arrayVal);
        return Back()->with('success',  $numRegistros .' Dado (s) inserido (s) com sucesso.');
    }




    public function editar(){
        return view ('editar');
    }
}
