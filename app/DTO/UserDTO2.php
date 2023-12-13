<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;
use Illuminate\Http\Request;


class UserDTO2 extends DataTransferObject
{
    public int $id = 0;
    public ?string $name = null;
    public ?string $email = null;
    public ?string $phone = null;   
    public int $age = 0;
    public array $supplier_name = ['en' => '', 'ar' => ''];


    public function __construct($args)
    {
        parent::__construct($args);
    }


    public static function fromRequest(Request $params): self
    {
        $self = collect([
            'id' => $params->input('user_id'),
            'name' => $params->input('name'),
            'email' => $params->input('email'),
            'phone' => $params->input('phone'),
            'age' => $params->input('age'),
            'image' => $params->filled('supplier_name') ? $params->input('supplier_name') : null
        ]);

        return new self($self->toArray());
    }
}
