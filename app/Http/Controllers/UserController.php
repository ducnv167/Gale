<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function create() {
        return view('users.register');
    }

    function store(UserRequest $userRequest) {
        $this->userService->store($userRequest);
        return redirect()->route('home');
    }

    function login() {
        return view('users.login');
    }

    function loginHandling(UserRequest $userRequest) {
        if ($this->userService->loginHandling($userRequest)) {
            return redirect()->route('home');
        }
        return back();
    }
}
