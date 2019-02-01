<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(){
        return view('user.dashboard');
    }

    public function auth(Request $request){

//        User::all();

        $credenciais = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try{
            if(env('PASSWORD_HASH')){
                Auth::attempt($credenciais, false);
            }else{
                //Buscar o e-mail
                $user = User::where(['email' => $request->get('username')])->first();

                //Se não encontrou o e-mail
                if(!$user)
                    throw new \Exception("E-mail informado é inválido");

                //Se a senha for diferente do que a informada.
                if($user->password != $request->get('password'))
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
