<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory,CustomTimestamps;
    protected $table = "company";
    protected $fillable = [
        'company_name',
        'parent_id',
        'short_code',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    function parentCompany(){
        return $this->belongsTo(Company::class,'parent_id','id');
    }

    function companyLocations(){
        return $this->hasMany(CompanyLocations::class,'company_id','id');
    }
}
