<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [ 'title_en','title_ar','status','is_contact_us','service_id'];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image', 'work_id');
    }

}
