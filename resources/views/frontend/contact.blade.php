@extends('frontend.layout')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <div class="boxHistory">
                    <div class="globalTitle">
                        Bài viết nổi bật
                    </div>
                    <div class="data owl-carousel" id="slideHistory">
                        @foreach (\App\Helpers::getHighLightIndexPosts() as $highlightPost)
                            <div class="item">
                                <div class="block">
                                    <a href="{{ url($highlightPost->slug.'.html') }}" class="thumbHistory">
                                        <img src="{{ \App\Helpers::getImageUrlBySize($highlightPost->image, 340, 225) }}" alt="History" width="340" height="225">
                                    </a>
                                    <h3>
                                        <a href="{{ url($highlightPost->slug.'.html') }}">
                                            {{ \Illuminate\Support\Str::limit($highlightPost->name, 80) }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection