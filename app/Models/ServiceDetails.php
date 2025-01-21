<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'title_en', 'title_ar', 'desc_en', 'desc_ar'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    //softwareSolutionServices

    public function softwareSolutionServices()
    {
        return $this->hasMany(SoftwareSolutionServices::class, 'service_details_id');
    }


}
