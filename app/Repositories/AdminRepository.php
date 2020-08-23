<?php

namespace App\Repositories;

use App\Services\ImageService;
use App\Admin;
use Exception;
use Illuminate\Support\Facades\Hash;

class AdminRepository
{
    /**
     * Create admin / user.
     *
     * @param  mixed $request
     * @return object
     */
    public static function create($request)
    {
        $user = new Admin();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->role = $request->input('role');
        $user->avatar = ImageService::upload(['image' => $request->file('avatar')]);

        if ($user->save()) {
            return $user;
        }

        throw new Exception('Failed to store user !');
    }

    /**
     * Update admin / user.
     *
     * @param  mixed $request
     * @return object
     */
    public static function update($request, $id)
    {
        $user = Admin::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        if ($request->input('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->file('avatar')) {
            $user->avatar = ImageService::upload(['image' => $request->file('avatar')]);
        }

        if ($user->save()) {
            return $user;
        }

        throw new Exception('Failed to update user !');
    }
}
