@extends('backend.master')

@section('title')
    About
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
                            <li class="breadcrumb-item active" aria-current="page">View About</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">View About</h3>
                                <div>
                                    <a href="{{ route('about.edit') }}" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i> Edit About
                                    </a>
                                    <form action="{{ route('about.delete') }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                            Delete About
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mx-auto">
                                        <tbody>
                                            @if($about)
                                                <tr>
                                                    <th>About</th>
                                                    <td>
                                                        <div class="ms-5">{!! strip_tags($about->about ?? '', '<p><br><strong><em><ul><li>') ?: 'No about information available.' !!}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Qualifications</th>
                                                    <td>
                                                        <div class="ms-5">{!! strip_tags($about->qualifications ?? '', '<p><br><strong><em><ul><li>') ?: 'No qualifications information available.' !!}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Specialization</th>
                                                    <td>
                                                        <div class="ms-5">{!! strip_tags($about->specialization ?? '', '<p><br><strong><em><ul><li>') ?: 'No specialization information available.' !!}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Current Position</th>
                                                    <td>
                                                        <div class="ms-5">{!! strip_tags($about->current_position ?? '', '<p><br><strong><em><ul><li>') ?: 'No current position information available.' !!}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Membership</th>
                                                    <td>
                                                        <div class="ms-5">{!! strip_tags($about->membership ?? '', '<p><br><strong><em><ul><li>') ?: 'No current membership information available.' !!}</div>
                                                    </td>
                                                </tr>
                                            @else
                                                <div class="alert alert-warning">
                                                    No About information found.
                                                    <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary ms-2">
                                                        Create About
                                                    </a>
                                                </div>
                                            @endif
                                            
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