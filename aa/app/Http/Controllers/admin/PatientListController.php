<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientListController extends Controller
{
    public function index(){

        $patient = Patient::all();
        $patient = Patient::paginate(10);
        return view('adminnav.patientlist.patientlist', ['patientlist' => $patient]);
        
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patientlist.index')
            ->with('success', 'Patient deleted successfully!');
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patientlist.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $event = Patient::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|int',
            'email' => 'required|string',
            'phone' => 'required|int',
            'address' => 'required|string',
        ]);

        $event->update([
            'name' => $request->input('name'),
            'gender' => $request->input('date'),
            'age' => $request->input('location'),
            'email' => $request->input('name'),
            'phone' => $request->input('date'),
            'address' => $request->input('location'),
        ]);

        return redirect()->route('patientlist')
            ->with('success', 'patient updated successfully!');
    }
}
