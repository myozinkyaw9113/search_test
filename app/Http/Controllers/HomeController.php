<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\SearchBy;
use Illuminate\Http\Request;

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
        $searchBy = SearchBy::all();
        return view('frontend.index', compact('searchBy'));
    }

    public function searchBook(Request $request)
    {
        $search = $request->input('search');
        $search_by = $request->input('search_by');
        if ($search === null) {
            return redirect('/');
        } else {
            $materials = Material::where($search_by, 'like', '%' .$search.'%')->get();
            return view('frontend.search', compact('materials', 'search_by'));
        }
    }

    public function viewItem($id)
    {
        $item = Material::findOrFail($id);
        return view('frontend.viewItem', compact('item'));
    }
}
