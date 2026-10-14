@extends('backend.master')

@section('title')
    Read
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
                        <h1 class="page-title">Read Mail</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Read Mail</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <a href="{{ route('email.compose') }}" class="btn btn-outline-primary btn-block py-2">Compose</a>
                            </div>
                            <div class="card-body">
                                <ul class="nav1 nav-column flex-column br-7">
                                    <li class="nav-item1 mt-0">
                                        <a class="nav-link thumb" href="{{ route('email.inbox') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,4h-15C3.119812,4.0012817,2.0012817,5.119812,2,6.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-11C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V8.0913696l8.7392578,5.3353882c0.0080566,0.0048828,0.0184326,0.0030518,0.0266724,0.0075073C11.836731,13.4725952,11.9138184,13.500061,12,13.5c0.0905762,0.000061,0.1763306-0.0263672,0.2519531-0.0707397c0.0026855-0.0015869,0.0061646-0.0008545,0.0087891-0.0025024L21,8.0913696V17.5z M21,6.9194946l-0.2387695,0.145752c-0.0070801,0.0038452-0.0150146,0.0037842-0.0219727,0.0079956l-8.7313843,5.3359985L12,12.4140625l-0.0078735-0.0048218L3.2607422,7.0732422C3.2603149,7.072998,3.2598877,7.0727539,3.2594604,7.0724487c-0.006958-0.0042114-0.0149536-0.0041504-0.0220337-0.0079956L3,6.9194946V6.5C3.0009155,5.671936,3.671936,5.0009155,4.5,5h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.9194946z"/></svg>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link thumb" href="{{ route('email.sent') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16.6474609,7.3417969c0.093689,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1326294,0.0001221,0.2598877-0.0526123,0.3535156-0.1464844l4.5-4.5c0.1904907-0.194397,0.1904907-0.5055542,0-0.6999512c-0.1932983-0.1971436-0.5098267-0.2003174-0.7070312-0.0070801L17.0009766,6.28125l-2.1464844-2.1464233c-0.0023804-0.0024414-0.0047607-0.0048218-0.0072021-0.0072021c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0072021c-0.1932373,0.1972046-0.1900635,0.5137329,0.0071411,0.7069702L16.6474609,7.3417969z M21.5078125,6.9736328c-0.276123,0-0.5,0.223877-0.5,0.5v10c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11c0.0002441-0.2310181,0.0570068-0.4471436,0.1503906-0.6425781l7.0859375,7.0859375c0.4643555,0.4656372,1.0953369,0.7268066,1.7529297,0.7255859c0.6781006-0.0012207,1.3276978-0.2729492,1.8046875-0.7548828l1.7196655-1.7207031c0.1904907-0.194397,0.1904907-0.5054321,0-0.6998291c-0.1932373-0.1972046-0.5097656-0.2004395-0.7070312-0.0072021l-1.75,1.75c-0.5841675,0.5820923-1.5290527,0.5820923-2.1132812,0L3.8651733,5.1240234C4.0606079,5.0305786,4.2767944,4.973877,4.5078125,4.9736328h7c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-7c-1.380188,0.0012817-2.4987183,1.119812-2.5,2.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C22.0078125,7.1975098,21.7839355,6.9736328,21.5078125,6.9736328z"/></svg>
                                            Sent
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title fw-bold">{{ $email->subject }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="email-media">
                                    <div class="mt-0 d-sm-flex">
                                        <div class="media-body">
                                            <div class="float-end d-none d-md-flex tx-8">
                                                <div class="me-2 br-5 d-flex"  data-bs-toggle="tooltip" title="" data-bs-original-title="View more">
                                                    <a href="#" class="border br-5 p-2" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical tx-18 text-black-50"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" id="delete-mail">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-title fw-bold mt-3">
                                                @if($email->type == 'sent')
                                                    To: <span class="tx-13 fw-semibold">{{ $email->to_email }}</span>
                                                @else
                                                    From: <span class="tx-13 fw-semibold">{{ $email->from_email }}</span>
                                                @endif
                                            </div>
                                            <span class="float-start">{{ $email->created_at->timezone('Asia/Dhaka')->format('d M Y h:i A') }}</span>
                                            <small class="me-2 d-md-none"><i class="fe fe-star text-muted" data-bs-toggle="tooltip" title="" data-bs-original-title="Rated"></i></small>
                                            <small class="me-2 d-md-none"><i class="fa fa-reply text-muted" data-bs-toggle="tooltip" title="" data-bs-original-title="Reply"></i></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="eamil-body mt-5">
                                    <p>{!! nl2br(e($email->message)) !!}</p>
                                    <div class="email-attch">
                                        @if($email->attachments)
                                            <hr>
                                            <h6>Attachments:</h6>
                                            <ul>
                                                @foreach($email->attachments as $file)
                                                    <li>
                                                        <a href="{{ asset('storage/'.$file) }}" target="_blank">
                                                            {{ basename($file) }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

    <script>
        document.getElementById('delete-mail').onclick = function(event) {
            event.preventDefault();

            if (!confirm('Are you sure you want to delete this email?')) {
                return;
            }

            fetch("{{ route('email.delete') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ ids: [{{ $email->id }}] })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Delete failed');
                }
                return response.json();
            })
            .then(() => {
                window.location = "{{ $email->type === 'sent' ? route('email.sent') : route('email.inbox') }}";
            })
            .catch(error => {
                console.error(error);
                alert('Unable to delete the email. Please try again.');
            });
        }
    </script>

                
            </div>
        </div>
    </div>
@endsection