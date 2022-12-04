<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class trangChuController extends Controller
{
    public function index()
    {
        return view('index', [
            'currencies' => Currency::orderByDesc('id')->get()
        ]);
    }

    public function login(){
        return view('login');
    }

    public function loginAction(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ], [
            'name.required' => 'Tên không được rỗng',
            'email.required' => 'Email không được rỗng',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được rỗng',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.confirmed' => 'Mật khẩu không khớp',
            'email.unique' => 'Email bị trùng'
        ]);

        $data['password'] = bcrypt($data['password']);

        try {
            User::create($data);

            return redirect()->route('login')->with('success', 'Đăng ký thành công, hảy thử đăng nhập');
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
            return redirect()->back()->with('danger', 'Có lỗi xảy ra, vui lòng thử lại');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
