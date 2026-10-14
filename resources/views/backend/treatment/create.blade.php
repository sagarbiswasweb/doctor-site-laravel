@extends('backend.master')

@section('title')
    Add Treatment
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
                            <li class="breadcrumb-item active" aria-current="page">Create Treatment</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            {{-- <div class="card-header border-bottom">
                                <h3 class="card-title">Create Treatment</h3>
                            </div> --}}
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">Create Treatment</h3>

                                <a href="{{ route('treatment.index') }}" class="btn btn-primary">
                                    <i class="bi bi-list"></i> All Treatments
                                </a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('treatment.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" accept="image/*" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" id="image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="treated_condition" class="form-label">Treated Condition</label>
                                        <input type="text" name="treated_condition" class="form-control @error('treated_condition') is-invalid @enderror" value="{{ old('treated_condition') }}" id="treated_condition">
                                        @error('treated_condition')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Create Treatment</button>
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