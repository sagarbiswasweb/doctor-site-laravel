<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Procedure;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ProcedureController extends Controller
{
    public function create(){
        return view('backend.procedure.create');
    }

    public function store(Request $request){
        $request->validate([
            'icon_class'    => 'required|string|max:255',
            'heading'       => 'required|string|max:255',
            'content'       => 'required|string',
        ]);

        Procedure::saveProcedure($request);
        Swal::success([
            'title' => 'Procedure created successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function index(){
        $procedures = Procedure::latest()->get();
        return view('backend.procedure.index', compact('procedures'));
    }

    public function view($id){
        $procedure = Procedure::findOrFail($id);
        return view('backend.procedure.view', compact('procedure'));
    }

    public function edit($id){
        $procedure = Procedure::findOrFail($id);
        return view('backend.procedure.edit', compact('procedure'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'icon_class'    => 'required|string|max:255',
            'heading'       => 'required|string|max:255',
            'content'       => 'required|string',
        ]);

        Procedure::updateProcedure($request, $id);
        Swal::success([
            'title' => 'Procedure updated successfully',
            'timer' => 2000,
        ]);
        return redirect()->route('procedure.index');
    }

    public function delete($id){
        Procedure::deleteProcedure($id);
        Swal::success([
            'title' => 'Procedure deleted successfully',
            'timer' => 2000,
        ]);
        return redirect()->route('procedure.index');
    }
}
