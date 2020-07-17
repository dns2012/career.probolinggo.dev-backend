<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SubscriberService;
use App\Subscriber;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    /**
     * Store email subscribers.
     *
     * @return void
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return ResponseTool::failure('The email must be a valid email address.');
        }

        return SubscriberService::subscribe($request->input('email'));
    }
}
