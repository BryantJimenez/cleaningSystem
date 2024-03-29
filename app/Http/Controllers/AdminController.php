<?php

namespace App\Http\Controllers;

use App\User;
use App\Section;
use App\Contract;
use App\Bank;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $users=User::count();
        return view('admin.home', compact( 'users'));
    }

    public function profile() {
        return view('admin.profile');
    }

    public function profileEdit() {
        return view('admin.edit');
    }

    public function profileUpdate(ProfileUpdateRequest $request) {
        $user = User::where('slug', Auth::user()->slug)->firstOrFail();
        $data=array('name' => request('name'), 'lastname' => request('lastname'), 'phone' => request('phone'), 'type' => request('type'));

        if (!is_null(request('password'))) {
            $data['password']=Hash::make(request('password'));
        }

        // Mover imagen a carpeta users y extraer nombre
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $photo=$slug.".".$file->getClientOriginalExtension();
            if (file_exists(public_path().'/admins/img/users/'.$photo)) {
                unlink(public_path().'/admins/img/users/'.$photo);
            }
            $file->move(public_path().'/admins/img/users/', $photo);
            $data['photo']=$photo;
        }

        $user->fill($data)->save();

        if ($user) {
            if ($request->hasFile('photo')) {
                Auth::user()->photo=request('photo');
            }
            Auth::user()->name=request('name');
            Auth::user()->lastname=request('lastname');
            Auth::user()->phone=request('phone');
            Auth::user()->type=request('type');
            if (!is_null(request('password'))) {
                Auth::user()->password=Hash::make(request('password'));
            }
            return redirect()->back()->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El perfil ha sido editado exitosamente.']);
        } else {
            return redirect()->back()->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

     public function contract(){
        $contracts = Contract::all();
        return view('admin.register.contract', compact('contracts'));
    }

    public function pay(Request $request){
        $slug = request('slug');
        $con = Contract::where('slug', '=', $slug)->firstOrFail();
        $id = $con->id;
        $name = $con->name;
        $price = $con->price;
        $bank1 = Bank::where('type', '=', '1')->get();
        $bank0 = Bank::where('type', '=', '0')->get();
        
        return view('admin.register.pay', compact('name', 'id', 'price', 'bank1', 'bank0'));
    }

    public function company(){
        return view('admin.register.companies');
    }

    public function state(){
        return view('admin.register.state');
    }

    public function photo(){
        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $data = array('contract_id' => '1');
        $user->fill($data)->save();
        return view('admin.register.photos');
    }



}
