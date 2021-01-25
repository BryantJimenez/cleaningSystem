<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Jenssegers\Agent\Agent;
use App\Section;
use App\Opinion;
use App\Service;

class WebController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
        $section = Section::where('id', '=', '1')->firstOrFail();
        $opinions = Opinion::all();
        $services = Service::all();
        return view('web.home', compact('section', 'opinions','services'));
    }

    public function create()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('auth.register', compact('section'));
    }

     public function households()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.households', compact('section'));
    }

    public function services()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        $services = Service::all();
        return view('web.services', compact('section','services'));
    }

     public function legal()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.legal', compact('section'));
    }

    public function more()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.more', compact('section'));
    }

    public function shoppingCart()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.cart', compact('section'));
    }

    public function purchase()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.purchase', compact('section'));
    }

    public function rental()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.rental', compact('section'));
    }

    public function myHouseholds()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.myHouseholds', compact('section'));
    }

    public function myPayments()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.payments', compact('section'));
    }

    public function myServices()
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.myServices', compact('section'));
    }

    public function myPurchases($n)
    {
        $section = Section::where('id', '=', '1')->firstOrFail();
        return view('web.myPurchases', compact('section', 'n'));
    }

   
}
