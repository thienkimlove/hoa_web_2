@extends('frontend.layout')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li class="active">
                        <a href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li>Videos</li>
                </ul>
                <div class="boxMedia">
                    <h3 class="globalTitle">
                        <a href="{{ url('video') }}">Video</a>
                    </h3>
                    @if ($mainVideo)
                    <div class="hotVideo clearFix">
                        <div class="thumbVideo">
                            {!! \App\Helpers::getEmberCodeYoutube($mainVideo->link, '100%', 315) !!}
                        </div>
                    </div>
                    @endif
                    @foreach ($videos as $video)
                    <article class="item">
                        <a class="thumb" href="{{ url('video/'.$video->slug) }}" title="{{ $video->name }}">
                            <img src="{{ \App\Helpers::getYoutubeImage($video->link) }}" width="303" height="130" alt=""/>
                        </a>
                        <h3>
                            <a href="{{ url('video/'.$video->slug) }}" title="{{ $video->name }}">
                                {{ $video->name }}
                            </a>
                        </h3>
                    </article>
                    @endforeach
                    <!-- /paging -->
                    <div class="boxPaging">
                        @include('frontend_store.pagination', ['paginate' => $videos])
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div><!--//box-media-->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection