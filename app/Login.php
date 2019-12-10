<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'customer_users';
	protected $primaryKey = 'Employee_ID';
	public $timestamps = false;
}
