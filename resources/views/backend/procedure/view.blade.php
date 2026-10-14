@extends('backend.master')

@section('title')
    View Procedure
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
                        <h1 class="page-title">Procedure</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Procedures</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Procedure</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            {{-- <div class="card-header border-bottom">
                                <h3 class="card-title">View Procedure</h3>
                            </div> --}}
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">View Procedure</h3>

                                <div class="ms-auto d-flex gap-2">
                                    <a href="{{ route('procedure.index') }}" class="btn btn-primary">
                                        <i class="bi bi-list"></i> All Procedures
                                    </a>

                                    <a href="{{ route('procedure.create') }}" class="btn btn-secondary">
                                        <i class="bi bi-plus-lg"></i> Create Procedure
                                    </a>
                                    
                                    <a href="{{ route('procedure.edit', $procedure->id) }}" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i> Edit Procedure
                                    </a>

                                    <form action="{{ route('procedure.delete', $procedure->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this procedure?')">
                                            <i class="bi bi-trash"></i>
                                            Delete Procedure
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mx-auto">
                                        <tbody>
                                            <tr>
                                                <td>Icon Class</td>
                                                <td>
                                                    <i class="{{ $procedure->icon_class }}"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Heading</td>
                                                <td>{{ $procedure->heading }}</td>
                                            </tr>
                                            <tr>
                                                <td>Content</td>
                                                <td>{{ $procedure->content }}</td>
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