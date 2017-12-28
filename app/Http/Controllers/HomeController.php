<?php

namespace App\Http\Controllers;

use App\Cover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers = Cover::paginate(2);

        return view('home', compact('covers'));
    }

    public function buy($id)
    {
        $cover = Cover::findOrFail($id);
        $user = Auth::user();

        $user->purse -= $cover->price;
        $user->covers()->attach($cover);
        $user->save();

        return redirect()->action('HomeController@index');
    }
}
