@extends('backend.master')

@section('title')
    Add Schedule
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
                            <li class="breadcrumb-item active" aria-current="page">Create Schedule</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">Create Schedule</h3>

                                <a href="{{ route('schedule.index') }}" class="btn btn-primary">
                                    <i class="bi bi-list"></i> All Schedules
                                </a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('schedule.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="hospital" class="form-label">Hospital</label>
                                        <input type="text" name="hospital" class="form-control @error('hospital') is-invalid @enderror" value="{{ old('hospital') }}" id="hospital">
                                        @error('hospital')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="days" class="form-label">Days</label>
                                        <input type="text" name="days" class="form-control @error('days') is-invalid @enderror" value="{{ old('days') }}" id="days">
                                        @error('days')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="from" class="form-label">From</label>
                                        <input type="time" name="from" class="form-control @error('from') is-invalid @enderror" value="{{ old('from') }}" id="from" required>
                                        @error('from')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <label for="to" class="form-label">To</label>
                                        <div class="input-group has-validation">
                                        <input type="time" name="to" class="form-control @error('to') is-invalid @enderror" value="{{ old('to') }}" id="to" required>
                                        @error('to')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="off-days" class="form-label">Off Days</label>
                                        <input type="text" name="off_days" class="form-control @error('off_days') is-invalid @enderror" value="{{ old('off_days') }}" id="off-days">
                                        @error('off_days')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" id="address" required></textarea>
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone1" class="form-label">Phone 1</label>
                                        <input type="text" name="phone1" class="form-control @error('phone1') is-invalid @enderror" value="{{ old('phone1') }}" id="phone1" required>
                                        @error('phone1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone1_type" class="form-label">Phone 1 Type</label>
                                        <input type="text" name="phone1_type" class="form-control @error('phone1_type') is-invalid @enderror" value="{{ old('phone1_type') }}" id="phone1_type" required>
                                        @error('phone1_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone2" class="form-label">Phone 2</label>
                                        <input type="text" name="phone2" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}" id="phone2" required>
                                        @error('phone2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone2_type" class="form-label">Phone 2 Type</label>
                                        <input type="text" name="phone2_type" class="form-control @error('phone2_type') is-invalid @enderror" value="{{ old('phone2_type') }}" id="phone2_type" required>
                                        @error('phone2_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone3" class="form-label">Phone 3</label>
                                        <input type="text" name="phone3" class="form-control @error('phone3') is-invalid @enderror" value="{{ old('phone3') }}" id="phone3" required>
                                        @error('phone3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone3_type" class="form-label">Phone 3 Type</label>
                                        <input type="text" name="phone3_type" class="form-control @error('phone3_type') is-invalid @enderror" value="{{ old('phone3_type') }}" id="phone3_type" required>
                                        @error('phone3_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone4" class="form-label">Phone 4</label>
                                        <input type="text" name="phone4" class="form-control @error('phone4') is-invalid @enderror" value="{{ old('phone4') }}" id="phone4" required>
                                        @error('phone4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone4_type" class="form-label">Phone 4 Type</label>
                                        <input type="text" name="phone4_type" class="form-control @error('phone4_type') is-invalid @enderror" value="{{ old('phone4_type') }}" id="phone4_type" required>
                                        @error('phone4_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <label for="phone5" class="form-label">Phone 5</label>
                                        <input type="text" name="phone5" class="form-control @error('phone5') is-invalid @enderror" value="{{ old('phone5') }}" id="phone5" required>
                                        @error('phone5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone5_type" class="form-label">Phone 5 Type</label>
                                        <input type="text" name="phone5_type" class="form-control @error('phone5_type') is-invalid @enderror" value="{{ old('phone5_type') }}" id="phone5_type" required>
                                        @error('phone5_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="map" class="form-label">Map Address (Latitude, Longitude)</label>
                                        <input type="text" name="map" class="form-control @error('map') is-invalid @enderror" value="{{ old('map') }}" id="map" required>
                                        @error('map')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Create Schedule</button>
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