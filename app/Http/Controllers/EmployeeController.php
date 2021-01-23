<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $num=1;
        $employees = Employee::all();
        return view('admin.employees.index', compact( 'employees', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business = Business::all();
        return view('admin.employees.create', compact('business'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $count = Employee::where('name', request('name'))->where('dni', request('dni'))->count();
         $slug = Str::slug(request('dni'), '-');
         if ($count>0) {
            $slug=$slug."-".$count;
        }

            // Validación para que no se repita el slug
        $num = 0;
        while (true) {
            $count2 = Employee::where('slug', $slug)->count();
            if ($count2>0) {
                $slug = $slug."-".$num;
                $num++;
            } else {
                $data = array('name' => request('name'), 'lastname' => request('lastname'), 'slug' => $slug, 'business_id' => request('business_id'), 'phone' => request('phone'), 'email' => request('email'), 'address' => request('address'), 'dni' => request('dni'));
                break;
            }
        }

        $employee = Employee::create($data);

        if ($employee) {
            return redirect()->route('empleados.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El Empleado ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('empleados.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $employee = Employee::where('slug', $slug)->firstOrFail();
        return view('admin.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $business = Business::all();
        $employee = Employee::where('slug', $slug)->firstOrFail();
        return view('admin.employees.edit', compact("employee", "business"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $slug)
    {
        $employee = Employee::where('slug', $slug)->firstOrFail();

        $employee->fill($request->all())->save();

        if ($employee) {
            return redirect()->route('empleados.edit', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El Empleado ha sido editado exitosamente.']);
        } else {
            return redirect()->route('empleados.edit', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
