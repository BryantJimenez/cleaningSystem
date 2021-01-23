<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $banks = Bank::all();
        return view('admin.banks.index', compact( 'banks', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Bank::where('code', request('code'))->where('code', request('code'))->count();
        $slug = Str::slug(request('code'), '-');
        if ($count>0) {
            $slug=$slug."-".$count;
        }

        // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Bank::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug, 'code' => request('code'));
                break;
            }
        }

        $bank = Bank::create($data);

        if ($bank) {
            return redirect()->route('bancos.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El Banco ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('bancos.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function show(Banks $banks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $bank = Bank::where('slug', $slug)->firstOrFail();
        return view('admin.banks.edit', compact("bank"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $bank = Bank::where('slug', $slug)->firstOrFail();

        $bank->fill($request->all())->save();

        if ($bank) {
            return redirect()->route('bancos.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Banco ha sido editado exitosamente.']);
        } else {
            return redirect()->route('bancos.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banks $banks)
    {
        //
    }
}
