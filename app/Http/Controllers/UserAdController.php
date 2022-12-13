<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class UserAdController extends Controller
{
    public function index($user_id)
    {
        $ads = Ad::get()->where('user_id', $user_id);
        if (is_null($ads))
            return response()->json('data not found', 404);
        return response()->json($ads);
    }
}
