<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    // api output
    public function transform(User $user)
    {
        return [
            'name'      => $user->name,
            'email'     => $user->email,
            'join_at'   => $user->created_at->diffForHumans(),
        ];
    }
}
