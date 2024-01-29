<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $table = 'teams';

    protected $fillable = ['name','designation','image','prefix'];

    public static $prefix = [1 => 'Mr', 2 => 'Mrs', 3 => 'Ms'];

}
