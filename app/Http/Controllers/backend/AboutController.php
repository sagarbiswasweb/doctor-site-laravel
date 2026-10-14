<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class AboutController extends Controller
{
    public function create(){
        return view('backend.about.create');
    }

    public function store(Request $request){
        $request->validate([
            'about'             => 'required',
            'qualifications'    => 'nullable',
            'specialization'    => 'nullable',
            'current_position'  => 'nullable',
            'membership'        => 'nullable',
        ]);

        // Check if About already exists
        if (About::exists()) {
            Swal::error([
                'title' => 'About already exists!',
                'text'  => 'You can only update the existing About information.',
            ]);
            return back();
        }

        About::saveAbout($request);

        Swal::success([
            'title' => 'About created successfully',
            'timer' => 2000,
        ]);

        return back();
    }

    public function show(){
        $about = About::first();
        return view('backend.about.show', compact('about'));
    }

    public function edit(){
        $about = About::first();
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request){
        $request->validate([
            'about'             => 'required',
            'qualifications'    => 'nullable',
            'specialization'    => 'nullable',
            'current_position'  => 'nullable',
            'membership'        => 'nullable',
        ]);

        About::updateAbout($request);

        Swal::success([
            'title' => 'About updated successfully',
            'timer' => 2000,
        ]);

        return redirect()->route('about.show');
    }

    public function delete(){
        About::deleteAbout();

        Swal::success([
            'title' => 'About deleted successfully',
            'timer' => 2000,
        ]);

        return redirect()->route('about.create');
    }
}
