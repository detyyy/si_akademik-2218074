@extends('layouts.app')

@section('content')
    <div class="row mx-3 my-1">
        <h2 class="text-dark">DATA MAPEL</h2>
    </div>
    {{-- alert --}}
    @if (Session::has('success'))
        <div id="successAlert" class="alert alert-success" role="alert">

            <button id="closeButton" class="close-button" onclick="closeAlert()">&times;</button>
        </div>
    @endif

    <script>
        function closeAlert() {
            document.getElementById('successAlert').style.display = 'none';
        }
    </script>
    <div class="row">
        <div class="col-md">
            <a href="{{ route('mapel.create') }}" class="btn btn-dark btn-sm mb-2 mx-3"><i
                    class="fa fa-users"aria-hidden="true"></i>&nbsp;Tambah Data</a>
            <a href="#" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak
                Data</a>
            <div class="card shadow py-2 px-2">
                <div class="card-header my-1 mx-1">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Nama Mapel</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Tahun Ajaran</th>
                                <!-- <th scope="col">Jurusan</th>
                                <th scope="col">Guru Pengajar</th>
                                <th scope="col">Tahun Akademik</th> -->
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mapel as $mapel)
                                <tr>
                                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                                    <td class="align-middle">{{ $mapel->nama_mapel }}</td>
                                    <td class="align-middle">{{ $mapel->jadwal }}</td>
                                    <td class="align-middle">{{ $mapel->tahun_ajaran }}</td>
                                    <td class="align-middle">
                                        {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route(mapel.edit)}}" type="button" class="btn btn-warning">Update</a>
                                            <form action="{{ route('mapel.destroy', $mapel->id_mapel) }}" method="POST"
                                                class="btn btn-danger"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger p-0 mb-1">Delete</button>
                                            </form>
                                        </div> --}}
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('mapel.edit', $mapel->mapel) }}" type="button"
                                                class="btn btn-warning">Update</a>
                                            <form action="{{ route('mapel.destroy', $mapel->id_mapel) }}" method="POST">
                                                {{-- cross site ruquest forgery memverifikasi bahwa pengguna yang membuat permintaan --}}
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin Ingin Dihapus?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
