<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Crée un nouvel utilisateur.
     *
     * @param array $data 
     * @return \App\Models\User 
     */
    public function create(array $data);

    /**
     * Met à jour les informations de l'utilisateur.
     *
     * @param int $userId
     * @param array $data 
     * @return bool 
     */
    public function update(int $userId, array $data);

    /**
     * Récupère un utilisateur par son ID.
     *
     * @param int $userId
     * @return \App\Models\User|null 
     */
    public function find(int $userId);
    public function findByEmail($email);


}
