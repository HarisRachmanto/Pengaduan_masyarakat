@extends('_partials.navbarform')
@section('content')
    <div class="container-md">

        {{-- <div class="position-relative">
            <div class="position-absolute top-0 end-0">
                <a href="{{route('users.logout')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-power-off"></i>
                    <button type="" class="btn btn-danger">Logout</button>
                </a>
            </div>
        </div> --}}
        <div class="p-2">
            <center>
                <h3>Silahkan mengisi form untuk mengajukan laporan anda</h3>
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </center>
        </div>
        <form action="{{ route('pengaduan') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="invisible">
                <label for="disabledTextInput" class="form-label"><strong>Nik</strong></label>
                <input type="number" id="disabledTextInput" name="nik" class="form-control" value="{{ Auth::user()->nik }}" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"><strong>Tanggal</strong></label>
                <input type="date" name="tgl_pengaduan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"><strong>Isi Laporan</strong></label>
                <textarea name="isi_laporan" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="file" id="formFile" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
