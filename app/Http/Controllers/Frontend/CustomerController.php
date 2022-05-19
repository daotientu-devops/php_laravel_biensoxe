<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\SearchHistories;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * @param Request $request
     * @return false|string
     */
    public function register(Request $request)
    {
        return view('frontend.customer');
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function send(Request $request)
    {
        $license_plate = $request->get('license_plate');
        $brand_name = $request->get('brand_name');
        $url = $request->get('url');
        $image_url = $request->get('image_url');
        $licensePlate = new SearchHistories([
            'license_plate' => $license_plate,
            'brand_name' => $brand_name,
            'url' => $url,
            'image_url' => $image_url
        ]);
        $licensePlate->save();
        return redirect('gui-thong-tin')->with('message', 'Gửi thông tin biển số xe thành công');
    }
}
