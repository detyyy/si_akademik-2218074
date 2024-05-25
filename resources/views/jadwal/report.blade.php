<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px;
        }
    </style>
    <title>Cetak Jadwal Pelajaran</title>
</head>

<body>
    <div class="form-group">
    <h1 align="center"><b>Laporan Data Jadwal Pelajaran</b></h1>
    <p  align="center"><b>SMA Tamansiswa Sukabumi</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <!-- <th scope="col">No</th> -->
            <th scope="col">Hari</th>
            <th scope="col">Nama_Mapel</th>
            <th scope="col">Tahun_Ajaran</th>
            <!-- <th scope="col">Kelas</th>
            <th scope="col">Mata Pelajaran</th> -->
        </tr>
        @foreach ($jadwal as $jadwal)
            <tr>
                <td class="align-middle">{{ $loop->index + 1 }}</td>
                <td class="align-middle">{{ $jadwal->hari }}</td>
                <td class="align-middle">{{ $jadwal->nama_mapel }}</td>
                <td class="align-middle">{{ $jadwal->thn_ajaran }}</td>
                <!-- <td class="align-middle">{{ $jadwal->jurusan['jurusan'] }}</td>
                <td class="align-middle">{{ $jadwal->kelas['kelas'] }}</td>
                <td class="align-middle">{{ $jadwal->matapelajaran['pelajaran'] }}</td> -->
            </tr>
        @endforeach
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</body>

</html>
