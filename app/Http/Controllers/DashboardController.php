<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Company;
use App\Admin;
class DashboardController extends Controller
{
    public function index() {

        return view('dashboard.index', [
            'postCount' => Post::count(),
            'companyCount' => Company::count(),
            'adminCount' => Admin::admin()->count(),
        ]);
    }
}
