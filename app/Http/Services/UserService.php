<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Mail\ResetPasswordMail;
use App\User;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function store($userRequest)
    {
        $data = new User();
        $data->name = $userRequest->name;
        $data->email = $userRequest->email;
        $data->password = Hash::make($userRequest->password);
        $data->phone = $userRequest->phone;
//        $data->role = $userRequest->role;
        $image = $userRequest->image->store('image', 'public');
        $data->image = $image;
        $this->userRepository->store($data);
    }

    function loginHandling($equest)
    {
        $user = [
            'email' => $equest->email,
            'password' => $equest->password
        ];
        return $this->userRepository->loginHandling($user);
    }

    public function findById($id)
    {
        return $this->userRepository->finById($id);
    }

    public function changePassword($user, $request)
    {
        $user->password = Hash::make($request->password);
        if ($request->password == $request->repeatPassword) {
            $this->userRepository->store($user);
            return true;
        }else{
            return false;
        }

    }

    function sendEmailResetPassword($request) {
        $email = $request->email;
        $user = $this->userRepository->findUserByEmail($email);
        if ($user == null) {
            return false;
        }
        $data = [
            'title' => 'Reset password',
            'body' => 'Click link path to reset password.'
        ];
        Mail::to($email)->send(new ResetPasswordMail($data));
        return true;
    }
}
