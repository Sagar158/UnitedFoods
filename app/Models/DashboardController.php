<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardController extends Model
{
    use HasFactory;

    public $title = 'Dashboard';

    public function index()
    {
      $title = $this->title;
      return view('dashboard',compact('title'));
    }
}
