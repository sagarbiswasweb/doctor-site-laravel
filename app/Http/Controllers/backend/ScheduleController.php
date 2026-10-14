<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SweetAlert2\Laravel\Swal;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::latest()->get();
        return view('backend.schedule.index', [
            'schedules' => $schedules
        ]);
    }

    public function create(){
        return view('backend.schedule.create');
    }

    public function store(Request $request){
        $request->validate([
            'hospital'      => 'required|string|max:255',
            'days'          => 'required|string|max:255',
            'from'          => 'required|date_format:H:i',
            'to'            => 'required|date_format:H:i',
            'off_days'      => 'nullable|string|max:255',
            'address'       => 'required|string|max:255',
            'phone1'        => 'required|string|max:255',
            'phone1_type'   => 'required|string|max:255',
            'phone2'        => 'nullable|string|max:255',
            'phone2_type'   => 'nullable|string|max:255',
            'phone3'        => 'nullable|string|max:255',
            'phone3_type'   => 'nullable|string|max:255',
            'phone4'        => 'nullable|string|max:255',
            'phone4_type'   => 'nullable|string|max:255',
            'phone5'        => 'nullable|string|max:255',
            'phone5_type'   => 'nullable|string|max:255',
            'map'           => 'required|string|max:255'
        ]);
        Schedule::saveSchedule($request);
        Swal::success([
            'title' => 'Schedule created successfully',
            'timer' => 2000,
        ]);
        return back();
    }

    public function view($id){
        $schedule = Schedule::find($id);
        return view('backend.schedule.view', [
            'schedule' => $schedule
        ]);
    }

    public function edit($id){
        $schedule = Schedule::find($id);
        return view('backend.schedule.edit', [
            'schedule' => $schedule
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'hospital'      => 'required|string|max:255',
            'days'          => 'required|string|max:255',
            'from'          => 'required|date_format:H:i',
            'to'            => 'required|date_format:H:i',
            'off_days'      => 'nullable|string|max:255',
            'address'       => 'required|string|max:255',
            'phone1'        => 'required|string|max:255',
            'phone1_type'   => 'required|string|max:255',
            'phone2'        => 'nullable|string|max:255',
            'phone2_type'   => 'nullable|string|max:255',
            'phone3'        => 'nullable|string|max:255',
            'phone3_type'   => 'nullable|string|max:255',
            'phone4'        => 'nullable|string|max:255',
            'phone4_type'   => 'nullable|string|max:255',
            'phone5'        => 'nullable|string|max:255',
            'phone5_type'   => 'nullable|string|max:255',
            'map'           => 'required|string|max:255'

        ]);
        Schedule::updateSchedule($request, $id);
        Swal::success([
            'title' => 'Schedule updated successfully',
            'timer' => 2000,
        ]);
        return Redirect::route('schedule.index');
    }

    public function delete($id){
        Schedule::deleteSchedule($id);
        Swal::success([
            'title' => 'Schedule deleted successfully',
            'timer' => 2000,
        ]);
        return Redirect::route('schedule.index');
    }
}
