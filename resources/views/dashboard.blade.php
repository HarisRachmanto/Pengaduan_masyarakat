@extends('_layouts.app')
@section('heading', 'dashboard')
@section('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pengaduan</th>
        <th scope="col">Foto</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td><button class="btn btn-primary me-2"><img src="{{ asset('img/edit.png') }}" style="height: 20px"></button><button class="btn btn-danger"><img src="{{ asset('img/delete.png') }}" style="height:20px"></button></td>
      </tr>
    </tbody>
  </table>
@endsection
