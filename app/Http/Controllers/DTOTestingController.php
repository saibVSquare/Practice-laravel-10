<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\DTO\UserDTO2;
use Illuminate\Http\Request;

class DTOTestingController extends Controller
{
    public function save_dto(Request $request)
    {
        // dd($request->get('name'));
        // $user_dto = new UserDTO(
        //     $request->get('name'),
        //     $request->get('email'),
        //     $request->get('age'),
        //     $request->get('phone')
        // );
        $user_dto = new UserDTO($request->all());
        $user_dto = new UserDTO2($request->all());
        dd($user_dto,$user_dto->email);
    }
}
