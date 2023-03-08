@extends('_layouts.app')
@section('heading', 'Pengaduan')
@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Pengaduan</th>
                <th scope="col">Isi Laporan</th>
                <th scope="col">Foto</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggapan</th>
                <th scope="col">Action</th>
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
                            <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('storage/' . $item->foto) }}"
                                alt=" ">
                        @else
                            <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('img/ppnull.jpg') }}"
                                alt="">
                        @endif

                    </td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->tanggapan->tanggapan ?? '-' }}</td>
                    <form action="{{ route('DashboardPengaduanDestroy', $item->id_pengaduan) }}" method="post">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger me-2"><img src="{{ asset('img/delete.png') }}"
                                    style="height:20px"></button>
                    </form>
                    @if ($item->status == 'selesai')
                        <button class="btn btn-info"><a href="{{ route('cetak', $item->id_pengaduan) }}"><img src="{{ asset('img/cetak.png') }}" style="height: 20px"></a></button>
                    @endif
                    @if ($item->status == 'proses')
                    <button class="btn btn-success me-2"><a href="{{ route('tanggapandash', $item->id_pengaduan) }}"><img src="{{ asset('img/message.png') }}" style="height:20px"></a></button>
                    @endif
                    
                    @if ($item->status == '0')
                    <button class="btn btn-primary"><a href="{{ route('status', $item->id_pengaduan) }}"><img src="img/status.png" style="height:20px"></a></button>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
