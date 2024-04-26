<?php

namespace App\Http\Controllers\Auth;


use App\Models\Role;
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
      
        $user = $this->userRepository->create($userData);

        // $adminRole = Role::where('name', 'admin')->first();
        // $user->roles()->attach($adminRole);
        $clientRole = Role::where('name', 'client')->first();
        $user->roles()->attach($clientRole);

        return redirect('/home')->with('success', 'Registration successful! Welcome to our site.');

    }
    public function showRegistrationForm()
    {
        $categories = $this->categoryRepository->all();
        return view('Auth.register', compact('categories'));
    }
}