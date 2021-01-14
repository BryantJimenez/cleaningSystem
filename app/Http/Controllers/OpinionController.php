<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $opinions = Opinion::all();
        return view('admin.opinions.index', compact( 'opinions', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opinions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $count = Opinion::where('name', request('name'))->where('name', request('name'))->count();
         $slug = Str::slug(request('name'), '-');
         if ($count>0) {
            $slug=$slug."-".$count;
        }

            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Opinion::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug, 'position' => request('position'), 'opinion' => request('opinion'));
                break;
            }
        }

        // Mover imagen a carpeta users y extraer nombre
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $photo=$slug.".".$file->getClientOriginalExtension();
            $file->move(public_path().'/admins/img/opinions/', $photo);
            $data['photo']=$photo;
        }

        $opinion = Opinion::create($data);

        if ($opinion) {
            return redirect()->route('opiniones.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La Opinion ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('opiniones.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $opinion = Opinion::where('slug', $slug)->firstOrFail();
        return view('admin.opinions.edit', compact('opinion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
         $opinion = Opinion::where('slug', $slug)->firstOrFail();

        $opinion->fill($request->all())->save();

        if ($opinion) {
            return redirect()->route('opiniones.index', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Sección ha sido editada exitosamente.']);
        } else {
            return redirect()->route('opiniones.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinion $opinion)
    {
        //
    }
}
