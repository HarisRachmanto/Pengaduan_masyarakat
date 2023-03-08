<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <style>
        table {
            margin-top: 35px;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            font-size: 14px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <center><h3><strong>Hasil Laporan Pengaduan Masyarakat</strong></h3></center>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Pengaduan</th>
                <th scope="col">Isi Laporan</th>
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
                    <td>{{ $item->tanggapan->tanggapan ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
