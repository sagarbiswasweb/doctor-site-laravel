@extends('backend.master')

@section('title')
    Inbox
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
                        <h1 class="page-title">Inbox</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">E-Mail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <a href="{{ route('email.compose') }}"
                                    class="btn btn-block btn-outline-primary py-2">Compose</a>
                            </div>
                            <div class="card-body">
                                <ul class="nav1 nav-column flex-column br-7">
                                    <li class="nav-item1 mt-0">
                                        <a class="nav-link thumb active" href="{{ route('email.inbox') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M19.5,4h-15C3.119812,4.0012817,2.0012817,5.119812,2,6.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-11C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V8.0913696l8.7392578,5.3353882c0.0080566,0.0048828,0.0184326,0.0030518,0.0266724,0.0075073C11.836731,13.4725952,11.9138184,13.500061,12,13.5c0.0905762,0.000061,0.1763306-0.0263672,0.2519531-0.0707397c0.0026855-0.0015869,0.0061646-0.0008545,0.0087891-0.0025024L21,8.0913696V17.5z M21,6.9194946l-0.2387695,0.145752c-0.0070801,0.0038452-0.0150146,0.0037842-0.0219727,0.0079956l-8.7313843,5.3359985L12,12.4140625l-0.0078735-0.0048218L3.2607422,7.0732422C3.2603149,7.072998,3.2598877,7.0727539,3.2594604,7.0724487c-0.006958-0.0042114-0.0149536-0.0041504-0.0220337-0.0079956L3,6.9194946V6.5C3.0009155,5.671936,3.671936,5.0009155,4.5,5h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.9194946z" />
                                            </svg>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link thumb" href="{{ route('email.sent') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.6474609,7.3417969c0.093689,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1326294,0.0001221,0.2598877-0.0526123,0.3535156-0.1464844l4.5-4.5c0.1904907-0.194397,0.1904907-0.5055542,0-0.6999512c-0.1932983-0.1971436-0.5098267-0.2003174-0.7070312-0.0070801L17.0009766,6.28125l-2.1464844-2.1464233c-0.0023804-0.0024414-0.0047607-0.0048218-0.0072021-0.0072021c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0072021c-0.1932373,0.1972046-0.1900635,0.5137329,0.0071411,0.7069702L16.6474609,7.3417969z M21.5078125,6.9736328c-0.276123,0-0.5,0.223877-0.5,0.5v10c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11c0.0002441-0.2310181,0.0570068-0.4471436,0.1503906-0.6425781l7.0859375,7.0859375c0.4643555,0.4656372,1.0953369,0.7268066,1.7529297,0.7255859c0.6781006-0.0012207,1.3276978-0.2729492,1.8046875-0.7548828l1.7196655-1.7207031c0.1904907-0.194397,0.1904907-0.5054321,0-0.6998291c-0.1932373-0.1972046-0.5097656-0.2004395-0.7070312-0.0072021l-1.75,1.75c-0.5841675,0.5820923-1.5290527,0.5820923-2.1132812,0L3.8651733,5.1240234C4.0606079,5.0305786,4.2767944,4.973877,4.5078125,4.9736328h7c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-7c-1.380188,0.0012817-2.4987183,1.119812-2.5,2.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C22.0078125,7.1975098,21.7839355,6.9736328,21.5078125,6.9736328z" />
                                            </svg>
                                            Sent
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body p-6">
                                <div class="inbox-body">
                                    <div class="mail-option">
                                        <div class="btn-group">
                                            <a href="javascript:location.reload();" class="btn mini tooltips">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.5,16h-4c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h2.9760132c-1.6599121,2.4746704-4.44104,3.9971313-7.4585571,4C7.0420532,21.0048218,3.0048218,16.9754028,3,12c-0.0004272-0.4752197,0.0374756-0.9497681,0.1133423-1.4188843c0.0447388-0.2723999-0.1397705-0.52948-0.4121094-0.5742188c-0.2723999-0.0447998-0.52948,0.1397095-0.5742188,0.4121094C2.0422363,10.9417114,1.9997559,11.470459,2,12c0.0064697,5.5201416,4.4798584,9.9935303,10,10c3.1759033,0.0013428,6.1253662-1.5065308,8-3.9985962V20.5c0,0.0001831,0,0.0003662,0,0.0005493C20.0001831,20.7765503,20.223999,21.0001831,20.5,21c0.0001831,0,0.0003662,0,0.0006104,0C20.7765503,20.9998169,21.0001831,20.776001,21,20.5v-4c0-0.0001831,0-0.0003662,0-0.0006104C20.9998169,16.2234497,20.776001,15.9998169,20.5,16z M16.7373047,3.1964722C12.3201904,0.817749,6.9207764,2.1072388,4,6.0029297V3.5C4,3.223877,3.776123,3,3.5,3S3,3.223877,3,3.5v4c0,0.0001831,0,0.0003662,0,0.0006104C3.0001831,7.7765503,3.223999,8.0001831,3.5,8h4C7.776123,8,8,7.776123,8,7.5S7.776123,7,7.5,7H4.5239868c1.6599121-2.4746704,4.44104-3.9971313,7.4585571-4C16.9579468,2.9951782,20.9951782,7.0245972,21,12c0.0004272,0.4752808-0.0374146,0.9497681-0.1132202,1.4189453c-0.0001831,0.0007935-0.0003052,0.0015259-0.0004272,0.0023193c-0.0440063,0.2718506,0.140686,0.5278931,0.4125366,0.5718994C21.3259277,13.9978638,21.3533936,14.0001221,21.3808594,14c0.2445068-0.0003662,0.4527588-0.1776733,0.4921265-0.4190063C21.9577637,13.0582886,22.0002441,12.529541,22,12C21.9970703,8.3212891,19.9761963,4.9407349,16.7373047,3.1964722z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a data-bs-toggle="dropdown" href="#" class="btn mini blue"
                                                aria-expanded="false">
                                                More
                                                <i class="fa fa-angle-down "></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
                                            </ul>
                                        </div>
                                        <ul class="unstyled inbox-pagination d-flex align-items-center gap-2">

                                            <li>
                                                <span>
                                                    {{ $emails->firstItem() }}-{{ $emails->lastItem() }}
                                                    of {{ $emails->total() }}
                                                </span>
                                            </li>

                                            {{-- Previous Button --}}
                                            @if ($emails->onFirstPage())
                                                <li class="disabled">
                                                    <span class="np-btn">
                                                        <i class="fa fa-angle-left"></i>
                                                    </span>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="np-btn" href="{{ $emails->previousPageUrl() }}">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Next Button --}}
                                            @if ($emails->hasMorePages())
                                                <li>
                                                    <a class="np-btn" href="{{ $emails->nextPageUrl() }}">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            @else
                                                <li class="disabled">
                                                    <span class="np-btn">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-inbox table-hover text-nowrap mb-0">
                                            <tbody>
                                                @foreach ($emails as $mail)
                                                    @php
                                                        $from = $mail->getFrom();
                                                    @endphp

                                                    <tr style="cursor: pointer;" onclick="window.location='{{ route('email.read.imap', $mail->getUid()) }}'">
                                                        <td>
                                                            {{ isset($from[0]) ? $from[0]->mail : 'Unknown' }}
                                                        </td>

                                                        <td>{{ Str::limit($mail->getSubject(), 20, '...') }}</td>

                                                        {{-- <td>{{ $mail->getDate() ?? '' }}</td> --}}
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($mail->getDate())->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($emails->hasPages())
                            <ul class="pagination mb-4">

                                {{-- Previous Page Link --}}
                                @if ($emails->onFirstPage())
                                    <li class="page-item page-prev disabled">
                                        <span class="page-link">Prev</span>
                                    </li>
                                @else
                                    <li class="page-item page-prev">
                                        <a class="page-link" href="{{ $emails->previousPageUrl() }}">Prev</a>
                                    </li>
                                @endif


                                {{-- Pagination Elements --}}
                                @foreach ($emails->getUrlRange(1, $emails->lastPage()) as $page => $url)
                                    @if ($page == $emails->currentPage())
                                        <li class="page-item active">
                                            <span class="page-link">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach


                                {{-- Next Page Link --}}
                                @if ($emails->hasMorePages())
                                    <li class="page-item page-next">
                                        <a class="page-link" href="{{ $emails->nextPageUrl() }}">Next</a>
                                    </li>
                                @else
                                    <li class="page-item page-next disabled">
                                        <span class="page-link">Next</span>
                                    </li>
                                @endif

                            </ul>
                        @endif
                    </div>
                </div>
                <!-- ROW-1 CLOSED -->


            </div>
        </div>
    </div>
@endsection
