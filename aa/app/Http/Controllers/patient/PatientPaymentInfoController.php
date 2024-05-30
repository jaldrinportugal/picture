<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientPaymentInfoController extends Controller
{
    public function index(){
        return view('patientnav.paymentinfo.paymentinfo');
    }
}
