<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'category', 'company'
    ];

    /**
     * One to one relation Category.
     *
     * @return void
     */
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    /**
     * One to one relation Company
     *
     * @return void
     */
    public function company()
    {
        return $this->hasOne('App\Company', 'id', 'company_id');
    }
}
