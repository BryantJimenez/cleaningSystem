<?php

namespace App\Http\Controllers;

use App\Business;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $businesses = Business::all();
        return view('admin.businesses.index', compact( 'businesses', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.businesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $count = Business::where('name', request('name'))->where('name', request('name'))->count();
         $slug = Str::slug(request('name'), '-');
         if ($count>0) {
            $slug=$slug."-".$count;
        }

            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Business::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug, 'phone' => request('phone'), 'specialty' => request('specialty'), 'address' => request('address'));
                break;
            }
        }

        $business = Business::create($data);

        if ($business) {
            return redirect()->route('empresas.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La Empresa ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('empresas.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $business = Business::where('slug', $slug)->firstOrFail();
        return view('admin.businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $business = Business::where('slug', $slug)->firstOrFail();
        return view('admin.businesses.edit', compact("business"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $business = Business::where('slug', $slug)->firstOrFail();

        $business->fill($request->all())->save();

        if ($business) {
            return redirect()->route('empresas.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Empresa ha sido editada exitosamente.']);
        } else {
            return redirect()->route('empresas.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $business = Business::where('slug', $slug)->firstOrFail();
        $business->delete();

        if ($business) {
            return redirect()->route('empresas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'La Empresa ha sido eliminada exitosamente.']);
        } else {
            return redirect()->route('empresas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, $slug) {

        $business = Business::where('slug', $slug)->firstOrFail();
        $business->fill(['state' => "0"])->save();

        if ($business) {
            return redirect()->route('empresas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Empresa ha sido desactivada exitosamente.']);
        } else {
            return redirect()->route('empresas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, $slug) {

        $business = Business::where('slug', $slug)->firstOrFail();
        $business->fill(['state' => "1"])->save();

        if ($business) {
            return redirect()->route('empresas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Empresa ha sido activada exitosamente.']);
        } else {
            return redirect()->route('empresas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function employee($slug){
        $business = Business::join('employees', 'employees.business_id', '=', 'businesses.id')
                                ->select('businesses.*', 'employees.*')
                                ->where('businesses.slug', '=', $slug)
                                ->get();
        $num = 1;                        
        return view('admin.businesses.employees', compact('business', 'num'));
    }
}
