<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

    public function changePassword(Request $request,$id){
        $user = $this->userService->findById($id);
        if ($this->userService->changePassword($user,$request)){
            Toastr::success('Reset password successful!!!', 'Success', ["positionClass" => "toast-top-left"]);
        }else{
            Toastr::error('Password not same!!!', 'Fail', ["positionClass" => "toast-top-left"]);
        }
        return back();
    }

    public function findById($id){
        $user =$this->userService->findById($id);
        return view('users.edit' ,compact('user'));
    }

    public function update(Request $request,$id){
        $user= $this->userService->findById($id);
        if ($this->userService->update($request,$user)){
            Toastr::success('Update profile successful!!!', 'Success', ["positionClass" => "toast-top-left"]);
        }else{
            Toastr::error('Update profile fail', 'Fail', ["positionClass" => "toast-top-left"]);
        }

        return redirect()->route('home');
    }
}

