<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function store(): JsonResponse
    {
        $data = Http::get('https://randomuser.me/api', [
            'results' => 5000,
        ]);

        $users = collect($data['results']);
        $startCount = User::count();
        $users->each(function ($user) {
            User::query()->upsert([
                'first_name' => $user['name']['first'],
                'last_name' => $user['name']['last'],
                'email' => $user['email'],
                'age' => $user['dob']['age'],
            ], ['first_name', 'last_name']);
        });

        $endCount = User::count();
        $addedCount = $endCount - $startCount;

        return response()->json([
            'all' => $endCount,
            'added' => $addedCount,
            'updated' => $users->count() - $addedCount,
        ]);
    }
}
