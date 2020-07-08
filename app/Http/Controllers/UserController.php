<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function create()
    {
        return view('users.register');
    }

    function store(UserRequest $userRequest)
    {
        $this->userService->store($userRequest);
        Toastr::success('Register successful!!!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    function login()
    {
        return view('users.login');
    }

    function loginHandling(Request $request)
    {
        if ($this->userService->loginHandling($request)) {
            Toastr::success('Login successful!!!', 'Success', ["positionClass" => "toast-top-right"]);
            return back();
        } else {

            Toastr::error('Username or password is invalid!!!', 'Fail', ["positionClass" => "toast-top-right"]);
            return back();
        }
    }

    function logout() {
        Auth::logout();
        Toastr::success('See you again:))', 'Logout successful!!!', ["positionClass" => "toast-top-right"]);
        return back();
    }

    public function rentHouse()
    {
        return view('rent-house.view');
    }
}

