@extends('backend.master')

@section('title')
    All Messages
@endsection

@section('content')
<style>
    .unread-row{
        background-color:#ddffdf;
        font-weight:600;
    }
</style>
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
                            <li class="breadcrumb-item active" aria-current="page">All Messages</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">All Messages</h3>
                                <button id="delete-selected" class="btn btn-danger ms-4">
                                    <i class="fe fe-trash"></i> Delete Selected
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">
                                                    {{-- <input type="checkbox" id="select-all"> --}}
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" id="select-all" class="custom-control-input" name="example-checkbox2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                <th class="wd-15p border-bottom-0">SL</th>
                                                <th class="wd-15p border-bottom-0">From</th>
                                                <th class="wd-20p border-bottom-0">Email</th>
                                                {{-- <th class="wd-15p border-bottom-0">Phone</th> --}}
                                                <th class="wd-10p border-bottom-0">Message</th>
                                                <th class="wd-25p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $message)
                                                <tr class="{{ $message->is_read ? '' : 'unread-row' }}">
                                                    <td>
                                                        {{-- <input type="checkbox" class="message-checkbox" value="{{ $message->id }}"> --}}
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox"  value="{{ $message->id }}" class="custom-control-input message-checkbox" name="example-checkbox2">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $message->name }}</td>
                                                    <td>{{ $message->email }}</td>
                                                    {{-- <td>{{ $message->phone }}</td> --}}
                                                    <td>{{ Str::limit($message->message, 30) }}</td>
                                                    <td>
                                                        <a href="{{ route('message.view', $message->id) }}" class="btn btn-primary btn-sm"><i class="fe fe-eye"></i></a>
                                                        {{-- <a href="javascript:void(0);" class="btn btn-success btn-sm"><i class="fe fe-edit"></i></a> --}}
                                                        <a href="{{ route('email.compose') }}?to={{ urlencode($message->email) }}" class="btn btn-success btn-sm">
                                                            <i class="fe fe-mail"></i> Reply
                                                        </a>
                                                        <form action="{{ route('message.delete', $message->id) }}" 
                                                            method="POST" 
                                                            style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this message?')">
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

    <script>
    document.getElementById('select-all').addEventListener('change', function(){

        let checkboxes = document.querySelectorAll('.message-checkbox');

        checkboxes.forEach(cb=>{
            cb.checked = this.checked;
        });

    });

    document.getElementById('delete-selected').addEventListener('click', function(){

    let ids = [];

    document.querySelectorAll('.message-checkbox:checked').forEach(cb=>{
        ids.push(cb.value);
    });

    if(ids.length === 0){
        alert('Please select messages');
        return;
    }

    if(!confirm('Delete selected messages?')){
        eturn;
    }

    fetch("{{ route('message.bulk.delete') }}",{

    method:'POST',

    headers:{
        'Content-Type':'application/json',
        'X-CSRF-TOKEN':'{{ csrf_token() }}'
    },

    body:JSON.stringify({ids:ids})

        }).then(res=>res.json())
        .then(data=>{
        location.reload();
        });

    });

    </script>
@endsection