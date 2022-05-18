<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Core\Models\Category;
use App\Core\Models\Page;
use App\Core\Models\Posts;
use App\Core\Models\Disease;
use App\Core\Models\Question;
use App\Core\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard
     * @return view
     */
    public function index()
    {
        return view('backend.dashboard');
    }
}
