<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Events extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'events';
    protected $fillable = ['name','from','to','description','deleted_at'];
    public function images()
    {
        return $this->hasMany(EventImages::class,'event_id');
    }

    public function primaryImage(){
        return $this->hasOne(EventImages::class,'event_id')->where('primary',1);
    }

}
