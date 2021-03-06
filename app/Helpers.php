<?php
/**
 * Created by PhpStorm.
 * User: tieungao
 * Date: 2020-10-06
 * Time: 17:23
 */

namespace App;


use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Backpack\Settings\app\Models\Setting;

class Helpers
{
    public const SETTINGS = [
        [
            'key'         => 'meta_index_title',
            'name'        => 'Meta Index Title',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_index_desc',
            'name'        => 'Meta Index Description',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_index_keywords',
            'name'        => 'Meta Index Keywords',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_contact_title',
            'name'        => 'Meta Contact Title',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_contact_desc',
            'name'        => 'Meta Contact Description',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_contact_keywords',
            'name'        => 'Meta Contact Keywords',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'meta_video_title',
            'name'        => 'Meta Video Title',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_video_desc',
            'name'        => 'Meta Video Description',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_video_keywords',
            'name'        => 'Meta Video Keywords',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_copyright',
            'name'        => 'Copy Right',
            'description' => 'For SEO',
            'value'       => 'MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'company_contact',
            'name'        => 'Copy Right',
            'description' => 'For SEO',
            'value'       => 'Tầng 5, Tòa nhà 29 T1 - Hoàng Đạo Thúy - Trung Hòa - Cầu Giấy - Hà Nội- Điện thoại: (04) 62824344 - Fax: 04.62824263',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'website_logo_pc',
            'name'        => 'Website Logo Pc',
            'description' => 'For SEO (Size 270x110)',
            'value'       => 'uploads/logo.png',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'website_logo_sp',
            'name'        => 'Website Logo Mobile',
            'description' => 'For SEO',
            'value'       => 'uploads/logosp.png',
            'field'       => '{"name":"value","label":"Value","type":"browse"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'facebook_app_id',
            'name'        => 'Facebook App ID',
            'description' => 'For SEO',
            'value'       => '188252524956805',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'website_name',
            'name'        => 'Website Name',
            'description' => 'For SEO',
            'value'       => 'suachua248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'youtube_link',
            'name'        => 'Youtube Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'google_link',
            'name'        => 'Google Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'skype_link',
            'name'        => 'Skype Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'facebook_link',
            'name'        => 'Facebook Link',
            'description' => 'For SEO',
            'value'       => '#',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'analytics',
            'name'        => 'Analytics Code',
            'description' => 'For SEO',
            'value'       => '',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'webmaster',
            'name'        => 'Webmaster Code',
            'description' => 'For SEO',
            'value'       => '',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],

        [
            'key'         => 'endpage',
            'name'        => 'End Page HTML',
            'description' => 'For SEO',
            'value'       => '',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],


    ];

    public static function getMainCategories()
    {
        return Category::whereNull('parent_id')->get();
    }

    public static function getContactStatuses()
    {
        return [
            0 => 'Mới tạo',
            1 => 'Đang xử lý',
            2 => 'Kết thúc'
        ];
    }

    public static function getYouTubeId($url)
    {
        // Extract id
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $videoId);
        return $youtubeVideoId = isset($videoId[1]) ? $videoId[1] : "";
    }

    public static function getYoutubeImage($url)
    {
        $youtubeVideoId = self::getYouTubeId($url);

        return 'https://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
    }

    public static function getEmberCodeYoutube($url, $w = 560, $h = 315)
    {
        $youtubeVideoId = self::getYouTubeId($url);

        return '<iframe width="'.$w.'" height="'.$h.'" src="https://www.youtube.com/embed/'.$youtubeVideoId.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }

    public static function getRightVideos()
    {
        return Video::where('status', true)
            ->latest('created_at')
            ->limit(4)
            ->get();
    }

    public static function getLatestPosts()
    {
        return Post::where('status', true)
            ->latest('created_at')
            ->limit(6)
            ->get();
    }

    public static function getFocusIndexPosts()
    {
        return Post::where('status', true)
            ->where('is_focus_index', true)
            ->latest('created_at')
            ->limit(3)
            ->get();
    }

    public static function getHighLightIndexPosts()
    {
        return Post::where('status', true)
            ->where('is_highlight_index', true)
            ->latest('created_at')
            ->limit(4)
            ->get();
    }

    public static function getImageUrlBySize($path, $w, $h)
    {
        return url('img/cache/'.$w.'x'.$h.'/'.str_replace('uploads/', '', $path));
    }

    public static function configGet($key)
    {
        return Setting::get($key);
    }

    public static function getMainCategoryHavePosts($limit=8)
    {
        return Category::whereNull('parent_id')->where('status', true)->limit($limit)->get();
    }

    public static function getCategoryPosts($category, $limit=3)
    {
        $cateIds = ($category->children->count() > 0) ? $category->children->pluck('id')->all() : [$category->id];

        return Post::publish()
            ->whereIn('category_id', $cateIds)
            ->latest('updated_at')
            ->limit($limit)
            ->get();
    }

}