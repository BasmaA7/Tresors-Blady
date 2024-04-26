<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(int $userId, array $data)
    {
        $user = User::find($userId);

        if (!$user) {
            return false; 
        }

        $user->update($data);
        return true;
    }

    public function find(int $userId)
    {
        return User::find($userId);
    }
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }
   
  }

