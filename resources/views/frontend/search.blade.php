@extends('frontend.layout')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li class="active">
                        <a href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li>Tìm kiếm với từ khóa {{ $keyword }}</li>
                </ul>
                <div class="boxDetail">
                    @if ($firstPost = $posts->shift())
                    <div class="topNews">
                        <p>
                            <a href="{{ url($firstPost->slug.'.html') }}">
                                <img src="{{ \App\Helpers::getImageUrlBySize($firstPost->image, 656, 270) }}" alt="{{ $firstPost->name }}">
                            </a>
                        </p>
                        <h2 class="titlePost">
                            {{ $firstPost->name }}
                        </h2>
                        <p>
                            {{ $firstPost->desc }}
                        </p>
                        <div class="viewDetail clearFix">
                            <div class="date">
                                <span class="datePost">
                                  {{ $firstPost->created_at->format('d/m/Y') }}
                                </span>
                                <span>
                                  {{ $firstPost->views }} lượt xem
                                </span>
                            </div>
                            <a href="{{ url($firstPost->slug.'.html') }}" class="viewMore">Xem thêm</a>
                        </div>
                    </div>
                    @endif
                </div>
                @if ($posts->count() > 0)
                <div class="boxNews">
                    @foreach ($posts as $post)
                    <div class="listNews">
                        <div class="item clearFix">
                            <a href="{{ url($post->slug.'.html') }}" class="thumb">
                                <img src="{{ \App\Helpers::getImageUrlBySize($post->image, 275, 200) }}" alt="">
                            </a>
                            <h3>
                                <a href="{{ url($post->slug.'.html') }}">
                                    {{ $post->name }}
                                </a>
                            </h3>
                            <p>
                               {{ $post->desc }}
                            </p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                  <span class="datePost">
                                     {{ $post->created_at->format('d/m/Y') }}
                                  </span>
                                    <span>
                                    {{ $post->views }} lượt xem
                                  </span>
                                </div>
                                <a href="{{ url($post->slug.'.html') }}" class="viewMore">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="boxPaging">
                    @include('frontend_store.pagination', ['paginate' => $posts])
                    <div class="clear"></div>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection