<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\User;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function store($userRequest) {
        $data = new User();
        $data->name = $userRequest->name;
        $data->email = $userRequest->email;
        $data->password = $userRequest->password;
        $data->phone = $userRequest->phone;
        $data->role = $userRequest->role;
        $image = $userRequest->image->store('image','public');
        $data->image = $image;
        $this->userRepository->store($data);
    }


}
