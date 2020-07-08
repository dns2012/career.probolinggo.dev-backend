<?php

namespace App\Repositories;

use App\Category;
use App\Company;
use App\Services\ImageService;
use Exception;
use Illuminate\Support\Str;

class CompanyRepository
{
    /**
     * Create company.
     *
     * @param  mixed $request
     * @return object
     */
    public static function create($request)
    {
        $company = new Company();
        $company->title = $request->input('title');
        $company->description = $request->input('description');
        $company->image = ImageService::upload(['image' => $request->file('image')]);
        $company->slug = Str::slug($company->title);

        if ($company->save()) {
            return $company;
        }

        throw new Exception('Failed to store company !');
    }

    /**
     * Update company.
     *
     * @param  mixed $request
     * @return object
     */
    public static function update($request, $id)
    {
        $company = Company::findOrFail($id);
        $company->title = $request->input('title');
        $company->description = $request->input('description');
        $company->slug = Str::slug($company->title);

        if ($request->file('image')) {
            $company->image = ImageService::upload(['image' => $request->file('image')]);
        }

        if ($company->save()) {
            return $company;
        }

        throw new Exception('Failed to update company !');
    }
}
