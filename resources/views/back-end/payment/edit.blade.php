@extends('layout.master')

@section('content')
    <div id="frm_data">
        <form action="{{ route('payment.update') }}" method="post">
            <label for="txt-id" id="title">Payment</label>
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <select class="form-control student_id" id="student_id" name="student_id">
                    @foreach($student as $item)
                    <option {{ $item->id == $payment->student_id ? "selected":"" }} value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select> 
            </div>
            @csrf
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control price" value="{{ $payment->price }}" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="start_date">Start Day</label>
                <input type="text" class="form-control start_date" value="{{ $payment->start_date }}"  id="start_date" name="start_date">
            </div>
            <div class="form-group">
                <label for="end_date">End Day</label>
                <input type="text" class="form-control end_date"  id="end_date" value="{{ $payment->end_date }}" name="end_date">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

