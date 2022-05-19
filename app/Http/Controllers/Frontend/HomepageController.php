<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\LicensePlate;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.homepage');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function search(Request $request)
    {
        $license_plate = $request->get('license_plate');
        $license_plate_id = LicensePlate::query()->select('id')->where('license_plate', $license_plate)->first()->id;
        $searchHistory = new ([
            'license_plate_id' => $license_plate_id
        ]);
        $searchHistory->save();
        return redirect('/')->with('message', 'Tìm kiếm thông tin biển số xe thành công');
    }
}
