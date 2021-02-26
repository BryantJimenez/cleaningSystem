<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $payments = Payment::all();
        return view('admin.payments.index', compact( 'payments', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeC(Request $request)
    {
        $data = array('user_id' => request('user_id'), 'contract_id' => request('contract_id'), 'bank_id' => request('bank_id'), 'type_pay' => request('type_pay'), 'total' => request('total'), 'reference' => request('reference'), 'date' => request('date'), 'issue_bank' => request('issue_bank'));


        $contract = Payment::create($data);

        if ($contract) {

            $user = User::where('id','=', request('user_id'))->firstOrFail();
            $data = array('contract_id' => request('contract_id'));
            $user->fill($data)->save();


            return redirect()->route('admin')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El contrato ha sido pagado exitosamente.']);

        } else {
            return redirect()->route('admin')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function storeH(Request $request)
    {
        //
    }

    public function storeS(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $payment = Payment::where('slug', $slug)->firstOrFail();
        return view('admin.payments.show', compact('payment'));
    }

    public function showC($id) {
        $payment = Payment::where('id', $id)->firstOrFail();
        return view('admin.payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $payment = Payment::where('slug', $slug)->firstOrFail();
        return view('admin.payments.show', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
