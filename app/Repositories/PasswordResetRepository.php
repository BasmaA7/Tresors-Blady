<?php

namespace App\Repositories;

use App\Models\PasswordReset;

class PasswordResetRepository implements PasswordResetRepositoryInterface
{
    public function createResetToken($email, $token)
    {
        PasswordReset::updateOrCreate(
            ['email' => $email],
            ['token' => $token]
        );
    }

    public function getUserByEmail($email)
    {
        return PasswordReset::where('email', $email)->first();
    }

    public function deleteResetToken($email)
    {
        PasswordReset::where('email', $email)->delete();
    }
}