<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Http\Controllers\Controller;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Get all list company.
     *
     * @return array
     */
    public function getAll()
    {
        return ResponseTool::success(Company::orderBy('created_at', 'desc')
            ->withCount('post')
            ->paginate(8));
    }

    /**
     * Get company by ID.
     *
     * @param  mixed $id
     * @return object
     */
    public function getById($id)
    {
        return ResponseTool::success(Company::findOrFail($id));
    }
}
