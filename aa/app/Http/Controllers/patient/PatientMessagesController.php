<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientMessagesController extends Controller
{
    public function index(){
        return view('patientnav.messages.messages');
    }
}
