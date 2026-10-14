@extends('backend.master')

@section('title')
    Procedures
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
                        <h1 class="page-title">Procedures</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Procedure</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Procedures</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            {{-- <div class="card-header border-bottom">
                                <h3 class="card-title">All Procedures</h3>
                            </div> --}}
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">All Procedures</h3>

                                <a href="{{ route('procedure.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i> Add New Procedure
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SL</th>
                                                <th class="wd-15p border-bottom-0">Icon</th>
                                                <th class="wd-15p border-bottom-0">Heading</th>
                                                <th class="wd-15p border-bottom-0">Content</th>
                                                <th class="wd-25p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($procedures as $procedure)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <i class="{{ $procedure->icon_class }}"></i> <span>| {{ $procedure->icon_class }}</span>
                                                    </td>
                                                    <td>{{ Str::limit($procedure->heading, 20) }}</td>
                                                    <td>{{ Str::limit($procedure->content, 30) }}</td>

                                                    <td>
                                                        <a href="{{ route('procedure.edit', $procedure->id) }}" class="btn btn-success btn-sm"><i class="fe fe-edit"></i></a>
                                                        <a href="{{ route('procedure.view', $procedure->id) }}" class="btn btn-primary btn-sm"><i class="fe fe-eye"></i></a>
                                                        <form action="{{ route('procedure.delete', $procedure->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this procedure?')">
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