<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Material;
use App\Models\SearchBy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function frontIndex() 
    {
        $materials = Material::all();
        return view('frontend.index', compact('materials'));
    }

    public function searchBook(Request $request)
    {
        $search = $request->search;
        $search_by = $request->search_by;
        if ($search === null) {
            return redirect('/');
        } else {
            if ($search_by == "Last Week") {
                $previous_week = strtotime("-1 week +6 days");
                $start_week = strtotime("last sunday midnight",$previous_week);
                $end_week = strtotime("next saturday",$start_week);
                $start_week = date("Y-m-d",$start_week);
                $end_week = date("Y-m-d",$end_week);
                $materials = Material::whereBetween('created_at', [$start_week, $end_week])->get();
            } else {
                $materials = Material::where($search_by, 'like', '%' .$search.'%')->get();
            }
            return view('frontend.search', compact('materials', 'search_by'));
        }
    }

    public function viewItem($id)
    {
        $item = Material::findOrFail($id);
        return view('frontend.viewItem', compact('item'));
    }
}
