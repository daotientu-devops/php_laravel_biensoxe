<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicensePlate extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'license_plate',
        'brand_name',
        'province_name',
        'url',
        'image_url'
    ];
}
