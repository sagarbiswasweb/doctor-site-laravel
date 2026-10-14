@extends('backend.master')

@section('title')
    All Schedules
@endsection

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                    
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Schedule</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Schedule</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Schedules</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">All Schedules</h3>

                                <a href="{{ route('schedule.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i> Add New Schedule
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SL</th>
                                                <th class="wd-15p border-bottom-0">Hospital</th>
                                                <th class="wd-20p border-bottom-0">Days</th>
                                                <th class="wd-15p border-bottom-0">Time</th>
                                                <th class="wd-25p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedules as $schedule)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $schedule->hospital }}</td>
                                                    <td>{{ $schedule->days }}</td>
                                                    <td>{{ $schedule->formatted_from }} - {{ $schedule->formatted_to }}</td>

                                                    <td>
                                                        <a href="{{ route('schedule.view', $schedule->id) }}" class="btn btn-primary btn-sm"><i class="fe fe-eye"></i></a>
                                                        <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-success btn-sm"><i class="fe fe-edit"></i></a>
                                                        <form action="{{ route('schedule.delete', $schedule->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this schedule?')">
                                                                <i class="fe fe-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
@endsection