<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable=[
        'name','staff_id','dapartment','device_type','device_name','serial_no','tag_no'
    ];
}
