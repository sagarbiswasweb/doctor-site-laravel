@extends('backend.master')

@section('title')
    How We Treat
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
                        <h1 class="page-title">Treatment</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Treatment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">How We Treat</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">How We Treat</h3>

                                <a href="{{ route('procedure.index') }}" class="btn btn-primary">
                                    <i class="bi bi-list"></i> All Procedures
                                </a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('procedure.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="icon_class" class="form-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control @error('icon_class') is-invalid @enderror" value="{{ old('icon_class') }}" id="icon_class">
                                        @error('icon_class')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="heading" class="form-label">Heading</label>
                                        <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading') }}" id="heading">
                                        @error('heading')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="content" class="form-label">Content</label>
                                        {{-- <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" id="content"> --}}
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="" cols="30" rows="3">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Create Procedure</button>
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