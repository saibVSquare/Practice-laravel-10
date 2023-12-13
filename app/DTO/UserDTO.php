<?php

namespace App\DTO;

class UserDTO
{

    public string $name;
    public string $email;
    public int $age;
    public string $phone;


    // public function __construct(string $name, string $email, int $age, string $phone)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->age = $age;
    //     $this->phone = $phone;
    // }

    public function __construct(array $request_data)
    {
        $this->name = $request_data['name'];
        $this->email = $request_data['email'];
        $this->age = $request_data['age'];
        $this->phone = $request_data['phone'];
    }
}
