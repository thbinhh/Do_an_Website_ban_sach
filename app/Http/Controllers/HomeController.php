<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index()
    {
        $relate_product = DB::table('book')->join('author','author.AuthorID','=','book.AuthorID')->get();
        return view('pages.home')->with('relate_product',$relate_product);
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

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
}
