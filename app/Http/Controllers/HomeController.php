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
            $materials = Material::where($search_by, 'like', '%' .$search.'%')->get();
            return view('frontend.search', compact('materials', 'search_by'));
        }
    }

    public function searchByDate(Request $request)
    {
        $from = $request->date_from;
        $to = $request->date_to;
        $materials = Material::where('created_at', '>=', $from)->where('created_at', '<=', $to)->get();
        return view('frontend.search', compact('materials'));
    }

    public function viewItem($id)
    {
        $item = Material::findOrFail($id);
        return view('frontend.viewItem', compact('item'));
    }
}
