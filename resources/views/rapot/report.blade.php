<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px;
        }
    </style>
    <title>Cetak Data Rapot</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Rapot</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">Nilai</th>
                <th scope="col">Mapel</th>
                <th scope="col">Guru Lahir</th>
                <!-- <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">No.Telpon</th>
                <th scope="col">Agama</th>
                <th scope="col">Jabatan</th> -->
            </tr>
            @foreach ($rapot as $rapot)
                <tr>
                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                    <td class="align-middle">{{ $rapot->nilai }}</td>
                    <td class="align-middle">{{ $rapot->mapel }}</td>
                    <td class="align-middle">{{ $rapot->guru }}</td>
                    <!-- <td class="align-middle">{{ $rapot->alamat }}</td>
                    <td class="align-middle">{{ $rapot->no_telp }}</td>
                    <td class="align-middle">{{ $rapot->agama }}</td>
                    <td class="align-middle">{{ $rapot->jabatan }}</td> -->
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
