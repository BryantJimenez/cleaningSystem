<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $services = Service::all();
        return view('admin.services.index', compact( 'services', 'num'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Service::where('name', request('name'))->count();
        $slug = Str::slug(request('name'), '-');
        if ($count>0) {
            $slug=  $slug."-".$count;
        }

        // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Service::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data=array('name' => request('name'), 'slug' => $slug, 'square_meter' => request('square_meter'), 'sale' => request('sale'),'description' => ('description'));
                break;
            }
        }

         // Mover imagen a carpeta admins y extraer nombre
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $photo=$slug.".".$file->getClientOriginalExtension();
            $file->move(public_path().'/admins/img/services/', $photo);
            $data['photo']=$photo;
        }

        $service=Service::create($data);

        if ($service) {
            return redirect()->route('servicios.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El articulo ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('servicios.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        $service->fill($request->all())->save();

        if ($service) {
            return redirect()->route('servicios.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Servicio ha sido editado exitosamente.']);
        } else {
            return redirect()->route('servicios.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $service->delete();

        if ($service) {
            return redirect()->route('servicios.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'El articulo ha sido eliminado exitosamente.']);
        } else {
            return redirect()->route('servicios.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, $slug) {

        $service = Service::where('slug', $slug)->firstOrFail();
        $service->fill(['state' => "0"])->save();

        if ($service) {
            return redirect()->route('servicios.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El articulo ha sido desactivado exitosamente.']);
        } else {
            return redirect()->route('servicios.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, $slug) {

        $service = Service::where('slug', $slug)->firstOrFail();
        $service->fill(['state' => "1"])->save();

        if ($service) {
            return redirect()->route('servicios.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El articulo ha sido activado exitosamente.']);
        } else {
            return redirect()->route('servicios.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function myServices()
    {
        return view('admin.services.myServices');
    }
}
