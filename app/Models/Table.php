<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table="tables";
    // protected $primarykey ="id";
    protected $fillable = [
        'table_name',
        'Capacity',
        'status',
        'store_id'
    ];
}
