<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommonRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware("is_not_login");
    }

    public function getLogin() {
        return view("auth.login");
    }

    public function postLogin(CommonRequest $request) {
        $loginCheck = Auth::attempt(["email" => $request->email, "password" => $request->password]);
        if($loginCheck === true) {
            return redirect()->route("root_folder");
        }
    }
}
