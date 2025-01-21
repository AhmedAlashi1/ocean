<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_Satisfcation extends Model
{
    use HasFactory;
    protected $fillable = [ 'name_en','name_ar', 'nick_name_en','nick_name_ar','ranked','image','content_en','content_ar'];
    protected $table = 'client__satisfcations';

}
