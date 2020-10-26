<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta content='GCL' name='generator'/>
    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="{{ \App\Helpers::configGet('website_name') }}">
    <meta property="fb:app_id" content="{{ \App\Helpers::configGet('facebook_app_id') }}" />

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">


    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="{{ \App\Helpers::configGet('website_name') }}"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>


    <link rel="stylesheet" href="/frontend/css/ngocdon.css?v1=1111" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    {!! \App\Helpers::configGet('webmaster') !!}

</head>
<body>
{!! \App\Helpers::configGet('analytics') !!}


<header class="pr">
    <div class="fixCen head-info">
        <h1 class="rs leftSide"><a href="{{ url('/') }}" class="logo" title="{{ \App\Helpers::configGet('website_name') }}" target="_blank">
                <img src="{{ \App\Helpers::configGet('website_logo_pc') }}" alt="{{ \App\Helpers::configGet('website_name') }}" class="imgFull">
            </a></h1>

        <div class="rightSide">
            <form action="{{ url('search') }}" method="GET" class="search-on-top">
                <input type="text" name="q" placeholder="Tìm kiếm ...">
            </form>
        </div>
    </div>
    <nav id="main-nav" class="mainMenu">
        <div class="bgTop">
            <a href="javascript:void(0)" class="btnMenu"></a>
        </div>
        <ul class="fixCen pr rs">
            <li>
                <a class="{{(isset($page) && $page == 'index') ? 'current' : ''}}" href="{{url('/')}}" title="">Trang chủ</a>
            </li>

            @if ($headerCategories = \App\Helpers::getMainCategories())
                @foreach ($headerCategories as $headerCategory)
                    <li>
                        <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->children->pluck('slug')->all()))) ? 'current' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                        @if ($headerCategory->children->count() > 0)
                            <ul class="hasSub">
                                @foreach ($headerCategory->children as $childCategory)
                                    <li><a class="{{(isset($page) && $page == $childCategory->slug) ? 'current' : ''}}" href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif
            <li><a class="{{(isset($page) && $page == 'video') ? 'current' : ''}}" href="{{ route('frontend.video') }}">Videos</a></li>
            <li><a class="{{(isset($page) && $page == 'lien-he') ? 'current' : ''}}" href="{{ route('frontend.contact') }}">Liên hệ</a></li>
        </ul>
    </nav>
</header>


<!-- /endboxTabs -->
@yield('content')

<footer class="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="{{ \App\Helpers::configGet('youtube_link') }}" class="yu">Youtube</a></li>
                    <li><a href="{{ \App\Helpers::configGet('skype_link') }}" class="sk">Skype</a></li>
                    <li><a href="{{ \App\Helpers::configGet('google_link') }}" class="go">googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li>
                        <a href="{{url('/')}}" title="">TRANG CHỦ</a>
                    </li>

                    @if ($headerCategories = \App\Helpers::getMainCategories())
                        @foreach ($headerCategories as $headerCategory)
                            <li>
                                <a href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                            </li>
                        @endforeach
                    @endif
                    <li><a href="{{ route('frontend.video') }}">Videos</a></li>
                    <li><a href="{{ route('frontend.contact') }}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="/frontend/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery.responsiveTabs.min.js"></script>
<script type="text/javascript" src="/frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/frontend/js/common.js"></script>
@yield('after_scripts')

</body>
</html>