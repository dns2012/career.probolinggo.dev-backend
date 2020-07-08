<?php


namespace App\Services;


use App\Subscriber;
use App\Tools\ResponseTool;

class SubscriberService
{
    public static function subscribe($email)
    {
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