<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{
    use HasFactory,CustomTimestamps,SoftDeletes;
    protected $table = "jobs";
    protected $fillable = [
        'company_id',
        'company_location_id',
        'job_department_id',
        'title',
        'sub_title',
        'description',
        'is_active',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
    public function company_locations(){
        return $this->belongsTo(CompanyLocations::class,'company_location_id','id');
    }
    public function job_department(){
        return $this->belongsTo(JobDepartments::class,'job_department_id','id');
    }
    public function getCompanyLocationFormattedAttribute(){

        $location_formatted = "<b>Location type: </b>".$this->company_locations->location_type;
        $location_formatted .= "<br/><b>Address: </b>".$this->company_locations->address1.", ".$this->company_locations->address2;
        $location_formatted .= ", ".$this->company_locations->city.", ".$this->company_locations->state;
        $location_formatted .= "<br/><b>Pincode: </b>".$this->company_locations->pincode;
        $location_formatted .= "<br/><b>Mobile: </b>".$this->company_locations->mobile;

        return $location_formatted;
    }
    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y H:i');
    }
}
