@extends('backend.master')

@section('title')
    All Treatments
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
                        <h1 class="page-title">Treatments</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Treatment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Treatments</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            {{-- <div class="card-header border-bottom">
                                <h3 class="card-title">All Treatments</h3>
                            </div> --}}
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">All Treatments</h3>

                                <a href="{{ route('treatment.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i> Create Treatment
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SL</th>
                                                <th class="wd-15p border-bottom-0">Image</th>
                                                <th class="wd-15p border-bottom-0">Treated Condition</th>
                                                <th class="wd-25p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($treatments as $treatment)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        @if ($treatment->image)
                                                            <img src="{{ asset('storage/' . $treatment->image) }}" height="50px" width="50px" alt="Treatment Image" class="img-fluid">
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                    <td>{{ $treatment->treated_condition }}</td>

                                                    <td>
                                                        <a href="{{ route('treatment.edit', $treatment->id) }}" class="btn btn-success btn-sm"><i class="fe fe-edit"></i></a>
                                                        <form action="{{ route('treatment.delete', $treatment->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this treatment?')">
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