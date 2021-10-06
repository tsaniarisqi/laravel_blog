<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    // public function getByAll()
    // {
    //     $article=Article::all();
    //     return view('home',['article'=>$article]);
    // }

    public function getByAll()
    {
        $article=DB::table('articles')->paginate(5);
        return view('home',['article'=>$article]);
    }

    // public function getById($id){
    //     $article=Article::find($id);
    //     return view('article',['article'=>$article]);
    // }

    public function getById($id){
        $article=Article::find($id);
        $komen = Comment::all();
        return view('article',['article'=>$article, 'komen'=>$komen, 'id'=>$id]);
    }

    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    	// mengambil data dari table article sesuai pencarian data
		$article = DB::table('articles')
		->where('title1','like',"%".$search."%")
		->paginate();
 
    	// mengirim data article ke view manage
		return view('home',['article' => $article]);
 
    }
}
