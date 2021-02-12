<?php
 
namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $contracts = Contract::all();
        return view('admin.contracts.index', compact( 'contracts', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contracts.create');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $count = Contract::where('name', request('name'))->where('name', request('name'))->count();
         $slug = Str::slug(request('name'), '-');
         if ($count>0) {
            $slug=$slug."-".$count;
        }

            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Contract::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'slug' => $slug, 'price' => request('price'));
                break;
            }
        }

        $contract = Contract::create($data);

        if ($contract) {
            return redirect()->route('contratos.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El Contrato ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('contratos.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $contract = Contract::where('slug', $slug)->firstOrFail();
        return view('admin.contracts.edit', compact("contract"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $slug)
    {
        $contract = Contract::where('slug', $slug)->firstOrFail();

        $contract->fill($request->all())->save();

        if ($contract) {
            return redirect()->route('contratos.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Contrato ha sido editada exitosamente.']);
        } else {
            return redirect()->route('contratos.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $contract = Contract::where('slug', $slug)->firstOrFail();
        $contract->delete();

        if ($contract) {
            return redirect()->route('compania.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'El Contrato ha sido eliminada exitosamente.']);
        } else {
            return redirect()->route('compania.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, $slug) {

        $contract = Contract::where('slug', $slug)->firstOrFail();
        $contract->fill(['state' => "0"])->save();

        if ($contract) {
            return redirect()->route('compania.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Contrato ha sido desactivada exitosamente.']);
        } else {
            return redirect()->route('compania.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, $slug) {

        $contract = Contract::where('slug', $slug)->firstOrFail();
        $contract->fill(['state' => "1"])->save();

        if ($contract) {
            return redirect()->route('compania.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Contrato ha sido activada exitosamente.']);
        } else {
            return redirect()->route('compania.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
