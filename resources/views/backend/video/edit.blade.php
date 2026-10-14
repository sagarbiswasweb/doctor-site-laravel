@extends('backend.master')

@section('title')
    Edit Video
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
                        <h1 class="page-title">Video</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Video</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Video</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Video</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('videos.update', $video->id) }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">Title</label>
                                        <textarea name="title" class="form-control @error('title') is-invalid @enderror" id="title" required>{{ $video->title }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="embed_code" class="form-label">Embed Code</label>
                                        <textarea name="embed_code" class="form-control @error('embed_code') is-invalid @enderror" id="embed_code" required>{{ $video->embed_code }}</textarea>
                                        @error('embed_code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
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