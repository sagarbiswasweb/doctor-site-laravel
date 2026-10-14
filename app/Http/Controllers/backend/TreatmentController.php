<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class TreatmentController extends Controller
{
    public function create(){
        return view('backend.treatment.create');
    }

    public function store(Request $request){
        $request->validate([
            'treated_condition' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Treatment::saveTreatment($request);
        Swal::success([
            'title' => 'Treatment created successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function index(){
        $treatments = Treatment::all();
        return view('backend.treatment.index', compact('treatments'));
    }

    public function edit($id){
        $treatment = Treatment::findOrFail($id);
        return view('backend.treatment.edit', compact('treatment'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'treated_condition' => 'required|string|max:255',
        ]);

        Treatment::updateTreatment($request, $id);
        Swal::success([
            'title' => 'Treatment updated successfully',
            'timer' => 2000,
        ]);
        return redirect()->route('treatment.index');
    }

    public function delete($id){
        Treatment::deleteTreatment($id);
        Swal::success([
            'title' => 'Treatment deleted successfully',
            'timer' => 2000,
        ]);
        return back();
    }
    
}
