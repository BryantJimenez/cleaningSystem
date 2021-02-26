<?php

namespace App\Http\Controllers;

use App\Household;
use App\Category;
use App\Pool;
use App\Company;
use App\HouseholdPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class HouseholdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $households = Household::paginate(6);
        return view('admin.households.index', compact( 'households', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        $category = Category::where('state', '=', '1')->get();
        $pool = Pool::where('state', '=', '1')->get();
        return view('admin.households.create1', compact('category', 'pool'));
    }

    public function create2()
    {
        $alarm = Company::where('type', '=', '1')->get();
        $electric = Company::where('type', '=', '2')->get();
        $water = Company::where('type', '=', '3')->get();
        $internet = Company::where('type', '=', '4')->get();
        return view('admin.households.create2', compact('alarm', 'electric', 'water', 'internet'));
    }

    public function create3()
    {
        return view('admin.households.create3');
    }

    public function create4()
    {
        return view('admin.households.create4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Household::all()->count();
        $slug = Str::slug('household','-');
        if ($count>0) {
            $slug=$slug."-".$count;
        }
            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Household::where('slug', '=', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('user_id' => Auth::user()->id, 'description' => request('description'), 'contract_agent' => 'contract_agent', 'province_id' => 'province_id', 'city_id' => request('city_id'), 'pool_id' => request('pool_id'), 'address' => request('address'), 'title' => request('title'), 'category_id' => request('category_id'), 'square_meter_h' => request('square_meter_h'), 'square_meter_p' => request('square_meter_p'), 'seat_number'=> request('seat_number'), 'reference_keys' => request('reference_keys'), 'number_keys' => request('number_keys'), 'administrator_name' => request('administrator_name'), 'administrator_phone' => request('administrator_phone'), 'slug' => $slug);
                break;
            }
        }

        $household = Household::create($data);

        if ($household) {
            return redirect()->route('viviendas.create2')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La Vivienda ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('viviendas.create2')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function store2(Request $request)
    {
        $household = Household::where([ ['user_id', '=', Auth::user()->id], ['alarm_company_id', '=', NULL], ])->firstOrFail();

        $data = array('alarm_company_id' => request('alarm_company_id'), 'electric_company_id' => request('electric_company_id'), 'water_company_id' => request('water_company_id'), 'phone_company_id' => request('phone_company_id'));

        $household->fill($data)->save();

        if ($household) {

            return redirect()->route('viviendas.create3')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'Las companias han sido registradas exitosamente.']);

        } else {
            return redirect()->route('admin')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
        
        
    }

    public function store3(Request $request)
    {
        $household = Household::where([ ['user_id', '=', Auth::user()->id], ['rent', '=', NULL], ])
        ->where([ ['user_id', '=', Auth::user()->id], ['sale', '=', NULL], ])
        ->firstOrFail();

        $data = array('sale' => request('sale'), 'rent' => request('rent'), 'sale_price' => request('sale_price'), 'rent_price' => request('rent_price'), 'rent_price_days' => request('rent_price_days'), 'rent_price_years' => request('rent_price_years'), 'rent_price_january' => request('rent_price_january'), 'rent_price_july' => request('rent_price_july'), 'rent_price_august' => request('rent_price_august'));

        $household->fill($data)->save();

        if ($household) {

            return redirect()->route('viviendas.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'Las datos de la vivienda han sido registrados exitosamente.']);

        } else {
            return redirect()->route('admin')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function store4(Request $request)
    {

        dd($request);
            // $household = Household::where([ ['user_id', '=', Auth::user()->id], ['photo', '=', '0'], ])->firstOrFail();
            // $data = array('photo' => '0');
            // $household->fill($data)->save();

            // if ($household) {

                

            //     return redirect()->route('viviendas.create3')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'Las companias han sido registradas exitosamente.']);

            // } else {
            //     return redirect()->route('admin')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
            // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $household = Household::where('slug', $slug)->firstOrFail();
        return view('admin.households.show', compact('household'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $household = Household::where('slug', $slug)->firstOrFail();
        return view('admin.households.show', compact('household'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hosuehold $hosuehold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosuehold $hosuehold)
    {
        //
    }
    public function myHouseholds()
    {
        return view('admin.households.myHouseholds');
    }
}
