<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PDOException;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        try {
            $data = User::create($request->all());
            return response()->json(['status' => true, 'message' => 'input success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status'=> false, 'message' => 'gagal input data']);
        }
    }

}