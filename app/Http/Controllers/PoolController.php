<?php

namespace App\Http\Controllers;

use App\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $pools = Pool::all();
        return view('admin.pools.index', compact( 'pools', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $count = Pool::where('name', request('name'))->where('name', request('name'))->count();
        $slug = Str::slug(request('name'), '-');
        if ($count>0) {
            $slug=$slug."-".$count;
        }

        // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Pool::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug);
                break;
            }
        }

        $pool = Pool::create($data);

        if ($pool) {
            return redirect()->route('piscinas.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La Piscina ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('piscinas.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function show(Pool $pool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $pool = Pool::where('slug', $slug)->firstOrFail();
        return view('admin.pools.edit', compact('pool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $pool = Pool::where('slug', $slug)->firstOrFail();

        $pool->fill($request->all())->save();

        if ($pool) {
            return redirect()->route('piscinas.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Piscina ha sido editada exitosamente.']);
        } else {
            return redirect()->route('piscinas.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $pool = Pool::where('slug', $slug)->firstOrFail();
        $pool->delete();

        if ($pool) {
            return redirect()->route('piscinas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'La Piscina ha sido eliminada exitosamente.']);
        } else {
            return redirect()->route('piscinas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, $slug) {

        $pool = Pool::where('slug', $slug)->firstOrFail();
        $pool->fill(['state' => "0"])->save();

        if ($pool) {
            return redirect()->route('piscinas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Piscina ha sido desactivada exitosamente.']);
        } else {
            return redirect()->route('piscinas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, $slug) {

        $pool = Pool::where('slug', $slug)->firstOrFail();
        $pool->fill(['state' => "1"])->save();

        if ($pool) {
            return redirect()->route('piscinas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Piscina ha sido activada exitosamente.']);
        } else {
            return redirect()->route('piscinas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
