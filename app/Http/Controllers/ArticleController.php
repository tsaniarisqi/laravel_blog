<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use App\Comment;
use Illuminate\Support\Facades\Gate;
use PDF;

class ArticleController extends Controller
{
    public function getAll(){
        $article = Cache::rememberForever('article', function(){
            return Article::all();
        });
        return view('article', compact('article'));
    }

    public function getById($id){
        $article=Article::find($id);
        $komen = Comment::all();
        return view('article',['article'=>$article, 'komen'=>$komen, 'id'=>$id]);
    }

    public function insertData(Request $req, $id){
        $faker = Faker::create();
        $hasil = Article::find($id);
        $user = new Comment();
        $user->name = $req->nama;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->profile_picture = $faker->imageUrl($width = 50, $height =50);
        $user->save();
        return redirect()->action('ArticleController@getById', ['id'=>$id]); 
    }

    public function index()
    {
        $article = Article::all();
        return view('manage',['article' => $article]);
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }

        Article::create([
            'title1' => $request->title,
            'content1' => $request->content,
            'featured_image1' => $image_name,
        ]);
        return redirect('/manage');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('edit',['article'=>$article]);
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);

        $article->title1 = $request->title;
        $article->content1 = $request->content;
        // $article->featured_image1 = $request->image;
        if($article->featured_image &&
        file_exists(storage_path('app/public/' . $article->featured_image1)))
            {
                \Storage::delete('public/'.$article->featured_image);
            }
            $image_name = $request->file('image')->store('images', 'public');
            $article->featured_image1 = $image_name;
        $article->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }

    public function __construct ()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next) {
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
    }

    public function search2(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    	// mengambil data dari table article sesuai pencarian data
		$article = DB::table('articles')
		->where('title1','like',"%".$search."%")
		->paginate();
 
    	// mengirim data article ke view manage
		return view('manage',['article' => $article]);
 
    }
}
