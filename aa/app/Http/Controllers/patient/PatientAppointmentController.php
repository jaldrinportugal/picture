<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientAppointmentController extends Controller
{
    public function index(){
        return view('patientnav.appointment.appointment');
    }
}
