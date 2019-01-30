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

        User::all();

        $credenciais = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try{
            Auth::attempt($credenciais, false);

            return redirect()->route('user.dashboard');
        }catch (\Exception $e){
            return $e->getMessage();
        }
//        dd($request->all());

    }
}
