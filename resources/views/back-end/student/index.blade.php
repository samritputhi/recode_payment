@extends('layout.master')
@section('content')
    <table class="table table-dark" id="table_data">
    <a href="{{ route('student.create') }}" type="submit" class="btn btn-success mt-3 mb-3">Create</a>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Grade</th>
          <th scope="col">Province</th>
          <th scope="col">Phone</th>
          <th scope="col">Gender</th>
          <th scope="col">Order</th>
          <th scope="col">Status</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td><a target="_blank" href="{{ route('student.history',$item->id) }}">{{ $item->name }}</a></td>
          <td>{{ $item->grade }}</td>
          <td>{{ $item->province }}</td>
          <td>{{ $item->phone }}</td>
          <td>{{ $item->gender == 2 ? "Woman":"" }}{{ $item->gender == 1 ? "Man":"" }}</td>
          <td>{{ $item->order }}</td>
          <td>{{ $item->status }}</td>
          <td>
            <img class="txt_img" src="{{ url('images').'/'.$item->image }}" alt="">
          </td>
          <td class="w-25">
            <a href="{{ route('student.edit',$item->id) }}">Edit</a> | <a href="{{ route('student.delete',$item->id) }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center ">
      {{ $students->links() }}
    </div>
@endsection