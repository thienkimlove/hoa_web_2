@extends('frontend.layout')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li class="active">
                        <a href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li><a href="{{ url($post->category->slug) }}">{{ $post->category->name }}</a></li>
                    <li>{{ $post->name }}</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">
                        {{ $post->name }}
                    </h2>
                    {!! $post->content !!}
                </div>
                <!-- //listButton -->

                <!-- //boxOther -->
                <div class="boxOther">
                    <h3 class="titleOther">
                        <a href="#">Bài liên quan</a>
                    </h3>
                    <ul class="listOther" id="listOrther">
                        @foreach($latestNews as $latestNew)
                            <li>
                                <a href="{{ url($latestNew->slug.'.html') }}">
                                    {{ $latestNew->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection