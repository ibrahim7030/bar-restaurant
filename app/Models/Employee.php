<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table="employees";
    // protected $primarykey ="id";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'birthday',
        'position-id',
        'phone',
        'mother_name',
        'father_name',
        'country',
        'city',
        'address',
        'image'
    ];
}
