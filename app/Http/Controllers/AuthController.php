<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RigisterRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];

        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Nếu khớp thông tin thì sẽ đăng nhập thành công, lưu thông tin vào session
            // Điều hướng quay về quản trị
            return redirect()->route('users.list');
        }
        // Nếu không thì quay ngược về login
        return redirect()->route('auth.getLogin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.');
    }


    public function getRigister(){
        
        return view('auth.rigister');
    }

    public function postRigister(RigisterRequest $request){
        $user= new User();
        $user->fill($request -> all());          
        $user->position=2;
        $user->status=0;        
        $user->password=Hash::make($user['password']);
        $data=$request->all();
        $password_confirmation=$data['password_confirmation'];
        // dd($password,$password_confirmation);
        // #4. Lưu
        $user->save();
        return redirect()->route('auth.getLogin');
    }
}
