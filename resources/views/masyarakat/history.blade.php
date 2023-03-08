@extends('_partials.navbarform')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Tanggal Pengaduan</th>
        <th scope="col">Isi Laporan</th>
        <th scope="col">Foto</th>
        <th scope="col">Tanggapan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
          

      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->tgl_pengaduan }}</td>
        <td>{{ $item->isi_laporan }}</td>
        <td>                                
          @if ($item->foto)
          <img style="width:50px; height:50px; oferflow:hidden;"
              src="{{ asset('storage/' . $item->foto) }}" alt=" ">
          @else
          <img style="width:50px; height:50px; oferflow:hidden;"
          src="{{ asset('img/ppnull.jpg') }}" alt="">
          @endif
           </td>
          <td>{{ $item->tanggapan->tanggapan ?? '-' }}</td>
      @endforeach
    </tbody>
  </table>
@endsection