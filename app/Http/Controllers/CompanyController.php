<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $companies = Company::where('name', '!=', 'Ninguna')->where('state', '=', '1')->get();
        return view('admin.companies.index', compact( 'companies', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $count = Company::where('name', request('name'))->where('name', request('name'))->count();
         $slug = Str::slug(request('name'), '-');
         if ($count>0) {
            $slug=$slug."-".$count;
        }

            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Company::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug, 'type' => request('type'));
                break;
            }
        }

        $company = Company::create($data);

        if ($company) {
            return redirect()->route('companias.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La Compania ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('companias.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        return view('admin.companies.edit', compact("company"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();

        $company->fill($request->all())->save();

        if ($company) {
            return redirect()->route('companias.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Compania ha sido editada exitosamente.']);
        } else {
            return redirect()->route('companias.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        $company->delete();

        if ($company) {
            return redirect()->route('companias.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'La Compania ha sido eliminada exitosamente.']);
        } else {
            return redirect()->route('companias.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, $slug) {

        $company = Company::where('slug', $slug)->firstOrFail();
        $company->fill(['state' => "0"])->save();

        if ($company) {
            return redirect()->route('companias.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Compania ha sido desactivada exitosamente.']);
        } else {
            return redirect()->route('companias.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, $slug) {

        $company = Company::where('slug', $slug)->firstOrFail();
        $company->fill(['state' => "1"])->save();

        if ($company) {
            return redirect()->route('companias.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Compania ha sido activada exitosamente.']);
        } else {
            return redirect()->route('companias.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
