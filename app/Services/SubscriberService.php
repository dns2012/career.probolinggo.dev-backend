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
    public static function subscribe($request)
    {
        if (! Subscriber::whereEmail($request->email)->count()) {
            Subscriber::create(['email' => $request->email]);

            return ResponseTool::success($request->email, 201);
        }

        return ResponseTool::failure("This email has been subscribed");
    }
}
