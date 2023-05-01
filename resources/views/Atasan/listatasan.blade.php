@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
<div class="card">
    <h1 class="mb-1 h1 mb-0 font-weight-bold mb-4" style="margin-top: 10px; margin-left: 3.1%;">{{ __('List Atasan') }}</h1>

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($atasan as $item)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td><a href="#" class="btn btn-sm btn-danger">Detail</a></td>
            @endforeach
          </tr>
        </tbody>
      </table>
</div>

@endsection
