<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subscriber;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->email;
        $checkEmail = Subscriber::whereEmail($email)->count();
        if ($checkEmail == 0) {
            Subscriber::create([
                'email' => $email
            ]);

            return ResponseTool::success($email, 201);
        }

        return ResponseTool::failure("This email has been subscribed");
    }
}
