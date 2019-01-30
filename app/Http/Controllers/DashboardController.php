<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(){
        return "Estamos na index";
    }

    public function auth(Request $request){

        $user = User::all();

        $credenciais = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try{
            if(env('PASSWORD_HASH')){
                Auth::attempt($credenciais, false);

            }else{
                User::where(['email' => $request->get('username')])->first();

                if(!$user)
                    throw new \Exception("E-mail informado é inválido");

                if($user->password == $request->get('password'));
                    throw new \Exception("A senha informada é inválida");

                    Auth::login($user);
            }

            return redirect()->route('user.dashboard');

        }catch (\Exception $e){
            return $e->getMessage();
        }
//        dd($request->all());

    }
}
