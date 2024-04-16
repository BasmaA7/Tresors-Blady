<?php

namespace App\Http\Controllers\Auth;


use App\Repositories\UserRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    protected $userRepository;
    protected $categoryRepository; 


    public function __construct(UserRepositoryInterface $userRepository,CategoryRepositoryInterface $categoryRepository)
    {
        $this->userRepository = $userRepository;
        $this->categoryRepository = $categoryRepository; 

    }

    public function register(Request $request)
    {

        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];
        $categories = $this->categoryRepository->all();

        $user = $this->userRepository->create($userData);
        return redirect('/home')->with('success', 'Registration successful! Welcome to our site.');

    }
    public function showRegistrationForm()
    {
        return view('Auth.register');
    }
}