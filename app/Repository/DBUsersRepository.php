<?php

namespace App\Repository;

use App\RepositoryInterface\UsersRepositoryInterface;
use App\User;

class DBUsersRepository implements UsersRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
    public function create($atributes)
    {
        return User::create($atributes);
    }

}
