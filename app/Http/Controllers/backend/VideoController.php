<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::latest()->get();
        return view('backend.video.index', compact('videos'));
    }

    public function add(){
        return view('backend.video.add');
    }

    public function store(Request $request){
        $request->validate([
            'title'         => 'required|string|max:255',
            'embed_code'    => 'required|string',
        ]);

        // Here you would typically save the video information to the database
        // For example:
        Video::saveVideo($request);

        Swal::success([
            'title' => 'Video added successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function view($id){
        $video = Video::findOrFail($id);
        return view('backend.video.view', compact('video'));
    }

    public function edit($id){
        $video = Video::findOrFail($id);
        return view('backend.video.edit', compact('video'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'         => 'required|string|max:255',
            'embed_code'    => 'required|string',
        ]);

        Video::updateVideo($request, $id);

        Swal::success([
            'title' => 'Video updated successfully',
            'timer' => 2000,
        ]);
        return redirect()->route('video.index');
    }

    public function delete($id){
        Video::deleteVideo($id);

        Swal::success([
            'title' => 'Video deleted successfully',
            'timer' => 2000,
        ]);
        return redirect()->route('video.index');
    }
}
