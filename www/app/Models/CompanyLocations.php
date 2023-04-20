<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLocations extends Model
{
    use HasFactory,CustomTimestamps;
    protected $table = "company_locations";
    protected $fillable = [
        'company_id',
        'title',
        'location_type',
        'address1',
        'address2',
        'pincode',
        'city',
        'state',
        'mobile',
        'latitude',
        'longitude',
        'know_more',
        'is_active',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
