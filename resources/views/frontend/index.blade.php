@extends('frontend.layout')

@section('content')
    <section class="boxFeature">
        <div class="container">

        </div>
    </section>
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
    <section class="boxTabs">
        @foreach (\App\Helpers::getMainCategoryHavePosts()->chunk(2) as $mainIndex => $showCates)
        <div class="container">


            <div class="horizontalTab">
                <ul class="navTabs clearFix">
                    @foreach ($showCates as $index => $showCate)
                        <li>
                            <a href="#tab0{{$mainIndex}}{{$index+1}}" title="Tab0{{$mainIndex}}{{$index+1}}">{{ $showCate->name }}</a>
                        </li>
                    @endforeach

                </ul>
                @foreach ($showCates as $index => $showCate)
                    <article class="tabContent clearFix" id="tab0{{$mainIndex}}{{ $index +1 }}">
                        @foreach (\App\Helpers::getCategoryPosts($showCate) as $catePost)
                            <div class="item clearFix">
                                <a href="{{ url($catePost->slug.'.html') }}" class="thumb">
                                    <img src="{{ \App\Helpers::getImageUrlBySize($catePost->image, 320, 225) }}" alt="{{ $catePost->name }}" width="320" height="225">
                                </a>
                                <h3>
                                    {{ \Illuminate\Support\Str::limit($catePost->name, 80) }}
                                </h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit($catePost->desc, 200) }}
                                </p>
                            </div>
                        @endforeach
                    </article>
                @endforeach
            </div>

        </div>
        @endforeach
    </section>

@endsection