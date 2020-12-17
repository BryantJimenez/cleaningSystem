<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Jenssegers\Agent\Agent;

class WebController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
        return view('web.home');
    }

    public function create()
    {
        return view('auth.register');
    }

     public function households()
    {
        return view('web.households');
    }

    public function services()
    {
        return view('web.services');
    }

     public function legal()
    {
        return view('web.legal');
    }

    public function more()
    {
        return view('web.more');
    }

    public function shoppingCart()
    {
        return view('web.cart');
    }

    public function purchase()
    {
        return view('web.purchase');
    }

    public function rental()
    {
        return view('web.rental');
    }

   
}
