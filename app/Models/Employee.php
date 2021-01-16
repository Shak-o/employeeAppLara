<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable = ['name','surname','p_id','org_id'];
    public $table = 'employees';
    public $timestamps = true;
}
