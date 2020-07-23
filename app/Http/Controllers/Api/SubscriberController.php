<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmailSubscriber;
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
    public function subscribe(StoreEmailSubscriber $request)
    {
        $request->validated();

        return SubscriberService::subscribe($request);
    }
}
