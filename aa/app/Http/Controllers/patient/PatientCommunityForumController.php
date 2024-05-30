<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientCommunityForumController extends Controller
{
    public function index(){
        return view('patientnav.communityforum.communityforum');
    }
}
