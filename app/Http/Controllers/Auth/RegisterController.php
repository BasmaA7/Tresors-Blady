<?php

namespace App\Http\Controllers\Auth;


use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(Request $request)
    {

        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];

        $user = $this->userRepository->create($userData);
        return redirect('/home')->with('success', 'Registration successful! Welcome to our site.');

    }
    public function showRegistrationForm()
    {
        return view('Auth.register');
    }
}