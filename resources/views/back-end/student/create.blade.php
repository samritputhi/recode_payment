@extends('layout.master')

@section('content')
    <div id="frm_data">
        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
            <label for="txt-id" id="title">Student</label>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control name" id="name" name="name">
            </div>
            @csrf
            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control grade" id="grade" name="grade">
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" class="form-control province" id="province" name="province">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control phone" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control gender" id="gender" name="gender">
                    <option value="1">Man</option>
                    <option value="2">Woman</option>
                </select> 
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control status" name="status" id="status">
                    <option value="1">Active</option>
                    <option value="0">Disable</option>
                </select>  
            </div>
            <div class="form-group">
                <label for="txt-od">Order</label>
                <input type="number" class="form-control order" id="order" name="order">
            </div>
            <div class="img_box">
                <input type="file" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

