<?php


namespace App\Services;


use App\Subscriber;
use App\Tools\ResponseTool;

class SubscriberService
{
    /**
     * Store email subscribers to database
     *
     * @return void
     */
    public static function subscribe($email)
    {
        if (!Subscriber::whereEmail($email)->count()) {
            Subscriber::create(['email' => $email]);

            return ResponseTool::success($email, 201);
        }

        return ResponseTool::failure("This email has been subscribed");
    }
}