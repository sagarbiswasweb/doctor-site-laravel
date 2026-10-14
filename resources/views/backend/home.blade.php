@extends('backend.master')

@section('title')
    Dashboard
@endsection

{{-- helper for formatting numbers in a more readable way (e.g., 1.5K, 2.3M, etc.) --}}
@php
    function formatNumber($number)
        {
            if ($number >= 1000000000) {
                return round($number / 1000000000, 1) . 'B+';
            }

            if ($number >= 1000000) {
                return round($number / 1000000, 1) . 'M+';
            }

            if ($number >= 1000) {
                return round($number / 1000, 1) . 'K+';
            }

            return $number;
        }
@endphp


@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                    
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Dashboard</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-2 fw-semibold">
                                            {{ formatNumber($todayVisitors) }}
                                        </h3>
                                        <p class="text-muted fs-13 mb-0">Today Visitors</p>
                                        {{-- <p class="text-muted mb-0 mt-2 fs-12">
                                            <span class="icn-box text-success fw-semibold fs-13 me-1">
                                                <i class='fa fa-long-arrow-up'></i>
                                                42%</span>
                                            since last month
                                        </p> --}}
                                    </div>
                                    <div class="col col-auto top-icn dash">
                                        <div class="counter-icon bg-primary dash ms-auto box-shadow-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-2 fw-semibold">{{ formatNumber($todayUnique) }}</h3>
                                        <p class="text-muted fs-13 mb-0">Unique Today</p>
                                        {{-- <p class="text-muted mb-0 mt-2 fs-12">
                                            <span class="icn-box text-danger fw-semibold fs-13 me-1">
                                                <i class='fa fa-long-arrow-down'></i>
                                                12%</span>
                                            since last month
                                        </p> --}}
                                    </div>
                                    <div class="col col-auto top-icn dash">
                                        <div class="counter-icon bg-secondary dash ms-auto box-shadow-secondary">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z"/></svg> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" viewBox="0 0 24 24">
                                                <path d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.96 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-2 fw-semibold">{{ formatNumber($monthly) }}</h3>
                                        <p class="text-muted fs-13 mb-0">Monthly Visitors</p>
                                        {{-- <p class="text-muted mb-0 mt-2 fs-12">
                                            <span class="icn-box text-danger fw-semibold fs-13 me-1">
                                                <i class='fa fa-long-arrow-down'></i>
                                                12%</span>
                                            since last month
                                        </p> --}}
                                    </div>
                                    <div class="col col-auto top-icn dash">
                                        <div class="counter-icon bg-danger dash ms-auto box-shadow-secondary">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z"/></svg> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" viewBox="0 0 24 24">
                                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5C3.9 3 3 3.9 3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM19 21H5V8h14v13z"/>
                                                <path d="M7 17h2v-4H7v4zm4 0h2v-7h-2v7zm4 0h2v-2h-2v2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-2 fw-semibold">{{ formatNumber($totalVisitors) }}</h3>
                                        <p class="text-muted fs-13 mb-0">Total Visitors</p>
                                        {{-- <p class="text-muted mb-0 mt-2 fs-12">
                                            <span class="icn-box text-danger fw-semibold fs-13 me-1">
                                                <i class='fa fa-long-arrow-down'></i>
                                                12%</span>
                                            since last month
                                        </p> --}}
                                    </div>
                                    <div class="col col-auto top-icn dash">
                                        <div class="counter-icon bg-warning dash ms-auto box-shadow-secondary">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z"/></svg> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" viewBox="0 0 24 24">
                                                <path d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3z"/>
                                                <path d="M8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3z"/>
                                                <path d="M8 13c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                                <path d="M16 13c-.29 0-.62.02-.97.05C16.86 13.89 18 15.15 18 17v2h6v-2c0-2.66-5.33-4-8-4z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END-->


                <div class="card mt-5 mb-3 p-3 shadow">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8">
                            <h5 class="mb-2">Visitors by date range</h5>
                            <p class="text-muted mb-0">Showing <strong>{{ $visitorRangeLabel }}</strong> visitors from <strong>{{ $visitorFrom }}</strong> to <strong>{{ $visitorTo }}</strong>.</p>
                        </div>
                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                            <span class="badge bg-primary">Total: {{ $visitorRangeVisitors }}</span>
                            <span class="badge bg-secondary">Unique: {{ $visitorRangeUnique }}</span>
                        </div>
                    </div>

                    <form action="{{ route('backend.home') }}" method="GET" class="row g-2 align-items-end mb-3">
                        <div class="col-sm-6 col-md-3">
                            <label class="form-label">Filter</label>
                            <select id="visitor-filter" name="visitor_filter" class="form-select">
                                <option value="this_month" {{ $visitorFilter === 'this_month' ? 'selected' : '' }}>This month</option>
                                <option value="last_month" {{ $visitorFilter === 'last_month' ? 'selected' : '' }}>Last month</option>
                                <option value="custom" {{ $visitorFilter === 'custom' ? 'selected' : '' }}>Custom range</option>
                            </select>
                        </div>
                        <div id="custom-range-fields" class="col-sm-6 col-md-3" style="display: {{ $visitorFilter === 'custom' ? 'block' : 'none' }};">
                            <label class="form-label">From</label>
                            <input type="date" name="from" class="form-control" value="{{ $visitorFrom }}">
                        </div>
                        <div id="custom-range-fields-to" class="col-sm-6 col-md-3" style="display: {{ $visitorFilter === 'custom' ? 'block' : 'none' }};">
                            <label class="form-label">To</label>
                            <input type="date" name="to" class="form-control" value="{{ $visitorTo }}">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Apply
                                </button>

                                <a href="{{ route('backend.home') }}" class="btn btn-secondary">
                                    Reset
                                </a>
                            </div>
                        </div>
                    </form>

                    <div id="visitorChart" style="position: relative; height: 400px; width: 100%; margin-bottom: 100px">
                        <canvas id="visitorChartCanvas"></canvas>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const filterSelect = document.getElementById('visitor-filter');
                        const fromField = document.getElementById('custom-range-fields');
                        const toField = document.getElementById('custom-range-fields-to');

                        function toggleCustomFields() {
                            const showCustom = filterSelect.value === 'custom';
                            fromField.style.display = showCustom ? 'block' : 'none';
                            toField.style.display = showCustom ? 'block' : 'none';
                        }

                        filterSelect.addEventListener('change', toggleCustomFields);
                        toggleCustomFields();
                    });
                </script>
                
            </div>
        </div>
    </div>
@endsection


