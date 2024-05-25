@extends('layouts.app')

@section('content')
    <div class="row mx-3 my-1">
        <h2 class="text-dark">DATA NILAI</h2>
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
            <a href="{{ route('jurusan.create') }}" class="btn btn-dark btn-sm mb-2 mx-3"><i
                    class="fa fa-users"aria-hidden="true"></i>&nbsp;Tambah Data</a>
            <a href="{{ route('jurusan.report') }}" target="_blank" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak
                Data</a>
            <div class="card shadow py-2 px-2">
                <div class="card-header my-1 mx-1">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Nilai Tgs</th>
                                <th scope="col">Nilai Uts</th>
                                th scope="col">Nilai Uas</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai as $nilai)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $nilai->nilai }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route ('nilai.edit', $nilai->id_nilai)}}" type="button"
                                                class="btn btn-warning">Update</a>
                                            <form action="{{ route('nilai.destroy', $nilai->id_nilai) }}" method="POST"
                                                class="btn btn-danger"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger p-0 mb-1">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endsection
