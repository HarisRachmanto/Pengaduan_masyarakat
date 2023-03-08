<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanggapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <div class="p-2">

            <center>
                <h3>Tanggapan</h3>
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
        <form action="{{ route('tanggapan', $data->id_pengaduan) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label"><strong>Tanggal</strong></label>
                <input type="date" name="tgl_tanggapan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"><strong>Isi Tanggapan</strong></label>
                <textarea name="tanggapan" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>