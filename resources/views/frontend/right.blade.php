<div class="layoutRight">
    @if ($rightVideos = \App\Helpers::getRightVideos())
    <div class="boxVideo">
        <h3 class="globalTitle">
            Góc Video
        </h3>
        <div class="listVideo">
            @if ($firstVideos = $rightVideos->shift())
            <div class="videoScreen">
                {!! \App\Helpers::getEmberCodeYoutube($firstVideos->link, '100%', 200) !!}
            </div>
            @endif
            @if ($rightVideos->count() > 0)
                    @foreach ($rightVideos as $rightVideo)
                    <div class="item">
                        <a href="{{ url('video/'.$rightVideo->slug) }}" class="thumb">
                            <img src="{{ \App\Helpers::getYoutubeImage($rightVideo->link) }}" width="105" height="62" alt=""/>
                        </a>
                        <h3>
                            <a href="{{ url('video/'.$rightVideo->slug) }}">
                                {{ $rightVideo->name }}
                            </a>
                        </h3>
                    </div>
                    @endforeach
            @endif
        </div>
    </div>
    @endif
</div>