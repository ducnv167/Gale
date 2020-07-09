<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\User;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        dd($request->oldPassword);
        if ($user->password == Hash::make($request->oldPassword)) {

            $user->password = Hash::make($request->password);
            if ($request->password == $request->repeatPassword) {
                $this->userRepository->store($user);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    public function update($request, $user)
    {
        $user->name = $request->name;
        $user->phone = $request->phone;
        if ($request->hasFile('image')) {
            $currentImage = $user->image;
            if ($currentImage) {
                Storage::delete('/public/' . $currentImage);
            }
            $image = $request->file('image');
            $path = $image->store('users/images', 'public');
            $user->image = $path;
        }
        $this->userRepository->store($user);
        return true;
    }
}
