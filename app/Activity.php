<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'subject',
        'content',
        'url',
        'method',
        'ip',
        'agent',
        'user_id'
    ];
}
