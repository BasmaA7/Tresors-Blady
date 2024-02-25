<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Crée un nouvel utilisateur.
     *
     * @param array $data Les données de l'utilisateur.
     * @return \App\Models\User L'utilisateur créé.
     */
    public function create(array $data);

    /**
     * Met à jour les informations de l'utilisateur.
     *
     * @param int $userId L'ID de l'utilisateur à mettre à jour.
     * @param array $data Les nouvelles données de l'utilisateur.
     * @return bool True si la mise à jour réussit, sinon false.
     */
    public function update(int $userId, array $data);

    /**
     * Récupère un utilisateur par son ID.
     *
     * @param int $userId L'ID de l'utilisateur.
     * @return \App\Models\User|null L'utilisateur trouvé, ou null s'il n'existe pas.
     */
    public function find(int $userId);

    // Ajoutez d'autres signatures de méthodes si nécessaire
}
