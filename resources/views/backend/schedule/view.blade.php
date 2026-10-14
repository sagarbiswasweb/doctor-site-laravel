@extends('backend.master')

@section('title')
    View Schedules
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
                            <li class="breadcrumb-item active" aria-current="page">View Schedule</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">View Schedule</h3>

                                <div class="ms-auto d-flex gap-2">
                                    <a href="{{ route('schedule.index') }}" class="btn btn-primary">
                                        <i class="bi bi-list"></i> All Schedules
                                    </a>

                                    <a href="{{ route('schedule.create') }}" class="btn btn-secondary">
                                        <i class="bi bi-plus-lg"></i> Create Schedule
                                    </a>
                                    
                                    <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i> Edit Schedule
                                    </a>

                                    <form action="{{ route('schedule.delete', $schedule->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">
                                            <i class="bi bi-trash"></i>
                                            Delete Schedule
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <tbody>
                                            <tr>
                                                <td>Hospital</td>
                                                <td>{{ $schedule->hospital }}</td>
                                            </tr>
                                            <tr>
                                                <td>Visiting Days</td>
                                                <td>{{ $schedule->days }}</td>
                                            </tr>
                                            <tr>
                                                <td>Visiting Time</td>
                                                <td>{{ $schedule->getFormattedFromAttribute() }} – {{ $schedule->getFormattedToAttribute() }}</td>
                                            </tr>
                                            <tr>
                                                <td>Off Days</td>
                                                <td>{{ $schedule->off_days }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ $schedule->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone 1</td>
                                                <td>{{ $schedule->phone1 }} ({{ $schedule->phone1_type }})</td>
                                            </tr>
                                            <tr>
                                                <td>Phone 2</td>
                                                <td>{{ $schedule->phone2 }} ({{ $schedule->phone2_type }})</td>
                                            </tr>
                                            <tr>
                                                <td>Phone 3</td>
                                                <td>{{ $schedule->phone3 }} ({{ $schedule->phone3_type }})</td>
                                            </tr>
                                            <tr>
                                                <td>Phone 4</td>
                                                <td>{{ $schedule->phone4 }} ({{ $schedule->phone4_type }})</td>
                                            </tr>
                                            <tr>
                                                <td>Phone 5</td>
                                                <td>{{ $schedule->phone5 }} ({{ $schedule->phone5_type }})</td>
                                            </tr>
                                            <tr>
                                                <td>Map</td>
                                                <td>{{ $schedule->map }}</td>
                                            </tr>
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