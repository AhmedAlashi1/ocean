<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [ 'name_en','name_ar','desc_en','desc_ar','image','image2','is_home','is_home_work','title_ar','title_en','content_ar','content_en'];

    public function works()
    {
        return $this->hasMany('App\Models\Work', 'service_id');
    }

    public function softwareSolutionServices()
    {
        return $this->hasMany('App\Models\SoftwareSolutionServices', 'service_id');
    }

}
