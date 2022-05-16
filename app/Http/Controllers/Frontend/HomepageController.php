<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Setting
        $setting = DB::table('settings')->where('key', '=', 'website.config')->first();
        if (isset($setting))
            $setting = json_decode($setting->value, true);
        else
            $setting = array();
        // Info
        $info = DB::table('settings')->where('key', '=', 'footer_info')->first();
        if (isset($info))
            $info = json_decode($info->value, true);
        else
            $info = array();
        $solutions = DB::table('solutions')->select('name', 'share_url', 'icon', 'excerpt')->get();
        $partners = DB::table('partners')->select('name', 'logo', 'url')->where('type', '=', 1)->get(); // 1: ĐỐI TÁC CHIẾN LƯỢC
        $comments = DB::table('comments')->select('author_name', 'author_avatar', 'content')->get();
        $authors = DB::table('authors')->select('name', 'avatar', 'share_url')->get();
        return view('homepage.index', compact('setting', 'info', 'solutions', 'partners', 'comments', 'authors'));
    }
}
