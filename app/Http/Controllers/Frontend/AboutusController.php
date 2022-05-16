<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AboutusController extends Controller
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
        $news = DB::table('posts')->where([
            ['status', 'publish'],
            ['category_id', 1] // 1: Báo chí
        ])->orderBy('id', 'DESC')->get();
        $televisions = DB::table('posts')->where([
            ['status', 'publish'],
            ['category_id', 2] // 2: Truyền hình
        ])->orderBy('id', 'DESC')->get();
        $projects = DB::table('posts')->where([
            ['status', 'publish'],
            ['category_id', 3] // 3: Dự án
        ])->orderBy('id', 'DESC')->get();
        return view('about.us', compact('setting', 'info', 'news', 'televisions', 'projects'));
    }
}
