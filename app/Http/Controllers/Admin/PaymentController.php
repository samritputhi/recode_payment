<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Payment,Student,History};

class PaymentController extends Controller
{
    public function index(){
        $payment = Payment::paginate(2);
        return view('back-end.payment.index',compact('payment'));
    }

    public function create(){
        $student = Student::all();
        return view('back-end.payment.create',compact('student'));
    }

    public function store(Request $request){
      
        $check = Payment::where('student_id',$request->student_id)->get();
        if( count($check) > 0 ){
            $payment = Payment::find($check[0]->id);
        }else{
            $payment = new Payment();
        }
        $payment->student_id = $request->student_id;
        $payment->price = $request->price;
        $payment->start_date = $request->start_date;
        $payment->end_date = $request->end_date;
        $payment->save();


        $history = new History();
        $history->student_id = $request->student_id;
        $history->price = $request->price;
        $history->start_date = $request->start_date;
        $history->end_date = $request->end_date;
        $history->save();
        return redirect()->route('payment.index');    
    }

    public function edit($id){
        $payment = Payment::find($id);
        $student = Student::all();
        return view('back-end.payment.edit',compact('payment','student'));
    }

    public function delete($id){
        $payment = Payment::find($id)->delete();
        return redirect()->route('payment.index');
    }

}
