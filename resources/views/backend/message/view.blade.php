@extends('backend.master')

@section('title')
    Read Message
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
                        <h1 class="page-title">Message</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Messagees</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Read Message</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">Read Message</h3>

                                <a href="{{ route('message.index') }}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ $message->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $message->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>{{ $message->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td>{{ $message->message }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{ route('email.compose') }}?to={{ urlencode($message->email) }}" class="btn btn-success btn-sm">
                                    <i class="fe fe-mail"></i> Reply
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
@endsection