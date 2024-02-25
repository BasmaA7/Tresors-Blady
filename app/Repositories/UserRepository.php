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
            return false; // L'utilisateur n'a pas été trouvé
        }

        $user->update($data);
        return true;
    }

    public function find(int $userId)
    {
        return User::find($userId);
    }

    // Add other methods if necessary
}

