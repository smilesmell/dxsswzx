<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    use HasFactory;
    protected $table = 'third';
    public $timestamps = false;
    protected $fillable = ['third_name','click'];
}
