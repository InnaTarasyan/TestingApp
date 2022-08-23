<?php

namespace App\Http\Controllers;

use App\Contracts\UsersRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $repository;

    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->repository = $usersRepository;
    }

    public function getUsers()
    {
        return $this->repository->users();
    }
}
