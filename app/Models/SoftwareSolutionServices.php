<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareSolutionServices extends Model
{
    use HasFactory;

    //table name
    protected $table = 'software_solutions_services';

    protected $fillable = ['service_id','service_details_id', 'title_en', 'title_ar', 'desc_en', 'desc_ar'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceDetails()
    {
        return $this->belongsTo(ServiceDetails::class);
    }

}
