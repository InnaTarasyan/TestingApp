<?php

namespace App\Contracts;
use App\Models\User;

class UsersRepository implements UsersRepositoryInterface
{
    public function users()
    {
        return User::all();
    }
}