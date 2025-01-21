<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = [ 'desc_en','desc_ar','service_name_en','service_name_ar'];

//    public function service()
//    {
//        return $this->belongsTo('App\Models\Service', 'service_id');
//    }
}
