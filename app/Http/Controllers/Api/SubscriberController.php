<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SubscriberService;
use App\Subscriber;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Store email subscribers.
     *
     * @return void
     */
    public function subscribe(Request $request)
    {
        $email = $request->email;
        $subscribe = SubscriberService::subscribe($email);
        return $subscribe;
    }
}
