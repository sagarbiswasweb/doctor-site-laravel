@extends('backend.master')

@section('title')
    Create About
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
                        <h1 class="page-title">About</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create About</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Create About</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('about.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="about" class="form-label">About</label>
                                        {{-- <textarea class="summernote form-control @error('about') is-invalid @enderror" name="about"></textarea> --}}
                                        <textarea class="summernote form-control @error('about') is-invalid @enderror" name="about" id="" cols="30" rows="10">{{ old('about') }}</textarea>
                                        @error('about')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="qualifications" class="form-label">Qualifications</label>
                                        {{-- <textarea class="content" name="qualifications"></textarea> --}}
                                        <textarea class="summernote form-control @error('qualifications') is-invalid @enderror" name="qualifications" id="" cols="30" rows="10">{{ old('qualifications') }}</textarea>
                                        @error('qualifications')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="specialization" class="form-label">Specialization</label>
                                        {{-- <textarea class="content" name="specialization"></textarea> --}}
                                        <textarea class="summernote form-control @error('specialization') is-invalid @enderror" name="specialization" id="" cols="30" rows="10">{{ old('specialization') }}</textarea>
                                        @error('specialization')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="current_position" class="form-label">Current Position</label>
                                        {{-- <textarea class="content" name="current_position"></textarea> --}}
                                        <textarea class="summernote form-control @error('current_position') is-invalid @enderror" name="current_position" id="" cols="30" rows="10">{{ old('current_position') }}</textarea>
                                        @error('current_position')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="membership" class="form-label">Membership</label>
                                        {{-- <textarea class="content" name="membership"></textarea> --}}
                                        <textarea class="summernote form-control @error('membership') is-invalid @enderror" name="membership" id="" cols="30" rows="10">{{ old('membership') }}</textarea>
                                        @error('membership')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-12 mt-5">
                                        <button class="btn btn-primary" type="submit">Create About</button>
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