<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
    use HasFactory;
    protected $table = 'second';
    public $timestamps = false;
    protected $fillable = ['name'];
}
