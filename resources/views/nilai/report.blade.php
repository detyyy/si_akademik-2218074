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
    <title>Cetak Data Nilai</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Nilai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">Nilai Tgs</th>
                <th scope="col">Nilai Uts</th>
                <th scope="col">Nilai Uas</th>
            </tr>
            @foreach ($nilai as $nilai)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $nilai->nilai }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
