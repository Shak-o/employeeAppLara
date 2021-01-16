<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public $fillable = ['component_name','quantity'];
    public $table = 'salaries';
    public $timestamps = true;
}
