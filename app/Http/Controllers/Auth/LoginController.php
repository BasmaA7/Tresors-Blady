<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    protected $userRepository;
    protected $categoryRepository; // Ajoutez cette ligne


    public function __construct(UserRepositoryInterface $userRepository,CategoryRepositoryInterface $categoryRepository)
    {
        $this->userRepository = $userRepository;
        $this->categoryRepository = $categoryRepository; 

        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
        $categories = $this->categoryRepository->all();

        return view('Auth.login',compact('categories'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}