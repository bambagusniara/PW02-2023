<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Bamba Gusniara Harahap',
            'username' => 'Bamba',
            'password' => 'bamba123',
            'email' => 'bambagusniara@gmail.com',
            'role' => 'Media',
        ],
        [
            'no' => 2,
            'nama' => 'Bagus Harahap',
            'username' => 'Bagus',
            'password' => 'bagus123',
            'email' => 'bagushrp@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 3,
            'nama' => 'Rendi Gumilang',
            'username' => 'Rendi',
            'password' => 'rendi123',
            'email' => 'rendigumilang@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 4,
            'nama' => 'Reza harahap',
            'username' => 'Reza',
            'password' => 'reza123',
            'email' => 'rezahrp17@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 5,
            'nama' => 'Agung sugandi',
            'username' => 'Agung',
            'password' => 'agung555',
            'email' => 'agungsgd123@gmail.com',
            'role' => 'User',
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
