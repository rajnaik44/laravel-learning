<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = 'member_id';
    function getGroup(){
        return $this->hasOne("App\models\Group","group_id");
    }
}
