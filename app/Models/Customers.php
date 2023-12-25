<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    //mutator
    // public function setUserNameAttribute($value){  ---user_name
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function getDobAttribute($value){
        return date('d-M-Y', strtotime($value));
    }


}
