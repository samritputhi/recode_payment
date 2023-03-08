@extends('layout.master')
@section('content')
    <table class="table table-dark" id="table_data">
    <!-- <a href="" type="submit" class="btn btn-success mt-3 mb-3">Create</a> -->
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Student ID</th>
          <th scope="col">Price</th>
          <th scope="col">Start Day</th>
          <th scope="col">End Day</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($histories as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->student->name }}</td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->create_at }}</td>
          <td>{{ $item->start_date }}</td>
          <td>{{ $item->end_date }}</td>
          <td class="w-25">
            <a href="{{ route('payment.edit',$item->id) }}">Edit</a> | <a href="{{ route('student.delete',$item->id) }}">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center ">
      {{ $histories->links() }}
    </div>
@endsection