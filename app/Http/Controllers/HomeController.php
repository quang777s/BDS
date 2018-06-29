<?php

namespace App\Http\Controllers;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = DB::table('infos')->orderBy('date', 'desc')->paginate(40);

        return view('info.index', ['infos' => $infos]);
    }

    public function detail($id)
    {
        $info = DB::table('infos')->find($id);

        return view('info.detail', ['info' => $info]);
    }

    public function home()
    {
        return view('home');
    }

    public function city($id)
    {
        $infos = DB::table('infos')->where('city_id', $id)->orderBy('date', 'desc')->paginate(40);

        return view('info.index', ['infos' => $infos]);
    }
}
