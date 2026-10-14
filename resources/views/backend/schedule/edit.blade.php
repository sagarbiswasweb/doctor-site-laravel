@extends('backend.master')

@section('title')
    Edit Schedule
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
                            <li class="breadcrumb-item active" aria-current="page">Edit Schedule</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            {{-- <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Schedule</h3>
                            </div> --}}
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">Edit Schedule</h3>

                                <div class="ms-auto d-flex gap-2">
                                    <a href="{{ route('schedule.index') }}" class="btn btn-primary">
                                        <i class="bi bi-list"></i> All Schedules
                                    </a>

                                    <a href="{{ route('schedule.create') }}" class="btn btn-secondary">
                                        <i class="bi bi-plus-lg"></i> Create Schedule
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('schedule.update', $schedule->id) }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <label for="hospital" class="form-label">Hospital</label>
                                        <input type="text" name="hospital" value="{{ old('hospital', $schedule->hospital) }}" class="form-control @error('hospital') is-invalid @enderror" id="hospital" required>
                                        @error('hospital')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="days" class="form-label">Days</label>
                                        <input type="text" name="days" value="{{ old('days', $schedule->days) }}" class="form-control @error('days') is-invalid @enderror" id="days" required>
                                        @error('days')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="from" class="form-label">From</label>
                                        <input type="time" name="from" value="{{ old('from', $schedule->from) }}" class="form-control @error('from') is-invalid @enderror" id="from" required>
                                        @error('from')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="to" class="form-label">To</label>
                                        <div class="input-group has-validation">
                                            <input type="time" name="to" value="{{ old('to', $schedule->to) }}" class="form-control @error('to') is-invalid @enderror" id="to" required>
                                            @error('from')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="off_days" class="form-label">Off Days</label>
                                        <input type="text" name="off_days" value="{{ old('off_days', $schedule->off_days) }}" class="form-control @error('off_days') is-invalid @enderror" id="off_days" required>
                                        @error('off_days')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" required>{{ old('address', $schedule->address) }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone1" class="form-label">Phone 1</label>
                                        <input type="text" name="phone1" value="{{ old('phone1', $schedule->phone1) }}" class="form-control @error('phone1') is-invalid @enderror" id="phone1" required>
                                        @error('phone1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone1_type" class="form-label">Phone 1 Type</label>
                                        <input type="text" name="phone1_type" value="{{ old('phone1_type', $schedule->phone1_type) }}" class="form-control @error('phone1_type') is-invalid @enderror" id="phone1_type" required>
                                        @error('phone1_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone2" class="form-label">Phone 2</label>
                                        <input type="text" name="phone2" value="{{ old('phone2', $schedule->phone2) }}" class="form-control @error('phone2') is-invalid @enderror" id="phone2" required>
                                        @error('phone2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone2_type" class="form-label">Phone 2 Type</label>
                                        <input type="text" name="phone2_type" value="{{ old('phone2_type', $schedule->phone2_type) }}" class="form-control @error('phone2_type') is-invalid @enderror" id="phone2_type" required>
                                        @error('phone2_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone3" class="form-label">Phone 3</label>
                                        <input type="text" name="phone3" value="{{ old('phone3', $schedule->phone3) }}" class="form-control @error('phone3') is-invalid @enderror" id="phone3" required>
                                        @error('phone3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone3_type" class="form-label">Phone 3 Type</label>
                                        <input type="text" name="phone3_type" value="{{ old('phone3_type', $schedule->phone3_type) }}" class="form-control @error('phone3_type') is-invalid @enderror" id="phone3_type" required>
                                        @error('phone3_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone4" class="form-label">Phone 4</label>
                                        <input type="text" name="phone4" value="{{ old('phone4', $schedule->phone4) }}" class="form-control @error('phone4') is-invalid @enderror" id="phone4" required>
                                        @error('phone4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone4_type" class="form-label">Phone 4 Type</label>
                                        <input type="text" name="phone4_type" value="{{ old('phone4_type', $schedule->phone4_type) }}" class="form-control @error('phone4_type') is-invalid @enderror" id="phone4_type" required>
                                        @error('phone4_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone5" class="form-label">Phone 5</label>
                                        <input type="text" name="phone5" value="{{ old('phone5', $schedule->phone5) }}" class="form-control @error('phone5') is-invalid @enderror" id="phone5" required>
                                        @error('phone5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone5_type" class="form-label">Phone 5 Type</label>
                                        <input type="text" name="phone5_type" value="{{ old('phone5_type', $schedule->phone5_type) }}" class="form-control @error('phone5_type') is-invalid @enderror" id="phone5_type" required>
                                        @error('phone5_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="map" class="form-label">Map Address (Latitude, Longitude)</label>
                                        <input type="text" name="map" value="{{ old('map', $schedule->map) }}" class="form-control @error('map') is-invalid @enderror" id="map" required>
                                        @error('map')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Update Schedule</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- ROW CLOSED -->

                
            </div>
        </div>
    </div>
@endsection