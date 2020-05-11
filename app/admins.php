<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class admins extends Model implements Authenticatable
{
    //
    use notifiable;

    protected $guard = 'admin';

    protected $fillable[
    	'ad_firstname' , 'ad_email' , 'ad_password', 'job_tittle'
   	];

    protected $hidden[
    	'ad_password','remember_token',
    ];
}
