<?php

namespace App\Repositories;

interface PasswordResetRepositoryInterface
{
    public function createResetToken($email, $token);
    public function getUserByEmail($email);
    public function deleteResetToken($email);
}



