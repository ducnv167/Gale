<?php


namespace App\Http\Repositories;


use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function store($data) {
        $data->save();
        \auth()->login($data);
    }

    function loginHandling($user) {
        return Auth::attempt($user);
    }
}
