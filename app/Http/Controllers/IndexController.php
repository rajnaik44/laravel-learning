<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Member;

class IndexController extends Controller
{
    public function index(){
        // return Member::with("Group")->get();
        return Member::with("Group")->get();
    }

    public function group(){

        return Group::with("member")->get();
    }
}
