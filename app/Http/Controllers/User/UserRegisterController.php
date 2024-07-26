<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function __invoke(UserCreateRequest $request)
    {
        $user = $request;
        $user->password = Hash::make($request->password);

        $model = User::create($user->all());

        return response()->json(['success'=>true], 200);
    }
}
