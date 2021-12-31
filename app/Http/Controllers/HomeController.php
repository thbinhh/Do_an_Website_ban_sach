<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index()
    {
        $relate_product = DB::table('book')->join('author','author.AuthorID','=','book.AuthorID')->get();
        $detail_news = DB::table('news')->get();
        return view('pages.home')->with('relate_product',$relate_product)->with('news',$detail_news);
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function post_signup(Request $request)
    {
        $data1 = array();
        $data2 = array();
        $username = $request->username;
        $password = bcrypt($request->password);
        $email = $request->email;

        $data2['username'] = $username;
        $data2['password'] = $password;
        $data2['Email'] = $email;
        DB::table('customer')->insert($data2);

        $data1['username'] = $username;
        $data1['password'] = $password;
        $data1['Role'] = 2;
        $data1['Email'] = $email;
        $data1['CustomerID'] = ($custumerid = DB::table('customer')->where('username',$username)->pluck('CustomerID'))->first();
        DB::table('db_user')->insert($data1);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function gioi_thieu()
    {
        return view('introduce.introduce');
    }
    public function chinh_sach()
    {
        return view('chinhsach.chinhsach');
    }
    public function lien_he()
    {
        return view('lienhe.lienhe');
    }

    public function search_book(Request $request){
        $search_book = DB::table('Book')
        ->join('Author','Author.AuthorID','=','Book.AuthorID')
        ->join('Producer','Producer.ProducerID','=','Book.ProducerID')
        ->join('Category','Category.CategoryID','=','Book.CategoryID')
        ->where('BookName', 'like', '%'.$request->book.'%')
        ->orwhere('AuthorName', 'like', '%'.$request->book.'%')
        ->orwhere('ProducerName', 'like', '%'.$request->book.'%')
        ->orwhere('CategoryName', 'like', '%'.$request->book.'%')
        ->orwhere('BookID', 'like', '%'.$request->book.'%')->get();     
        $search_author = DB::table('Author')->get();
        $producer =  DB::table('Producer')->get();
        $category =  DB::table('Category')->get();
        $detail_product = DB::table('book')->get();   
        $author = DB::table('author')->get();
        $category = DB::table('category')->get();
        return view('pages.search_book_cs')->with('product',$detail_product)->with('author',$author)->with('category',$category)->with('search_book', $search_book)->with('all_book1', $search_author)->with('all_book2',$producer)->with('all_book3',$category);
    }
}
