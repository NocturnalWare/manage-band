<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    protected $rules = [];
    protected $fillable = ['first_name', 'last_name', 'email', 'zip', 'type'];
    protected $table = 'sign_up';
}
