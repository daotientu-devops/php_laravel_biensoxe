<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchHistories extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'license_plate_id'
    ];
}
