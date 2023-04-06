<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLocationPhotos extends Model
{
    use HasFactory,CustomTimestamps;
    protected $table = "company_location_photos";
    protected $fillable = [
        'company_location_id',
        'file_name',
        'is_active',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
