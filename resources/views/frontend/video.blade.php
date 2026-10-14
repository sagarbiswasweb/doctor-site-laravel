@extends('frontend.master')

@section('title')
    Health Videos
@endsection

@section('content')

<section class="video-section py-5">
    <div class="container">

        <div class="row g-4" id="videoContainer">

            @forelse ($videos as $video)

                <div class="col-md-6 col-lg-4 video-item {{ $loop->index >= 6 ? 'd-none' : '' }}">

                    <div class="video-card">

                        <div class="video-frame">
                            {!! str_replace('<iframe','<iframe loading="lazy"',$video->embed_code) !!}
                        </div>

                        <div class="video-content">
                            <h5>{{ $video->title }}</h5>
                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <h4>No Video Found</h4>
                </div>

            @endforelse

        </div>

        @if($videos->count() > 6)
        <div class="text-center mt-5">
            <button id="loadMoreBtn" class="load-more-btn">
                Load More Videos
            </button>
        </div>
        @endif

    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function(){

        let visible = 6;
        const items = document.querySelectorAll('.video-item');
        const btn = document.getElementById('loadMoreBtn');

        if(btn){

            btn.addEventListener('click', function(){

                for(let i = visible; i < visible + 6; i++){

                    if(items[i]){
                        items[i].classList.remove('d-none');
                    }

                }

                visible += 6;

                if(visible >= items.length){
                    btn.remove();
                }

            });

        }

    });
</script>
@endpush