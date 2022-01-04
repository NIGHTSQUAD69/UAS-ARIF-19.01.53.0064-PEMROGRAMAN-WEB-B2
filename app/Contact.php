<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Contact extends Model
{
    use HasRoles;

    protected $guard_name = 'web';
    protected $fillable = ['name','address','photo','nik','birthdate','age','gender'];
}
